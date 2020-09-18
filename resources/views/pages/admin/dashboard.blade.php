@extends('layouts.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">
<!-- grooming card section -->
  <!-- Paket Grooming Card -->
  <div class="col-xl-6 col-md-3 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Produk</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_product}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-box fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Order Card -->
  <div class="col-xl-6 col-md-3 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Order</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_order}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end grooming card section -->          
</div>


      

     
    
<!-- Content Row -->
</div>
<!-- /.container-fluid -->
@endsection
