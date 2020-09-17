@extends('layouts.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Edit Produk {{ $item->name_product }}</h1>
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
        <form action="{{ route('product.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="title">Nama Produk</label>
                <input type="text" class="form-control" name="name_product" placeholder="Nama Produk" value="{{ $item->name_product }}">
            </div>

            <div class="form-group">
                <label for="title">Description</label>
                <textarea name="description" rows="5" class="d-block w-100 form-control">{{ $item->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ $item->price }}">
            </div>

            <div class="form-group col-md-4">
                <label for="title">Gambar</label>
                <input name="image" type="file" class="dropify" data-default-file="{{ URL::to('/') }}/product-image/{{ $item->image }}" />

                <img src="{{ URL::to('/') }}/product-image/{{ $item->image }}" class="img-thumbnail" width="100" hidden>
                <input type="hidden" name="hidden_image" value="{{ $item->image }}">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Ubah
            </button>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection