@extends('admin.layouts.main')
@section('content')
<div class="d-flex justify-content-between">
  <h1>Dispositivos</h1>
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
      <th scope="col">Numero Serial</th>
      <th scope="col">Tipo de dispositivo</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Numero Imei</th>
      <th scope="col">Status</th>
      <th scope="col">purchaseDate</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($dispositivos  as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->serialNumber}}</td>
      <td>{{$item->deviceType}}</td>
      <td>{{$item->brand}}</td>
      <td>{{$item->model}}</td>
      <td>{{$item->imeiNumber}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->purchaseDate}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>

@endsection

@section('scripts')
@endsection