@extends('layouts.app')
<title class="">Editar</title>
@section('content')

<div class="container jumbotron">
<h1>Cadastro de Novo Produto</h1><br/>
    <div class="col-md-8">
    <form action="{{route('produtos.update',['produto'=> $produto->id])}}" class="form-horizontal" method="POST"> <!--Chama a rota que foi definida para todos controlermodelo-->
        @csrf
        @method('PUT') 
        <div class="row col-md-4">
            <label >Codigo Produto</label>
            <input type="text" class="form-control" name="codigo" maxlength="10px" value="{{old('produto',$produto->codigo)}}">
        </div>
        <br />
        <div class="row col-md-6" style="margin-left:33%;margin-top:-13%;">
            <label >Nome</label>
            <input type="text" class="form-control" name="nome" value="{{old('produto',$produto->nome)}}">
        </div>
        <br />
        <div class="row col-md-6">
            <label >Marcar</label>
            <input type="text" class="form-control" name="marca" value="{{old('produto',$produto->marca)}}">
        </div>
        <br />
        <div class="row col-md-4" style="margin-left:50%;margin-top:-13%;" >
            <label >Valor</label>
            <input type="text" class="form-control" name="valor" value="{{old('produto',$produto->valor)}}">
        </div>
        <br />
        <div class="row col-md-4">
            <label >Data Entrada</label>
            <input type="date" class="form-control" name="data_entrada" value="{{old('produto',$produto->data_entrada)}}">
        </div>
        <br />
        <div class="row col-md-4" style="margin-left:33%;margin-top:-13%;">
            <label >Data Saida</label>
            <input type="date" class="form-control" name="data_saida" value="{{old('produto',$produto->data_saida)}}">
        </div>
        <br />
        <div class="row"><button type="submit"class="btn btn-danger">Atualizar</button></div>
    </form>
    </div>
</div>

@endsection