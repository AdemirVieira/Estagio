@extends('layout.app')

@section('title','Atribuição de aplicação')

@section('content')

    <form action="{{ route('apps.assign', $user->id) }}" method="POST">
        @csrf

        <h5>Usuário: {{ $user->name }}</h5>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">APLICAÇÕES</th>
                    <th scope="col">DESCRIÇÃO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appsuser as $app)
                    <tr>
                        <td>
                            <input type="checkbox" id="aplicacoes" aria-describedby="apps"  name="aplicacoes" value="{{ $app->id }}" checked>
                            <label for="aplicacoes" style="margin-left: 0.3em">{{ $app->name }}</label>
                        </td>
                        <td>{{ $app->description }}</td>
                    </tr>
                @endforeach 
                @foreach ($apps as $a)
                    @if ($a->id != $app->id)
                        <tr>
                            <td>
                                <input type="checkbox" id="aplicacoes" aria-describedby="apps"  name="aplicacoes" value="{{ $a->id }}">
                                <label for="aplicacoes" style="margin-left: 0.3em">{{ $a->name }}</label>
                            </td>
                            <td>{{ $a->description }}</td>
                        </tr>
                    @endif   
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary active" style="margin-bottom: 0.5rem;">Atribuir</button>
    </form>
    
@endsection