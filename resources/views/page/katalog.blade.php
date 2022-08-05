@extends('template-landingpage.master')

@section('head')
<div class="container-xxl bg-primary page-header">
    <div class="container">

        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h2 class="mb-5 text-white">Katalog</h2>
            <div class="d-inline-block border rounded-pill text-white px-4 mb-3"></div>
        </div>

        <div class="row g-4">

            @foreach($katalogs as $katalog)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white rounded h-100">
                    <div class="d-flex justify-content-between">
                        <img src="{{asset('public/katalog/'.$katalog->foto)}}" alt="" srcset="" class="w-100" style="height:210px;">
                    </div>
                    <div class="p-5">
                        <span style="font-size:10px;">{{date('d-m-Y', strtotime($katalog->tanggal));}}</span>
                        <h5 class="mb-3">{{$katalog->judul}}</h5>
                        <span>{{$katalog->deskripsi}}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

@section('content')



@endsection