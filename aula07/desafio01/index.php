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

    <form name="cadastro" method="POST" action="form-action.php">
      <!-- Nome -->
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" placeholder="Nome completo">
      </div>
      <!-- Idade -->
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input name="idade" type="number" class="form-control" placeholder="Idade">
      </div>
      <!-- Cidade que mora -->
      <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input name="cidade" type="text" class="form-control" placeholder="Cidade que mora">
      </div>
      <!-- Estados que visitou -->
      <div class="mb-3">
        <label for="estadosQueVisitou" class="form-label">Estados que visitou</label>
        <select name="estadosQueVisitou[]" class="form-select" multiple size="10">
          <option value="" disabled selected>Selecione...</option>
          <option value="Acre">Acre (AC)</option>
          <option value="Alagoas">Alagoas (AL)</option>
          <option value="Amapá">Amapá (AP)</option>
          <option value="Amazonas">Amazonas (AM)</option>
          <option value="Bahia">Bahia (BA)</option>
          <option value="Ceará">Ceará (CE)</option>
          <option value="Distrito">Distrito Federal (DF)</option>
          <option value="Espírito">Espírito Santo (ES)</option>
          <option value="Goiás">Goiás (GO)</option>
          <option value="Maranhão">Maranhão (MA)</option>
          <option value="Mato">Mato Grosso (MT)</option>
          <option value="Mato">Mato Grosso do Sul (MS)</option>
          <option value="Minas">Minas Gerais (MG)</option>
          <option value="Pará">Pará (PA)</option>
          <option value="Paraíba">Paraíba (PB)</option>
          <option value="Paraná">Paraná (PR)</option>
          <option value="Pernambuco">Pernambuco (PE)</option>
          <option value="Piauí">Piauí (PI)</option>
          <option value="Rio">Rio de Janeiro (RJ)</option>
          <option value="Rio">Rio Grande do Norte (RN)</option>
          <option value="Rio">Rio Grande do Sul (RS)</option>
          <option value="Rondônia">Rondônia (RO)</option>
          <option value="Roraima">Roraima (RR)</option>
          <option value="Santa">Santa Catarina (SC)</option>
          <option value="São">São Paulo (SP)</option>
          <option value="Sergipe">Sergipe (SE)</option>
        </select>
      </div>
      
      <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
      <input type="reset" name="reset" value="Limpar" class="btn btn-secondary" />
    </form>

  </div>
</body>
</html>