<label for="Nombre">Nombre de Comida: </label>
<input type="text" name="Name" value="{{isset($comida->Name)?$comida->Name:''}}"><br>

<input type="submit" Name="" value ="Guardar Comida">
<a class="btn btn-primary"href="{{ url('comida/')}}">Volver</a>