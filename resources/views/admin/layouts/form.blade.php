@csrf
<div class="form-group">
    <input class="form-control" type="text" name="name" placeholder="Nome" value="{{$product->name ?? old('name')}}">
</div>
<div class="form-group">
    <input class="form-control" type="text" name="price" placeholder="Preço" value="{{$product->price ?? old('price')}}">
</div>
<div class="form-group">
    <input class="form-control" type="text" name="description" placeholder="descrição" value="{{$product->description ?? old('description')}}">
</div>
<div class="form-group">
    <input class="form-control" type="file" name="image">
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
</div>