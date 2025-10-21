@extends('admin.layouts.main')
@section('content')
<div class="d-flex justify-content-between">
  <h1>Usuarios</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
  Agregar
</button></div>

@if($errors->any())
<div class="alert alert-danger mt-2">
  <ul>
    @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@if(session('success'))
<div class="alert alert-success mt-2">
  {{session('success')}}
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Dni</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($usuarios as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->role}}</td>
      <td>{{$item->dni}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->status}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/users" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" aria-describedby="Name">
          </div>
          <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input value="{{old('email')}}" type="text" class="form-control" id="email" name="email" aria-describedby="email">
</div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input value="{{old('password')}}" type="password" class="form-control" id="password" name="password" aria-describedby="Password">
          </div>
          <div class="form-group">
            <label for="password2">Confirmar contraseña</label>
            <input value="{{old('password-confirm')}}" type="password" class="form-control" id="password-confirm" name="password-confirm" aria-describedby="Password2">
          </div>
          <div class="form-group">
            <label for="role">role</label>
            <select class="form-select" aria-label="Default select example" name="role">
  <option selected>Open this select menu</option>
  <option value="Admin">Admin</option>
  <option value="Empleado">Empleado</option>
</select>
          </div>
          <div class="form-group">
            <label for="dni">dni</label>
            <input value="{{old('dni')}}" type="text" class="form-control" id="dni" name="dni" aria-describedby="name">
          </div>
          <div class="form-group">
            <label for="address">direccion</label>
            <input value="{{old('address')}}" type="text" class="form-control" id="address" name="address" aria-describedby="name">
          </div>
          <div class="form-group">
            <label for="telefono">telefono</label>
            <input value="{{old('phone')}}" type="numeric" class="form-control" id="phone" name="phone" aria-describedby="name">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection

@section('scripts')
@endsection