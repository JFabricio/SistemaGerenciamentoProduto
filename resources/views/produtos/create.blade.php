@extends('layouts.app')
<title>Criar</title>
@section('content')

<div class="container jumbotron">
<h1>Cadastro de Novo Produto</h1><br/>
    <div class="col-md-8">
    <form action="{{route('produtos.store')}}" class="form-horizontal" method="POST"> <!--Chama a rota que foi definida para todos controlermodelo-->
        @csrf
        <div class="row col-md-4">
            <label >Codigo Produto</label>
            <input type="text" class="form-control" name="codigo" maxlength="10px" required>
        </div>
        <br />
        <div class="row col-md-6" style="margin-left:33%;margin-top:-13%;">
            <label >Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <br />
        <div class="row col-md-6">
            <label >Marcar</label>
            <input type="text" class="form-control" name="marca" required>
        </div>
        <br />
        <div class="row col-md-4" style="margin-left:50%;margin-top:-13%;" >
            <label >Valor</label>
            <input type="text" class="form-control" name="valor" onKeyPress="return(moeda(this,'.',',',event))" required>
        </div>
        <br />
        <div class="row col-md-4">
            <label >Data Entrada</label>
            <input type="date" class="form-control" name="data_entrada" required>
        </div>
        <br />
        <div class="row col-md-4" style="margin-left:33%;margin-top:-13%;">
            <label >Data Saida</label>
            <input type="date" class="form-control" name="data_saida" required>
        </div>
        <br />
        <div class="row"><button type="submit"class="btn btn-danger">Cadastrar</button></div>
    </form>
    </div>
</div>

@endsection

<script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script>  