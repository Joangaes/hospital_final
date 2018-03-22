<!DOCTYPE HTML>
<html>
<head>
  <!-- bootstrap - jquery - javascript -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Meta -->
  <meta charset="utf-8">
</head>

<body>
  <nav class="navbar navbar-toggleable-md nabvar-inverse" style="background-color: #263e63;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/" style="color:white">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pacient" style="color:white">Pacientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/activities" style="color:white">Actividades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/duties" style="color:white">Programación Tareas</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
          Admisiones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item" href="/census">Censo</a>
          <a class="dropdown-item" href="/layout">Lay Out</a>
        </div>
      </li>
      </ul>
    </div>
  </nav>
<!--
<div style="background-color: #263e63;">
<img src="{{asset('img/Logo.png')}}" class="img-responsive" width="280">
</div>
-->
</body>
</html>
