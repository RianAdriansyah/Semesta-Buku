@extends('layouts.front')

@section('web-title')
	Ulasan Saya
@endsection

@section('isi')


        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title" style="color:black;">Ulasan Saya</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active" style="color:black;">Ulasan Saya</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="wishlist-area section-padding--lg bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <h2 class="text-center"><a href="" class="btn btn-info" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-fw fa-calendar-plus fa-lg" style="color:white;"></i></a></h2>
                            <br>
                            @role('admin'||'member')
                                <div class="wishlist-table wnro__table table-responsive">
                                    <table id="table_id">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</th>
                                                <th scope="col" class="text-center" style="width:180px;">Cover</span></th>
                                                <th scope="col" class="text-center">Judul Review</span></th>
                                                <th scope="col" class="product-price text-center"> Judul Buku </span></th>
                                                <th scope="col" class="text-center"> Dibuat pada </span></th>
                                                <th class="product-add-to-cart text-center" style="width:15%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($review as $item)
                                            <tr>
                                            <td class="product-remove">{{ $no++ }}</td>
                                            <td class="product-thumbnail mr--3"><a href="{{ route('review_single', $item->slug) }}"><img src="{{ asset('assets/img/review/cover/'.$item->cover)}}" alt="" width="180px"></a></td>
                                            <td><a href="{{ route('review_single', $item->slug) }}">&nbsp;{{ $item->judul }}</a></td>
                                            <td class="product-price"><span class="amount"><a href="{{ route('buku_single', $item->buku->slug) }}">{{ $item->buku->judul }}</a></span></td>
                                            <td class="product-stock-status"><span class="wishlist-in-stock">{{ $item->created_at->diffForHumans() }}</span></td>
                                                <td class="text-center">
                                                    {{-- <button class="btn btn-primary" data-review={{$item->id}} data-toggle="modal" data-target="#hapusModal">
                                                        Hapus</button> --}}
                                                        <form action="{{ route('reviewsaya.destroy', $item->id) }}" method="post">
                                                            <a class="btn btn-success" href="{{ route('reviewsaya.edit', $item->id) }}"><i class="fas fa-pen-square fa-lg" style="color:white;"></i></a> 
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Anda yakin untuk menghapus data ini?')">
                                                          <i class="fas fa-fw fa-trash-alt"></i></button>
                                                      </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>  
                            @endrole
                            @guest
                            <p>Anda harus login terlebih dahulu!</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a class="shopbtn" href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--             
        <div class="modal fade" id="hapusModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda ingin menghapus review ini ? 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="{{ route('reviewsaya.destroy', 'text') }}" method="post">
                            {{method_field('delete')}}
                            @csrf
                            <input type="hidden" name="review_id" id="review" value="">
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- cart-main-area end --> 

        @include('vendor.lara-izitoast.toast')
@endsection

