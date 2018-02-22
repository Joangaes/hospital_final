@include('app')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="form-group row">
           <label class="col-sm-2 control-label" for="name">Nombre</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="name" value="" name="name" required="">
           </div>
         </div>

         <div class="form-group row">
             <label class="col-sm-2 control-label" for="lastName">Apellido Paterno</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="lastName" value="" name="lastName" required="">
             </div>
           </div>

           <div class="form-group row">
               <label class="col-sm-2 control-label" for="LastName2">Apellido Materno</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="LastName2" value="" name="LastName2" required="">
               </div>
             </div>

             <div class="form-group row">
       <label class="col-sm-2 control-label" for="type">Genero</label>
       <div class="col-sm-10">
           <label class="radio-inline">
             <input type="radio" name="type" id="type1" checked="checked" value="1"> Masculino
         </label>
         <label class="radio-inline">
             <input type="radio" name="type" id="type2" value="2"> Femenino
         </label>
       </div>
     </div>

     <div class="form-group row">
       <label for="date" class="col-sm-2 control-label">Fecha de Nacimiento</label>
       <div class="input-group col-sm-5">
         <input type="date" class="form-control" name="birthDate" id="birthDate" value = "1996-01-12">
       </div>
     </div>

     <div class="form-group row">
       <label for="date" class="col-sm-2 control-label">Diagnostico</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="diagnostic" id="diagnostic" value = "">
       </div>
     </div>

     <div class="form-group row">
       <label class="col-sm-2 control-label" for="Triage">Triage:</label>
       <div class="col-sm-3">
         <select class="form-control" name="Triage">
           <option value="1">Resucitación</option>
           <option value="2">Emergencia</option>
           <option value="3">Urgencia</option>
           <option value="4">Urgencia Menor</option>
           <option value="5">Sin Urgencia</option>
         </select>
       </div>
     </div>

     <div class="form-group row">
       <label for="date" class="col-sm-2 control-label">Fecha de Ingreso</label>
       <div class="input-group col-sm-5">
         <input type="date" class="form-control" name="inDate" id="inDate" value = "2017-11-05">
       </div>
     </div>

     <div class="form-group row">
       <label for="allergies" class="col-sm-2 control-label">Alergias</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="allergies" id="allergies" value = "">
       </div>
     </div>

     <div class="form-group row">
       <label for="weight" class="col-sm-2 control-label">Peso</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="weight" id="weight" value = "" placeholder="Kg">
       </div>
     </div>

     <div class="form-group row">
       <label for="allergies" class="col-sm-2 control-label">Talla</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="size" id="size" value = "">
       </div>
     </div>

     <div class="form-group row">
       <label class="col-sm-2 control-label" for="room">Habitación:</label>
       <div class="col-sm-3">
         <select class="form-control" name="room">
           <option value="1">101</option>
           <option value="2">102</option>
           <option value="3">103</option>
           <option value="4">201</option>
           <option value="5">202</option>
         </select>
       </div>
     </div>

     <div class="form-group row">
       <label class="col-sm-2 control-label" for="Expedient">No Expediente:</label>
       <div class="col-sm-3">
         <select class="form-control" name="Expedient">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
       </div>
     </div>

     <div class="form-group row">
       <label class="col-sm-2 control-label" for="Medic">Medico Tratante:</label>
       <div class="col-sm-3">
         <select class="form-control" name="Medic">
           <option value="1">Juan Angel Valdez</option>
           <option value="2">Angel Alverde</option>
           <option value="3">Jeronimo Aiza</option>
           <option value="4">Joaquin Cezpedes</option>
           <option value="5">Marco Belucci</option>
         </select>
       </div>
     </div>

     <div class="form-group row">
       <label class="col-sm-2 control-label" for="insurance">Aseguradora:</label>
       <div class="col-sm-3">
         <select class="form-control" name="insurance">
           <option value="1">GNP</option>
           <option value="2">InterProteccion</option>
           <option value="3">AMIS</option>
           <option value="4">SURA</option>
           <option value="5">AXA</option>
         </select>
       </div>
     </div>


     <div class="form-group row">
       <label for="FamName" class="col-sm-2 control-label">Nombre Familiar</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="FamName" id="FamName" value = "">
       </div>
     </div>
     <div class="form-group row">
       <label for="FamPhone" class="col-sm-2 control-label">Telfono del Familiar</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="FamPhone" id="FamPhone" value = "">
       </div>
     </div>
     <div class="form-group row">
       <label for="related" class="col-sm-2 control-label">Parentezco</label>
       <div class="input-group col-sm-10">
         <input type="text" class="form-control" name="famName" id="FamName" value = "">
       </div>
     </div>

     <div class="form-group">
       <input type="submit" class="btn btn-primary btn-lg btn-block" Value="Enviar">
     </div>


     </form>
 </div>

</div>
