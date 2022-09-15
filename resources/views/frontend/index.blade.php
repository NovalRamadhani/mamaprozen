@extends('layouts.app')

@section('title', 'Home Page - Mama Frozen')
@section('content')

    <div class="content">
        <div class="title m-b-md">
            <a href="{{ url('/') }}"><img src="{{ url('admin/images/logo.png') }}" class="rounded mx-auto d-block" width="400" alt=""></a>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h6>Selamat Datang Di Website Mama Frozen</h6>
                    </div>
                    <div class="card-body aligth-center">
                        <div>
                            Mama Frozen merupakan merek dagang yang secara konsep merupakan toko online sederhana yang dibuat untuk keperluan tugas sekolah dengan menggunakan framework laravel.
                        </div>
                        <br/>
                        <div>
                            Klik tombol dibawah untuk mulai belanja: <br/>
                            <a href="{{ url('/collections') }}">
                                <button class="btn btn-success">Belanja</button>
                            </a>
                        </div>
                        <br/>
                        <div>
                            Hubungi <a href="https://www.mnovaldr.site/about-noval" target="_blank">developer</a> untuk saran dan masukan, saran dan masukan dari anda sangat akan bermakna bagi kami.  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
