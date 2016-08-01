@extends('layouts.admin')
@include('genero.partials.modal')
  @section('content')

    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
      <strong>Genero actualizado correctamente</strong>
    </div>

    <table class="table" >
      <thead>
        <tr> <th> Nombre </th>  <th> Operaciones </th> </tr>
      </thead>
      <tbody id="tableDatos">
      </tbody>
    </table>
  @endsection



  @section('scripts')
  	{!!Html::script('js/script2.js')!!}
  @endsection
