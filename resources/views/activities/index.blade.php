@include('app')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form class="form-horizontal" method="post">
      <div class="form-group row">
        <label for="date" class="col-sm-2 control-label">Fecha</label>
        <div class="input-group col-sm-5">
          <input type="date" class="form-control" name="date" id="date" placeholder = "Valid To" data-date-start-date="d" value = "2017-11-05">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 control-label" for="Enfermera">Enfermera:</label>
        <div class="col-sm-5">
          <select class="form-control" name="Enfermera">
            <option value="1">Lupita Martinez</option>
            <option value="2">Juana De Arco</option>
            <option value="3">Pamela Ramirez</option>
            <option value="4">Nadia Gonzalez</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 control-label" for="Shift">Turno:</label>
        <div class="col-sm-3">
          <select class="form-control" name="Shift">
            <option value="1">8-15</option>
            <option value="2">15-22</option>
            <option value="3">22-8</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 control-label" for="turn">Turno</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="turn" id="turn1" checked="checked" value="1"> Matutino
          </label>
          <label class="radio-inline">
            <input type="radio" name="turn" id="turn2" value="2"> Vespertino
          </label>
          <label class="radio-inline">
            <input type="radio" name="turn" id="turn3" value="3"> Nocturno
          </label>
        </div>
      </div>
<center>
      <table class="table-striped">
        <tr>
          <th>
            Enfermera
          </th>
          <th>
            # Pacientes
          </th>
          <th>
            ACLS
          </th>
          <th>
            BlS
          </th>
          <th>
            CPR
          </th>
        </tr>
        <tr>
          <td>
            Lupita Martinez
          </td>
          <td align="right">
            5
          </td>
          <td>
          <label class="radio-inline">
            <input type="radio">
          </label>
        </td>
        <td>
        <label class="radio-inline">
          <input type="radio">
        </label>
      </td>
      <td>
      <label class="radio-inline">
        <input type="radio" checked="checked">
      </label>
    </td>
        </tr>
        <tr>
          <td>
            Juana De Arco
          </td>
          <td align="right">
            7
          </td>
          <td>
          <label class="radio-inline">
            <input type="radio" checked="checked">
          </label>
        </td>
        <td>
        <label class="radio-inline">
          <input type="radio"  checked="checked">
        </label>
      </td>
      <td>
      <label class="radio-inline">
        <input type="radio" checked="checked">
      </label>
    </td>
        </tr>
        <tr>
          <td>
           Pamela Ramirez
          </td>
          <td align="right">
            6
          </td>
          <td>
          <label class="radio-inline">
            <input type="radio">
          </label>
        </td>
        <td>
        <label class="radio-inline">
          <input type="radio">
        </label>
      </td>
      <td>
      <label class="radio-inline">
        <input type="radio">
      </label>
    </td>
        </tr>
        <tr>
          <td>
            Nadia Gonzalez
          </td>
          <td align="right">
            2
          </td>
          <td>
          <label class="radio-inline">
            <input type="radio" checked="checked">
          </label>
        </td>
        <td>
        <label class="radio-inline">
          <input type="radio">
        </label>
      </td>
      <td>
      <label class="radio-inline">
        <input type="radio">
      </label>
      </td>
        </tr>
      </table>
</center>


<div class="form-group row">
  <label class="col-sm-2 control-label" for="Pacientes">Asignación Pacientes piso:</label>
  <div class="col-sm-2">
    <select class="form-control" name="Pacientes">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
</div>

  <center>
    <table class="table-striped">
      <tr>
        <th>
          Enfermer@
        </th>
        <th>
          Nombre Paciente
        </th>
        <th>
          Diagnostico
        </th>
        <th>
          Edad
        </th>
        <th>
          Medico Tratante
        </th>
        <th>
          Habitación
        </th>
        <th>
          Dias de Estancia
        </th>
      </tr>
      <tr>
        <td>
          Lupita Martinez
        </td>
        <td>
          Jose Antonio García
        </td>
        <td>
          Apendicitis Cronica
        </td>
        <td>
          21
        </td>
        <td>
          Juan Angel Valdez
        </td>
        <td>
          101
        </td>
        <td>
          3
        </td>
      </tr>
      <tr>
        <td>
          Juana De Arco
        </td>
        <td>
          Juan Elhore
        </td>
        <td>
          Ictus isquémico en territorio de las arterias cerebrales anterior y media derechas.
        </td>
        <td>
          21
        </td>
        <td>
          Angel Alverde
        </td>
        <td>
          102
        </td>
        <td>
          10
        </td>
      </tr>
      <tr>
        <td>
          Juana De Arco
        </td>
        <td>
          José Ignacio Valdez
        </td>
        <td>
          Roptura de Tibia
        </td>
        <td>
          60
        </td>
        <td>
          Angel Alverde
        </td>
        <td>
          103
        </td>
        <td>
          7
        </td>
      </tr>


</center>

<div class="form-group">
<label class="col-md-4 control-label" for="send"></label>
<div class="col-md-4">
<a id="send" name="send" class="btn btn-primary">Enviar</a>
</div>
</div>

</div>
