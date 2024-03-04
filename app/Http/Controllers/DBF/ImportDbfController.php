<?php

namespace App\Http\Controllers\DBF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use XBase\TableReader;

class ImportDbfController extends Controller
{
    public function index()
    {
        //Session::forget('dbf_records');
        return view('DBF/import_dbf');
    }

    public function import(Request $request)
    {
        $filename = $request->input('filename');
        $modelName = $request->input('model_name');

        // Verificar se o arquivo existe
        if (!file_exists($filename)) {
            return redirect()->back()->withErrors('Arquivo DBF não encontrado.');
        }

        // Verificar se o modelo existe
        if (!class_exists($modelName)) {
            return redirect()->back()->withErrors('O modelo especificado não foi encontrado.');
        }

        // Ler o arquivo DBF usando o TableReader do hisamu/php-xbase
        $table = new TableReader($filename, ['encoding' => 'cp1252']);

        // Obter as colunas do arquivo DBF
        $columns = $table->getColumns();

        // Obter todos os registros do arquivo DBF
        $records = [];
        while ($record = $table->nextRecord()) {
            $recordData = [];
            foreach ($columns as $column) {
                $recordData[$column->getName()] = $record->get($column->getName());
            }
            $records[] = $recordData;
        }
        //dd($records);
        // Dividir os registros em lotes de 5000
        $batchSize = 5000;
        $batches = array_chunk($records, $batchSize);

        // Armazenar os lotes na sessão para uso posterior
        Session::put('import_batches', $batches);
        Session::put('dbf_records',$records);
        Session::put('modelName', $modelName);
        // Criar uma instância do modelo
        $modelInstance = new $modelName;

        return view('dbf.import_dbf_result', compact('columns', 'records', 'modelName', 'modelInstance'));
    }

    public function insertRecords($modelName)
    {
        $records = Session::get('dbf_records');
        //dd($records);
        // Verificar se existem registros para inserir
        if (empty($records)) {
            return redirect()->route('import-dbf')->withErrors('Não há registros para inserir.');
        }

        // Criar uma instância do modelo
        $modelInstance = new $modelName;
        //dd($modelInstance);
        // Verificar se o modelo tem campos $fillable definidos
        if (!method_exists($modelInstance, 'getFillable')) {
            return redirect()->route('import-dbf')->withErrors('O modelo não possui método getFillable() definido.');
        }

        // Obter os campos preenchíveis do modelo
        $fillableFields = $modelInstance->getFillable();
        //dd($fillableFields);
        // Preparar os dados para inserção em massa
        $dataToInsert = [];
        foreach ($records as $record) {
            // Remover os nomes dos campos do DBF, mantendo apenas os valores
            //dd($record);
            $values = array_values($record);
            //dd($values);
            //dd($fillableFields);
            //dd(array_combine($fillableFields, $values));
            $fillableData = array_combine($fillableFields, $values);
            //dd($fillableData);
            $dataToInsert[] = $fillableData;
        }
        //dd($dataToInsert);
        // Inserir registros no banco de dados em massa usando o método create()
        $modelInstance->insert($dataToInsert);

        Session::forget('dbf_records');
        Session::forget('import_batches');
        Session::forget('modelName');


        return redirect()->route('import-dbf-batch-success');
    }
    public function updateCodItem()
    {
        try {
            // Importar o modelo ESIT004
            $modelName = 'App\Models\DBF\ESIT004'; // Substitua pelo namespace correto do seu modelo
            $modelInstance = new $modelName;

            // Obter todos os registros do modelo ESIT004
            $records = $modelInstance->all();

            // Atualizar o campo cod_item removendo os pontos da string
            foreach ($records as $record) {
                $codItem = $record->cod_item;
                $codItem = str_replace('.', '', $codItem);
                $record->cod_item = $codItem;
                $record->save();
            }

            return redirect()->route('import-dbf')->with('success', 'Campo cod_item atualizado com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('import-dbf')->withErrors('Erro ao atualizar o campo cod_item: ' . $e->getMessage());
        }
    }

}
