<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedalsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function example(Request $request){ 

        if (!is_null($request->json_output)) {

            if (json_validate($members = $request->json_output)){
                return view('example', compact('members'));
            }else{ echo "Entrada JSON inválida";
            }

        }else{ echo "Entrada JSON nula"; }

    }

    public function rank(Request $request){
        $json = json_decode(@$request->json_input);

        foreach ($json->members as $key => $value) {
            $names[$key] = $value->name;
            $medals[$key] = [$value->gold,$value->silver,$value->bronze];
            $ordem[$key] = [$value->last_gold_at,$value->last_silver_at,$value->last_bronze_at];
        }

        asort($ordem); //Organizando por tempo    

        foreach ($ordem as $key1 => $value2) {
            $med[$key1] = [$medals[$key1][0], $medals[$key1][1], $medals[$key1][2]];
        }

        arsort($med); //Organizando por medalhas  

        foreach ($med as $key3 => $value3){
            $out[$key3] = array( "name" => $names[$key3],
                                    "gold" => $med[$key3][0],
                                    "silver" => $med[$key3][1],
                                    "bronze" => $med[$key3][2],
                                    "last_gold_at" => $ordem[$key3][0],
                                    "last_silver_at" => $ordem[$key3][1],
                                    "last_bronze_at" => $ordem[$key3][2],
                                     );
        }
        $output = json_encode($out, JSON_UNESCAPED_UNICODE);   
        return view('index', compact('output')); 
    }
}

        /*

        O pior cenário: Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
        O que seria impossível, pois a verificação ocorre na sequencia ouro>prata>bronze

      */