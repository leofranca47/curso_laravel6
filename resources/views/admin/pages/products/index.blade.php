@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')

    @section('titleBody', 'Lista de Produtos')

    @foreach ($products as $product)
        <p>{{$product}}</p>
    @endforeach
    <a href={{ route('products.create') }}>Cradastrar novo produto</a>
@endsection