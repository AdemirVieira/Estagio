@extends('layout.app')

@section('title','Usuários')

@section('content')

<div>
    <a id="tipo" class="btn btn-primary active" style="margin-bottom: 0.5rem;" href="{{ route('users.create') }}">    
        Adicionar
        <!-- No controller eu retorno uma janela peguntando se é Aluno, Professor ou Técnico. Após selecionar eu redireciono para
        create.blade.php deste tipo de usuário especifico (aluno, professor ou tecnico) -->
    </a>
</div>
    
<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{  $user->id }}</th>
                    <td>{{  $user->name }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                            onsubmit="return confirm('Realmente deseja apagar este usuário?');">
                            @method('DELETE')
                            @csrf

                            <a class="btn btn-sm btn-info active" href="{{route('users.edit', $user->id)}}">
                                Editar
                            </a>                           

                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>

                            <a class="btn btn-sm btn-info active" href="{{route('users.show', $user->id)}}">
                                Detalhes 
                                <!-- Quando clicar nesse botão redirecionar para a show.blade.php deste tipo de usuário especifico (aluno, professor ou tecnico) e
                                na show dele exibir a aplicação que ele esta vinculado (tenho que criar essa parte na show de cada usuario) -->
                            </a> 

                            
                            <a class="btn btn-sm btn-info active" href="#">
                                Gerenciar<!-- Botão para atribuir aplicações e modificar papeis -->
                            </a>     

                        </form>
                    </td>
                </tr>
            @endforeach

            
            
            
            </tbody>
        </table>
</div>



@endsection