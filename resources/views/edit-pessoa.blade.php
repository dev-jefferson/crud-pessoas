<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Pessoas</title>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <section class="form-section">
        <h1 class="text-center">ALTERAR PESSOA</h1>

        <div class="form-wrapper col-md-6">
            <form autocomplete="off"  action="{{ route('pessoas.update', $pessoa->id) }}" method="POST" id="formPessoa" name="formPessoa">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Ops!</strong> Houve alguns problemas com a entrada de dados.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>

                @csrf
                @method('PUT')
                <div class="input-block">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value={{ $pessoa->nome }}>
                </div>
                <div class="input-block">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" value={{ $pessoa->cpf }}>
                </div>
                <div class="input-block">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value={{ $pessoa->email }}>
                </div>
                <div class="input-block">
                    <label for="data_nasc">Data Nascimento</label>
                    <input type="date" data-date-format="dd/mm/yyyy" id="data_nasc" name="data_nasc" value={{ $pessoa->data_nasc }} >
                </div>
                <div class="input-block">
                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" id="nacionalidade" name="nacionalidade" value={{ $pessoa->nacionalidade }}>
                </div>

                <button type="submit" class="btn-form">Alterar</button>
                <div class="text-center">
                    <br>
                    <a href="{{ route('pessoas.index') }}">Voltar</a>
                </div>

            </form>
        </div>

    </section>

    <ul class="squares"></ul>



</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput-1.1.4.pack.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
    });

</script>
</html>
