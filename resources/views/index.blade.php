@extends('layouts.app')

@section('content')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">TOEFL Essays</h1>
                <p class="lead mb-0">Answers to All TOEFL Essay Questions</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('home') }}?category_id={{ $category->id }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach($essays as $essay)
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h2 class="card-title h4">{{ $essay->title }}</h2>
                                    <div class="small text-muted mb-3">{{ $essay->created_at }}</div>
                                    <p class="card-text">{{ $essay->description }}</p>
                                    <a class="btn btn-primary btn-sm" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
