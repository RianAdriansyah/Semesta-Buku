@extends('layouts.front')

@section('web-title')
	Review Saya
@endsection

@section('isi')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title" style="color:black;">Review Saya</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active" style="color:black;">Review Saya</span>
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
                        {{-- <p>{{ $reviews->user()->getRoles[0] }}</p> --}}
                            @role('admin'||'member')
                            <form action="#">
                                <div class="wishlist-table wnro__table table-responsive">
                                    <table id="table_id">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</th>
                                                <th scope="col" class="text-center" style="width:180px;">Cover</span></th>
                                                <th scope="col" class="text-center">Judul Review</span></th>
                                                <th scope="col" class="product-price text-center"> Judul Buku </span></th>
                                                <th scope="col" class="text-center"> Dibuat pada </span></th>
                                                <th class="product-add-to-cart"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($reviews as $item)
                                            <tr>
                                            <td class="product-remove">{{ $no++ }}</td>
                                            <td class="product-thumbnail mr--3"><a href="{{ route('review_single', $item->slug) }}"><img src="{{ asset('assets/img/review/cover/'.$item->cover)}}" alt="" width="180px"></a></td>
                                            <td><a href="{{ route('review_single', $item->slug) }}">&nbsp;{{ $item->judul }}</a></td>
                                            <td class="product-price"><span class="amount"><a href="{{ route('buku_single', $item->buku->slug) }}">{{ $item->buku->judul }}</a></span></td>
                                            <td class="product-stock-status"><span class="wishlist-in-stock">{{ $item->created_at->diffForHumans() }}</span></td>
                                                <td class="product-add-to-cart"><a href="#"> Edit</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>  
                            </form>
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
        <!-- cart-main-area end --> 
@endsection