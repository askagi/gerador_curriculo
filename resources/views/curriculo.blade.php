<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Currículo</title>

  <style>
  .bd {
    border: solid 1px gray;
  }
  .opacidade{
    opacity: .5;
    transition: opacity .5s;
    z-index: 999;
  }

  .opacidade:hover{
    opacity: .8;
  }
  </style>
</head>


<body class="container" style="background-image: url('img/site/fundo.png'); background-attachment: fixed; overflow-x: hidden;">

  <div class="bg-white p-5 mt-3 mb-3 rounded" data-aos="fade-right" data-aos-duration="700">
    <section class="row mt">
      <header class="col-md-12">
        <div class="row">
          <div class="col-md-2">
            <img class="rounded" src="https://source.unsplash.com/random?people,face" width="100%"
            height="100%" alt=""> <!-- https://source.unsplash.com/random?people,face -->
          </div>

          <div class="col-md-7 ">
            <h1 class="d-inline text-muted">{{$dados['name']}}</h1>
            <p>{{$dados['nationality']}}, {{$dados['maritalStatus']}}, {{$dados['age']}} anos <br>
              Endereço - Rua {{$dados['street']}}, {{$dados['neighborhood']}} <br>
              {{$dados['city']}} - ({{$dados['state']}}) <br>
              Telefone: ({{$dados['ddd']}}) - {{$dados['fone']}} <br>
              Email: {{$dados['email']}}
            </p>
          </div>
        </div>
      </header>
    </section>

    <section class="row">
      <div class="col-md-12  mt-5">
        <h4 class="text-muted">Formação</h4>
        <ul>
          <li>{{$dados['formation']}} pela {{$dados['institution']}}</li>
        </ul>
      </div>
    </section>

    <section class="row">
      <div class="col-md-12 mt-5">
        <h4 class="text-muted">Cursos Complementares</h4>
        <ul>
          <li>{{$dados['course']}}</li>
        </ul>
      </div>
    </section>

    <section class="row mb-5">
      <div class="col-md-12  mt-5">
        <h4 class="text-muted">Experiência Profissional</h4>
        <ul>
          <li class="mb-2 mt-3">
            <strong>{{$dados['period']}} - {{$dados['company']}}</strong><br>
            Cargo: {{$dados['office']}}, {{$dados['activity']}}
          </li>
        </ul>
      </div>
    </section>

    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-lg btn-outline-secondary offset-md-9" href="{{route('home')}}">Gerar Novo Curriculo</a>
      </div>
    </div>

    <section class="row">
      <footer class="col-md-12">
        <p class="text-center">Copyright &copy; <a href="https://github.com/askagi" target="_blank" class="text-muted">José Costa dos Santos júnior</a></p>
      </footer>
    </section>
  </div>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</html>
