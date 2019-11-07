@extends('layout.app')

@section('title','Professores')

@section('content')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="user"  name="name" value="{{ $user->name }}" disabled>

        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" 
        aria-describedby="user"  name="email" value="{{ $user->email }}" disabled>

        <label for="sexo">Sexo</label><br>
        @if ($teacher->sexo=="Masculino")
            <input type="radio" name="sexo" value="Masculino" id="maculino" checked disabled> Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino" disabled>         Feminino  <br>
        @else
            <input type="radio" name="sexo" value="Masculino" id="maculino" disabled>         Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino" checked disabled> Feminino  <br>
        @endif
        
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" 
        aria-describedby="teacher"  name="data_nascimento" value="{{ $teacher->data_nascimento }}" disabled>

        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" 
        aria-describedby="teacher"  name="cpf" value="{{ $teacher->cpf }}" disabled>

        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" 
        aria-describedby="teacher"  name="telefone" value="{{ $teacher->telefone }}" disabled>
    </div>
@endsection