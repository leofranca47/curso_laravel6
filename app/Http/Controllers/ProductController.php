<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $arrayProduto = ['Produto 1', 'Produto 2', 'Produto 3'];
        return $arrayProduto;
    }
}
