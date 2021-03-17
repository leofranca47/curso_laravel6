@extends('admin.layouts.app')

@section('title', 'Editar Produtos')

    
@section('content')
    <h1>Editar Produtos {{$product->name}}</h1>

    <form action="{{route('products.update', $product->id)}}" method="post">
        @method('PUT')
        @include('admin.layouts.form')
    </form>
@endsection