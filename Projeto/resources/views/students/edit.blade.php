@extends('layout.app')

@section('title','Editar aluno')

@section('content')

<script type="text/javascript">
    function formatar_mascara(src, mascara) {
        var campo = src.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(campo);
        if(texto.substring(0,1) != saida)
            src.value += texto.substring(0,1);
    }
</script>

<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="user"  name="name" value="{{ $user->name }}"
        placeholder="Nome completo" required>

        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" 
        aria-describedby="user"  name="email" value="{{ $user->email }}" required>

        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" 
        aria-describedby="user"  name="password">

        <label for="sexo">Sexo</label><br>
        @if ($student->sexo=="Masculino")
            <input type="radio" name="sexo" value="Masculino" id="maculino" checked> Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino">         Feminino  <br>
        @else
            <input type="radio" name="sexo" value="Masculino" id="maculino">         Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino" checked> Feminino  <br>
        @endif
        
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" 
        aria-describedby="student"  name="data_nascimento" value="{{ $student->data_nascimento }}" required>

        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" 
        aria-describedby="student"  name="cpf" value="{{ $student->cpf }}" onkeypress="formatar_mascara(this,'###.###.###-##')" required>

        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" 
        aria-describedby="student"  name="telefone" value="{{ $student->telefone }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection