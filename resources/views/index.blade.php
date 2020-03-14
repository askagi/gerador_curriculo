<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Curriculo Generate</title>
</head>
<body>
  <section class="container">
    <h1>Gerado de Curriculo</h1>
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('create')}}" method="post" class="mt-5 mb-5">
          @csrf
          <div class="form-group">
            <label>Nome Completo</label>
            <input type="text" class="form-control" name="name">
          </div>

          <div class="form-group">
            <label>Nascionalidade</label>
            <input type="text" class="form-control" name="nationality">
          </div>

          <div class="form-group">
            <label>Estado Civil</label>
            <input type="text" class="form-control" name="maritalStatus">
          </div>

          <div class="form-group">
            <label>Idade</label>
            <input type="text" class="form-control" name="age">
          </div>

          <!--Entrada de Endereço -->
          <div class="form-group">
            <label>Rua</label>
            <input type="text" class="form-control" name="street">
          </div>

          <div class="form-group">
            <label>Bairro</label>
            <input type="text" class="form-control" name="neighborhood">
          </div>

          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="city">
          </div>

          <div class="form-group">
            <label>Estado</label>
            <input type="text" class="form-control" name="state">
          </div>

          <div class="form-group">
            <label>DDD</label>
            <input type="text" class="form-control" name="ddd">
          </div>

          <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control" name="fone">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
          </div>


          <!--**************************
          Entrada de infomarções profissionais
          **************************************--->
          <!--Formação Academica-->
          <div class="form-group">
            <label>Formação Academica</label>
            <input type="text" class="form-control" name="formation">
          </div>
          <div class="form-group">
            <label>instituição</label>
            <input type="text" class="form-control" name="institution">
          </div>

          <!--Entrada de Cursos complementares-->
          <div class="form-group">
            <label>Curso Complementar</label>
            <input type="text" class="form-control" name="course">
          </div>

          <!--Entrada de experiencia profissional-->
          <div class="form-group">
            <label>Periodo</label>
            <input type="text" class="form-control" placeholder="2000 - 2015" name="period">
          </div>
          <div class="form-group">
            <label>Empresa</label>
            <input type="text" class="form-control" name="company">
          </div>
          <div class="form-group">
            <label>Cargo</label>
            <input type="text" class="form-control" name="office">
          </div>
          <div class="form-group">
            <label>Atividade</label>
            <input type="text" class="form-control" name="activity">
          </div>
          <button class="btn btn-lg btn-outline-success col-md-12">Gerar Curriculo</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
