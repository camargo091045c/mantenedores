@extends('layout.app')
@section('content')
<div class="panel-body">
    @include('common.errors')
    <form action="/clientes" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="control-label">nombre</label>
        <input type="text" name="name" id="form-control">
    </div>
    <div class="form-group">
        <label for="ruc" class="control-label">RUC</label>
        <input type="text" name="ruc" id="form-control">
    </div>
    <div class="form-group">
        <label for="address" class="control-label">direccion</label>
        <input type="text" name="address" id="form-control">
    </div>
    <div class="form-group">
        <label for="phone" class="control-label">telefono</label>
        <input type="text" name="phone" id="form-control">
    </div>
    <div class="form-group">
        <label for="email" class="control-label">correo</label>
        <input type="text" name="email" id="form-control">
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
   <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i>registrar cliente</button>
        </div>
    </div>

    
    </form>
</div>

