@extends('admin.layouts.app')

@section('title', 'Cadastro de Produtos')

@section('titleBody', 'Formulário de Produtos')
    
@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{old('name')}}">
        <input type="text" name="description" placeholder="descrição" value="{{old('description')}}">
        <input type="file" name="photo">
        <button type="submit">Cadastrar</button>
    </form>

@endsection