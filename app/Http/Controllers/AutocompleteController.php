<?php
namespace App\Http\Controllers;
use App\Models\Familia;
use Illuminate\Http\Request;

class AutocompleteController extends Controller
{
    public function index()
    {
        return view('autocomplete');
    }

    public function AutoComplete(Request $request)
    {
        //$search = $request->get('term');
        $result = Familia::where('den_familia', 'LIKE',"%{$request->get('term')}%")->get();
        //dump($request);
        $response= array();
        foreach($result as $familia) {
            $response[] = array("value"=>$familia->cod_familia,"label"=>trim($familia->den_familia));
        }
        //dd($response);
        return response()->json($response);
    }

}
