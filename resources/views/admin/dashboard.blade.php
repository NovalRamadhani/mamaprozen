@extends('layouts.admin')

@section('title', 'Dashboar Admin - Mama Frozen')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if(session('message'))
                <h2 class="alert alert-success" role="alert">{{ session('message') }}</h2>
            @endif
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        <h2>Dashboard,</h2>
                        <p class="mb-md-0">Your analytics dashboard template.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
