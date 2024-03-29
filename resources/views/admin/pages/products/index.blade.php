@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')

@section('titleBody', 'Lista de Produtos')

    <a class="btn btn-primary" href="{{ route('products.create') }}">Cadastrar</a>
    <hr>
    <form action="{{ route('products.search') }}" method="POST">
        @csrf
        <input type="text" name="filter" placeholder="Filtrar" value="{{ $filters['filter'] ?? '' }}">
        <button type="submit" class="btn btn-info">Pesquisar</button>
    </form>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100px">Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th width="100px">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->image)
                            <img src="{{ url("storage/{$product->image}") }}" alt="{{ $product->name }}" width="40px">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                        <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (isset($filters))
        {!! $products->appends($filters)->links() !!}
    @else
        {!! $products->links() !!}
    @endif
@endsection
