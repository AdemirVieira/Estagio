@extends('layout.app')

@section('title','Users')

@section('content')
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nome do Usuário</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="user"  name="name"
        placeholder="Nome">

        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" 
        aria-describedby="user"  name="email"
        placeholder="E-mail">

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection