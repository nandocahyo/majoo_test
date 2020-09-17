@extends('layouts.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Nama Produk</label>
                <input type="text" class="form-control" name="name_product" placeholder="Nama Produk" value="{{ old('name_product') }}">
            </div>

            <div class="form-group">
                <label for="price">Deskripsi</label>
                <textarea name="description" rows="5" class="d-block w-100 form-control">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ old('price') }}">
            </div>

            <div class="form-group col-md-4">
                <label for="title">Gambar</label>
                <input type="file" class="dropify" name="image" placeholder="Gambar" value="{{ old('image') }}">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Simpan
            </button>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection
