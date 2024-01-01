@extends('frontend.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Kategori Baju Kami</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Beranda</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Kategori</p>
            </div>
        </div>
    </div>
 <!-- Categories Start -->
 <div class="container-fluid pt-5">
    <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Kategori Produk</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Produk</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ url ('assets/img/cat-1.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Baju Pria</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Produk</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ url ('assets/img/cat-2.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Baju Wanita</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Produk</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ url ('assets/img/cat-3.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Baju Anak</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Produk</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ url ('assets/img/cat-4.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Kamera</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Produk</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ url ('assets/img/cat-5.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Tas</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Produk</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ url ('assets/img/cat-6.jpg') }}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Sepatu</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->
      
    @endsection