<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Aula 07</title>
</head>
<body>
  <div class="container container-fluid" style="padding: 50px 0">
    <h1>Teste com PHP</h1>

    <form name="cadastro" method="POST" action="cadastro.php">
      <!-- Nome -->
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" placeholder="Nome completo">
      </div>
      <!-- Data de Nascimento -->
      <div class="mb-3">
        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
        <input name="dataNascimento" type="date" class="form-control" placeholder="Data de nascimento">
      </div>
      <!-- Endereço -->
      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input name="endereco" type="text" class="form-control" placeholder="Nome da rua, Nº">
      </div>
      <!-- Estado Civil -->
      <div class="mb-3">
        <label for="estadoCivil" class="form-label">Estado Civil</label>
        <select name="estadoCivil" class="form-select">
          <option value="" disabled selected>Selecione...</option>
          <option value="S">Solteiro</option>
          <option value="C">Casado</option>
        </select>
      </div>
      <!-- Sexo -->
      <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <div class="form-check">
          <input name="sexo" type="radio"  class="form-check-input" id="masculino" value="M">
          <label class="form-check-label" for="masculino">Masculino</label>
        </div>
        <div class="form-check">
          <input name="sexo" type="radio" class="form-check-input" id="feminino" value="F">
          <label class="form-check-label" for="feminino">Feminino</label>
        </div>
      </div>
      <!-- Meio de Locomoção -->
      <div class="mb-3">
        <label for="locomocao" class="form-label">Meio de Locomoção</label>
        <div class="form-check">
          <input name="locomocao[]" class="form-check-input" type="checkbox" id="moto" value="M">
          <label class="form-check-label" for="moto">Moto</label>
        </div>
        <div class="form-check">
          <input name="locomocao[]" class="form-check-input" type="checkbox" id="coletivo" value="C">
          <label class="form-check-label" for="coletivo">Coletivo</label>
        </div>
        <div class="form-check">
          <input name="locomocao[]" class="form-check-input" type="checkbox" id="bicicleta" value="B">
          <label class="form-check-label" for="bicicleta">Bicicleta</label>
        </div>
      </div>
      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" placeholder="example@email.com" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nós nunca compartilharemos seu email com ninguém.</div>
      </div>
      <!-- Senha -->
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" placeholder="Senha">
      </div>
      <!-- Confirma Senha -->
      <div class="mb-3">
        <label for="confirmaSenha" class="form-label">Confirma Senha</label>
        <input name="confirmaSenha" type="password" class="form-control" placeholder="Confirme a senha">
      </div>
      
      <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
      <input type="reset" name="reset" value="Limpar" class="btn btn-secondary" />
    </form>

  </div>
</body>
</html>