@extends('layout.app')

@section('title','Apps')

@section('content')
<form method="POST" action="{{ route('apps.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nome da Aplicação</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="app"  name="name"
        placeholder="Nome da Aplicação">
        <label for="description">Descrição</label>
        <input type="text" class="form-control" id="description" 
        aria-describedby="app"  name="description"
        placeholder="Breve Descrição">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection