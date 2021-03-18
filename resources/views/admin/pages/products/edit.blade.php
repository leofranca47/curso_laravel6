@extends('admin.layouts.app')

@section('title', 'Editar Produtos')

    
@section('content')
    <h1>Editar Produtos {{$product->name}} <a class="btn btn-primary" href="{{route('products.index')}}"><<</a></h1>


    <form action="{{route('products.update', $product->id)}}" method="post">
        @method('PUT')
        @include('admin.layouts.form')
    </form>
    <form action="{{route('products.destroy', $product->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
@endsection