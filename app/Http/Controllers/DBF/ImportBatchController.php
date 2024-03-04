<?php

namespace App\Http\Controllers\DBF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImportBatchController extends Controller
{
    public function showBatch(Request $request, $batchNumber)
    {
        $batches = Session::get('import_batches', []);
        $totalCount = count($batches);
        $batchSize = 5000;
        //dd($batches);
        if ($batchNumber >= $totalCount) {
            // Se todos os lotes foram importados com sucesso, redirecionar para a página de sucesso
            Session::forget('dbf_records');
            Session::forget('import_batches');
            Session::forget('modelName');
            return redirect()->route('import-dbf-batch-success');
        }

        // Verificar se o lote atual existe
        if (!isset($batches[$batchNumber])) {
            return redirect()->route('import-dbf')->withErrors('Lote inválido ou inexistente.');
        }

        // Obter o lote atual a ser exibido
        $batch = $batches[$batchNumber];

        // Verificar se o lote atual não está vazio
        if (empty($batch)) {
            return redirect()->route('import-dbf')->withErrors('Lote vazio encontrado. Nenhum registro para incluir no lote.');
        }

        $startRecord = $batchNumber * $batchSize + 1;
        $endRecord = min(($batchNumber + 1) * $batchSize, count($batches));

        return view('dbf.import_dbf_batch', compact('startRecord', 'endRecord', 'totalCount', 'batch', 'batchNumber'));
    }

    public function insertBatch(Request $request)
    {
        $batchNumber = $request->input('batchNumber', 0);
        $batches = Session::get('import_batches', []);

        $totalCount = count($batches);
        if ($batchNumber > $totalCount) {
            // Se todos os lotes foram importados com sucesso, redirecione para a página de sucesso
            Session::forget('dbf_records');
            Session::forget('modelName');
            Session::forget('import_batches');
            return redirect()->route('import-dbf-batch-success');
        }

        // Obter o lote atual a ser inserido
        $batch = $batches[$batchNumber];
        //dd($batch);
        // Obter o nome do modelo passado como parâmetro
        $modelName = Session::get('modelName');
        //dd($modelName);
        // Verificar se a classe do modelo existe
        if (!class_exists($modelName)) {
            return redirect()->route('import-dbf')->withErrors('O modelo especificado não foi encontrado.');
        }

        // Criar uma instância do modelo

        $modelInstance = new $modelName;

        // Verificar se o modelo tem o método getFillable() definido e chamá-lo para obter os campos preenchíveis
        if (!method_exists($modelInstance, 'getFillable')) {
            return redirect()->route('import-dbf')->withErrors('O modelo não possui método getFillable() definido.');
        }

        // Obter os campos preenchíveis do modelo
        $fillableFields = $modelInstance->getFillable();
        //dd($fillableFields);
        // Preparar os dados para inserção em massa
        $dataToInsert = [];
        foreach ($batch as $record) {

            $values = array_values($record);
            $fillableData = array_combine($fillableFields, $values);
            $dataToInsert[] = $fillableData;
            //dd($values);
            //dd($fillableData);
        }
        //dd($dataToInsert);
        // Inserir registros no banco de dados em massa usando o método insert()
        $modelInstance->insert($dataToInsert);

        // Remover o lote atual da sessão
        unset($batches[$batchNumber]);
        //dd($batches);
//        if (!empty($batches)) {
//            // Armazenar os lotes na sessão para uso posterior
//            Session::put('import_batches', $batches);
//        }
        $nextBatchNumber = $batchNumber + 1;
        // Redirecionar para a próxima página do lote
        return $this->showBatch($request, $nextBatchNumber);
    }

    public function skipBatch(Request $request)
    {
        $batchNumber = $request->input('batchNumber');
        $batches = Session::get('import_batches', []);

        $totalCount = count($batches);
        if ($batchNumber > $totalCount) {
            // Se todos os lotes foram importados com sucesso, redirecione para a página de sucesso
            Session::forget('dbf_records');
            Session::forget('modelName');
            Session::forget('import_batches');
            return redirect()->route('import-dbf-batch-success');
        }

        // Remover o lote atual da sessão
        unset($batches[$batchNumber]);
        Session::put('import_batches', array_values($batches));

        // Redirecionar para a próxima página do lote
        return redirect()->route('import-dbf-batch', ['batchNumber' => $batchNumber + 1]);
    }
    public function batch(Request $request)
    {
        $batches = Session::get('import_batches', []);
        $totalCount = count($batches);
        $batchSize = 5000;
        $batchNumber = $request->input('batchNumber', 0);

        if ($batchNumber > $totalCount) {
            // Se todos os lotes foram importados com sucesso, redirecionar para a página de sucesso
            Session::forget('dbf_records');
            Session::forget('modelName');
            Session::forget('import_batches');
            return redirect()->route('import-dbf-batch-success');
        }

        // Obter o lote atual a ser exibido
        $batch = $batches[$batchNumber];
        $startRecord = $batchNumber * $batchSize + 1;
        $endRecord = min(($batchNumber + 1) * $batchSize, count($batch)); // Alteração desta linha

        return view('dbf.import_dbf_batch', compact('startRecord', 'endRecord', 'totalCount', 'batch', 'batchNumber'));
    }
}
