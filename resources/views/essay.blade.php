@extends('layouts.app')

@section('content')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center">
                <h1 class="fw-bolder">{{ $essay->title }}</h1>
                <p class="lead mb-0">{{ $essay->created_at }}</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        {!! $essay->description !!}
                    </div>
                </div>
                <a class="btn btn-primary btn-sm mb-3" href="{{ route('home', $essay->id) }}">Go Back</a>

            </div>
        </div>
    </div>
@endsection
