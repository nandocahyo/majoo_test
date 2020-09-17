@extends('layouts.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Produk</h1>
  <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Produk
  </a>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($items as $item)
                   <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->name_product }}</td>
                        <td>
                        <img src="{{ URL::to('/') }}/product-image/{{ $item->image }}" alt="" style="width: 100px" 
                            class="img-thumbnail" />
                        </td>
                        <td width="50%">{{ $item->description }}</td>
                        <td>Rp. {{ number_format($item->price,0,",",".") }}</td>
                        <td>
                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>

                            <form action="{{ route('product.destroy', $item->id) }}" method="post" class="d-inline" id="delete-pack">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="confirmDelete(this)" type="button"><i class="fa fa-trash"></i></button>
                            </form>                          
                        </td>
                    </tr>
                   @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                   @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection




