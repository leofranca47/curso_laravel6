@extends('admin.layouts.app')

@section('title', 'Cadastro de Produtos')
    
@section('content')

    @section('titleBody', 'Formulário de Produtos')

    @include('admin.includes.alerts')
    
    <form class="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
       @include('admin.layouts.form')
    </form>

@endsection