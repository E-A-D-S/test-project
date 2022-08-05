@extends('template.users')
@section('title', "product {$product->name}")
@section ('body')


<h1> Produtos</H1>
@if($errors->any())

<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    {{ $error }}<br>
    @endforeach
</div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                Nome<input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
            </div>
        </div>

        <div class="col-8">
            <div class="form-group">
                Descrição<input type="text" class="form-control" id="description" name="description">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                Codigo de Barras<input type="number" class="form-control" id="code_bars" name="code_bars">
            </div>

        </div>
        <div class="col-4">
            <div class="form-group">
                Cor<input type="text" class="form-control" id="color" name="color">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Tamanho<input type="text" class="form-control" id="size" name="size">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Marca<input type="text" class="form-control" id="brand" name="brand">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Preço de custo<input type="text" class="form-control" id="cost" name="cost">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Preço de venda<input type="text" class="form-control" id="sale" name="sale">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Categoria<input type="text" class="form-control" id="category" name="category">
            </div>
        </div>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label text-white"> Selecione uma Imagem</label>
            <input type="file" class="form-control form control-md" id="image" name="image" />
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection