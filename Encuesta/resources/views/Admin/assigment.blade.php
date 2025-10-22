@extends('admin.layouts.main')
@section('content')
<div class="d-flex justify-content-between">
  <h1>Usuarios</h1>

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
   
  </tbody>
</table>





@endsection

@section('scripts')
@endsection