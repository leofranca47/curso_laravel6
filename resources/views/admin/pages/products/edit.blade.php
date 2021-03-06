@extends('admin.layouts.app')

@section('title', 'Editar Produtos')

    
@section('content')
    <h1>Editar Produtos {{$id}}</h1>

    <form action="{{route('products.update', $id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="text">
        <button type="submit">Cadastrar</button>
    </form>
@endsection