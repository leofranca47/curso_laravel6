@extends('admin.layouts.app')

@section('title', 'Cadastro de Produtos')

@section('titleBody', 'Formulário de Produtos')
    
@section('content')
    
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="text">
        <button type="submit">Cadastrar</button>
    </form>

@endsection