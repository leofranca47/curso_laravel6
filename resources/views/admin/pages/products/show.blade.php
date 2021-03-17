@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')

    @section('titleBody', "Produto $product->name")

    <a class="btn btn-success" href="{{route('products.index')}}"> << </a>

    <ul>
        <li><strong>Nome: </strong> {{$product->name}}</li>
        <li><strong>Preço: </strong> {{$product->price}}</li>
        <li><strong>Descrição: </strong> {{$product->description}}</li>
    </ul>

    <form action="{{route('products.destroy', $product->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Deletar Produto {{$product->name}}</button>
    </form>

@endsection