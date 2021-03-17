@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')

    @section('titleBody', 'Lista de Produtos')

    <a class="btn btn-primary" href="{{route('products.create')}}">Cadastrar</a>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th width="100">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('products.edit', $product->id)}}">Editar</a>
                    <a href="{{route('products.show', $product->id)}}">Detalhes</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$products->links()!!}
@endsection