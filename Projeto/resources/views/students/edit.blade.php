@extends('layout.app')

@section('title','Students')

@section('content')
<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" class="form-control" id="sexo" 
        aria-describedby="student"  name="sexo" value="{{ $student->sexo }}"
        placeholder="Sexo do aluno">
        
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" 
        aria-describedby="student"  name="data_nascimento" value="{{ $student->data_nascimento }}"
        placeholder="Data de nascimento do aluno">

        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" 
        aria-describedby="student"  name="cpf" value="{{ $student->cpf }}"
        placeholder="CPF do aluno">

        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" 
        aria-describedby="student"  name="telefone" value="{{ $student->telefone }}"
        placeholder="Telefone do aluno">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection