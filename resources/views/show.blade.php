@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('storage/' . $book->cover) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{ $book->title }}</h1>
                        <span class="subheading">{{ $book->author }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {{ $book->description }}
                </div>
            </div>
        </div>
    </article>
@endsection
