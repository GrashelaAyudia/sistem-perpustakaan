@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/perpus.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Perpustakaan</h1>
                        <span class="subheading">By Grashela</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row  justify-content-center">
            @foreach ($books as $book)
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <a href="{{ route('detail', $book->id) }}" class="btn btn-primary mt-3">Lihat Buku</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
