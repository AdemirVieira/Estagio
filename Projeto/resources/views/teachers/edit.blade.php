@extends('layout.app')

@section('title','Professores')

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

<form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" 
        aria-describedby="user"  name="name" value="{{ $user->name }}"
        placeholder="Nome completo">

        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" 
        aria-describedby="user"  name="email" value="{{ $user->email }}">

        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" 
        aria-describedby="user"  name="password">

        <label for="sexo">Sexo</label><br>
        @if ($teacher->sexo=="Masculino")
            <input type="radio" name="sexo" value="Masculino" id="maculino" checked> Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino">         Feminino  <br>
        @else
            <input type="radio" name="sexo" value="Masculino" id="maculino">         Masculino <br>
            <input type="radio" name="sexo" value="Feminino"  id="feminino" checked> Feminino  <br>
        @endif
        
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" 
        aria-describedby="teacher"  name="data_nascimento" value="{{ $teacher->data_nascimento }}">

        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" 
        aria-describedby="teacher"  name="cpf" value="{{ $teacher->cpf }}"
        placeholder="XXX.XXX.XXX-XX" onkeypress="formatar_mascara(this,'###.###.###-##')">

        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" 
        aria-describedby="teacher"  name="telefone" value="{{ $teacher->telefone }}"
        placeholder="XX-XXXXX-XXXX" onkeypress="formatar_mascara(this,'##-#####-####')">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection