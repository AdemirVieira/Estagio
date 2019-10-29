@extends('layout.app')

@section('title','Apps')

@section('content')
<form method="POST" action="{{ route('Apps.update', $app->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome da Aplicação</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="app"  name="name" value="{{ $app->name }}"
        placeholder="Nome da Aplicação">
        <label for="description">Descrição</label>
        <input type="text" class="form-control" id="description" 
        aria-describedby="app"  name="description" value="{{ $app->description }}"
        placeholder="Breve Descrição">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection