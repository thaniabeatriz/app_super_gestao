<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11', // São Paulo
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S',  
                'cnpj' => null,
                'ddd'=> '85', // Fortaleza
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S',  
                'cnpj' => null,
                'ddd'=> '32', // Juiz de Fora
                'telefone' => '0000-0000'
            ]
        ];

        /* 
        condicao ? se verdade : se falso;
        condicao ? se verdade : (condicao ? se verdade : se falso);
        */
        return view ('app.fornecedor.index', compact('fornecedores'));
    }
}
