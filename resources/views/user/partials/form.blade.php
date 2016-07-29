<div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'ingresa el nombre del usuario', ]  )!!}
</div>
<div class="form-group">
  {!!Form::label('Correo:')!!}
  {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'ingresa email', ]  )!!}
</div>
<div class="form-group">
  {!!Form::label('Contraseña:')!!}
  {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'ingresa contraseña', ]  )!!}
</div>
