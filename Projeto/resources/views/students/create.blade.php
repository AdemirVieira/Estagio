@extends('layout.app')

@section('title','Students')

@section('content')
<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <div class="form-group">
        <label for="sexo">Sexo do Aluno</label>
        <input type="text" class="form-control" id="sexo" 
        aria-describedby="student"  name="sexo"
        placeholder="Sexo">

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" 
        aria-describedby="student"  name="data_nascimento"
        placeholder="Data de nascimento">

        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" 
        aria-describedby="student"  name="cpf"
        placeholder="CPF">

        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" 
        aria-describedby="student"  name="telefone"
        placeholder="Telefone">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection