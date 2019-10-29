@extends('layout.app')

@section('title','Apps')

@section('content')
<div>
    <a class="btn btn-primary active" href="{{ route('apps.create') }}">    
        Adicionar
    </a>
</div>

<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($apps as $app)
                <tr>
                    <th scope="row">{{  $app->id }}</th>
                    <td>{{  $app->name }}</td>
                    <td>
                        <form action="{{ route('apps.destroy', $app->id) }}" method="POST"
                            onsubmit="return confirm('Realmente deseja apagar esta aplicação?');">
                            @method('DELETE')
                            @csrf


                            <a class="btn btn-sm btn-info active" href="{{route('apps.edit', $app->id)}}">
                                Editar
                            </a>                           

                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>

                            <a class="btn btn-sm btn-info active" href="{{route('apps.show', $app->id)}}">
                                Detalhes
                            </a> 

                        </form>
                    </td>
                </tr>
            @endforeach
            
            
            </tbody>
        </table>
</div>



@endsection