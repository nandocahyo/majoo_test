@extends('layouts.admin')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Pesanan</h1>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Customer</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($items as $item)
                   <tr>
                        <td>{{$loop->iteration}}</td>
                        <td width="10%">{{ $item->name_customer }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>{{ $item->product->name_product }}</td>
                        <td>Rp. {{ number_format($item->total_price,0,",",".") }}</td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#detailModal{{ $item->id }}" class="btn btn-info">
                                <i class="fa fa-eye"></i>
                            </a>

                            <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>

                                                <div class="modal-body">
                                                <ul>
                                                    <li>Nama Pemesan    : {{$item->name_customer}}</li>
                                                    <li>Alamat          : {{$item->address}}</li>
                                                    <li>Email           : {{$item->email}}</li>
                                                    <li>Nomor Telepon   : {{$item->phone_number}}</li>
                                                    <li>Nama Produk     : {{$item->product->name_product}}</li>
                                                    <li>Harga           : Rp. {{ number_format($item->total_price,0,",",".") }}</li>
                                                    <li>Keterangan      : {{$item->note}}</li>
                                                </ul>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <form action="{{ route('order.destroy', $item->id) }}" method="post" class="d-inline" id="delete-pack">
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




