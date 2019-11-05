@extends('layout.app')

@section('title','Users')

@section('content')
<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome do Usuário</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="user"  name="name" value="{{ $user->name }}"
        placeholder="Nome">

        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" 
        aria-describedby="user"  name="email" value="{{ $user->email }}"
        placeholder="E-mail">

        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" 
        aria-describedby="user"  name="password"
        placeholder="Senha">

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection