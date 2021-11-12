@extends('index')

@section('content')

<form method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">  
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" id="email">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha"> 
        <input type="submit" class="btn btn-primary" value="Enviar">
    </div> 
</form>

@endsection

