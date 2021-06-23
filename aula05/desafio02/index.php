<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Aula PHP</title>
</head>
<body>
  <div class="container">
    <h1>Teste com PHP</h1>
    <?php echo "";
    ?>

    <div class="mb-3">
      <label for="estado" class="form-label">Estado</label>
      <select name="estado" id="estado" class="form-select form-select-sm">
        <option value="" selected>Selecione</option>
        <option value="PR">Paraná</option>
        <option value="SC">Santa Catarina</option>
        <option value="RS">Rio Grande do Sul</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="cidade" class="form-label">Cidade</label>
      <select name="cidade" id="cidade" class="form-select form-select-sm">
        <option value="" selected>Selecione</option>
      </select>
    </div>
  </div>
</body>

<script type="text/javascript">
  $(document).ready(function() {
    $("#estado").change(function() {
      $.ajax({
        type: "POST",
        url: "cidades.php",
        data: { estado: $("#estado").val() },
        dataType: "json",
        success: function(json) {
          var options = '<option value="">Selecione</option>';
          $.each(json, function(key, value) {
            options += '<option value="' + key + '">' + value + '</option>';
          });
          $("#cidade").html(options);
        }
      });
    });
  });
</script>
</html>