@extends('layout.app')

@section('title','Detalhes do aluno')

@section('content')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="user"  name="name" value="{{ $user->name }}" disabled>

        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" 
        aria-describedby="user"  name="email" value="{{ $user->email }}" disabled>

        <label for="sexo">Sexo</label><br>
        @if ($student->sexo=="Masculino")
            <input type="radio" name="sexo" value="Masculino" id="maculino" checked disabled> Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino" disabled>         Feminino  <br>
        @else
            <input type="radio" name="sexo" value="Masculino" id="maculino" disabled>         Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino" checked disabled> Feminino  <br>
        @endif
        
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" 
        aria-describedby="student"  name="data_nascimento" value="{{ $student->data_nascimento }}" disabled>

        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" 
        aria-describedby="student"  name="cpf" value="{{ $student->cpf }}" disabled>

        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" 
        aria-describedby="student"  name="telefone" value="{{ $student->telefone }}" disabled>
        
        <label for="Aplicações">Aplicações</label>
        @forelse ($apps as $app)
            <input type="text" class="form-control" style="margin-bottom: 0.5em" id="aplicacoes" aria-describedby="apps"  name="aplicacoes" disabled value="{{ $app->name }}">
        @empty
            <input type="text" class="form-control" style="margin-bottom: 0.5em" id="aplicacoes" aria-describedby="apps"  name="aplicacoes" disabled value="Nenhuma">
        @endforelse

    </div>
@endsection