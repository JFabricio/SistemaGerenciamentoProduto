
@extends('layouts.app')
<title class="">Home</title>
@section('content')



    <div class="container">
    <div class="jumbotron jumbotron-fluid" style="margin-top:10%;">
         <div class="btn btn-dark"><a href="{{route('produtos.create')}}" style="color:#FFFAFA;">Novo Produto</a></div> <br/> <br/> 
           
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">Data Entrada</th>
      <th scope="col">Data Saida</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($produtos as $produto)
    <tr>
      <td>{{$produto->codigo}}</td>
      <td>{{$produto->nome}}</td>
      <td>{{$produto->marca}}</td>
      <td>{{$produto->valor}}</td>
      <td>{{$produto->data_entrada}}</td>
      <td>{{$produto->data_saida}}</td>
      <td><a class="btn btn-info" href="{{route('produtos.edit',['produto'=>$produto->id])}}">Editar</a></td>
      <td><a class="btn btn-info" href="{{route('produtos.destroy',['produto'=>$produto->id])}}">Deletar</a></td>
    </tr>
    </tbody>
  @endforeach
</table>
</div>
</div>
        
@endsection
