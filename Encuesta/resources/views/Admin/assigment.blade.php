@extends('admin.layouts.main')
@section('content')

<div class="main-content-container container-fluid px-4 mt-4">

<div class="d-flex justify-content-between">
  <h1 class="text-white">Asignación de dispositivos</h1>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  Agregar
</button>
</div>

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


<table class="table mt-4 text-white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID de Usuario</th>
      <th scope="col">ID de Dispositivo</th>
      <th scope="col">Fecha de regreso</th>
      <th scope="col">Fecha asignada</th>
      <th scope="col">Estatus</th>
      <th scope="col">Carta</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
        @foreach ($assigment as $item)
   <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->userId}}</td>
      <td>{{$item->deviceId}}</td>
      <td>{{$item->returnDate}}</td>
      <td>{{$item->assignedDate}}</td>
      <td>{{$item->status}}</td>
      <td>
        <a href="{{ route('carta.generar', $item->id) }}" class="btn btn-warning btn-sm" target="_blank">
         Carta Poder </a>
                        </td>
    </tr>
    @endforeach
  </tbody>
</table>







<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar Dispositivo a Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/assigment" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="userId">Empleado o Usuario</label>
            <select class="form-select" aria-label="Default select example" name="userId">
  @foreach ($users as $user)
  <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
</select>
          </div>
          <div class="form-group">
            <label for="deviceId">Dispositivo</label>
             <select class="form-select" aria-label="Default select example" name="deviceId">
  @foreach ($devices as $device)
  @if($device->status=='Disponible')
  <option value="{{$device->id}}">{{$device->model}}</option>
  @endif
@endforeach
</select>
           </div>
          <div class="form-group">
            <label for="brand">Fecha de entrega del dispositivo</label>
            <input value="{{old('assignedDate')}}" type="date" class="form-control" id="assignedDate" name="assignedDate" aria-describedby="name">
          </div>
          <div class="form-group">
            <label for="model">Fecha en que debe regresar el dispositivo</label>
            <input value="{{old('returnDate')}}" type="date" class="form-control" id="returnDate" name="returnDate" aria-describedby="name">
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










</div>
@endsection

@section('scripts')
@endsection