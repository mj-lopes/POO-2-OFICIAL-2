<?php

namespace App\Http\Controllers;

use App\Functions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FunctionsController extends Controller
{
    public function index()
    {
        $questoes = new Functions;
        $questoes = DB::select('select * from functions');
        return view('index')->with('questoes', $questoes);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        
        $function = new Functions();
        $function->coef_a = $request->coef_a;
        $function->coef_b = $request->coef_b;
        $function->coef_c = $request->coef_c;

        $coefa = $request->coef_a;
        $coefb = $request->coef_b;
        $coefc = $request->coef_c;

        $calDelta = ($coefb * $coefb) - 4 * $coefa * $coefc;
        $function->delta = $calDelta;        

        if ($calDelta < 0) {
            return redirect()->route('listarQuestoes');
        } elseif ($calDelta == 0) {
            $x1 = (- $coefb + sqrt($calDelta)) / 2 * $coefa;

            $function->x1 = $x1;
            $function->x2 = $x1;
        } else if ($calDelta > 0){
            $x1 = (- $coefb + sqrt($calDelta)) / (2 * $coefa);
            $x2 = (- $coefb - sqrt($calDelta)) / (2 * $coefa);
            
            $function->x1 = $x1;
            $function->x2 = $x2;

        }

        $questao = $coefa. "x² ". $coefb. "x  ". $coefc;
        $function->question = $questao;        
        $function->save();
       
        return redirect()->route('listarQuestoes');
    }

}
