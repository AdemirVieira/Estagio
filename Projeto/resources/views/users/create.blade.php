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

        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" 
        aria-describedby="user"  name="password"
        placeholder="Senha">

        <div style="margin-top:0.5em; margin-bottom:0.5em">
            <label>Aplicações: </label>
            <select name="app_id" >
                @foreach ($apps as $app)
                    <option value="{{ $app->id }}">{{ $app->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="radio" name="role" value="student"   > Aluno     <br>
        <input type="radio" name="role" value="teacher"   > Professor <br>
        <input type="radio" name="role" value="technician"> Técnico   <br>

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection