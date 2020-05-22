<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Crud Pessoas</title>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="container">
        <h1 class="text-center">CRUD PESSOAS</h1>
        <br>
        <div class="row align-items-center" style="background-color: white;">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">E-mail</th>
                        <th class="text-center">
                            <a href="{{ route('pessoas.create') }}" class="btn btn-outline-primary">Cadastrar</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($pessoas as $pessoa)
                        <tr>
                            <td>{{ $pessoa->nome }}</td>
                            <td>{{ $pessoa->cpf }}</td>
                            <td>{{ $pessoa->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('pessoas.edit',$pessoa->id) }}"><i class="fas fa-user-edit"></i></a> |
                                <form action="{{ route('pessoas.destroy', $pessoa->id)}}" method="post" id="pessoaDestroy" style="margin: 0px; padding: 0px; border-radius: 0px;">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('pessoaDestroy').submit();"><i class="fas fa-trash-alt"></i></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <ul class="squares"></ul>

</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>
