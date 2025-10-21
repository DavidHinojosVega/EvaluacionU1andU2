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



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/devices" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="serialNumber">Numero Serial</label>
            <input value="{{old('serialNumber')}}" type="text" class="form-control" id="serialNumber" name="serialNumber" aria-describedby="serialNumber">
          </div>
          <div class="form-group">
            <label for="deviceType">Tipo de dispositivo</label>
            <input value="{{old('deviceType')}}" type="text" class="form-control" id="deviceType" name="deviceType" aria-describedby="deviceType">
</div>
          <div class="form-group">
            <label for="brand">Marca</label>
            <input value="{{old('brand')}}" type="text" class="form-control" id="brand" name="brand" aria-describedby="brand">
          </div>
          <div class="form-group">
            <label for="model">Modelo</label>
            <input value="{{old('model')}}" type="text" class="form-control" id="model" name="model" aria-describedby="model">
          </div>
          <div class="form-group">
            <label for="imeiNumber">Numero Imei</label>
            <input value="{{old('imeiNumber')}}" type="text" class="form-control" id="imeiNumber" name="imeiNumber" aria-describedby="imeiNumber">
          </div>
          <div class="form-group">
            <label for="purchaseDate">Fecha de compra</label>
            <input value="{{old('purchaseDate')}}" type="date" class="form-control" id="purchaseDate" name="purchaseDate" aria-describedby="name">
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