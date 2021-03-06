@extends('layouts.app')
@section('content')
    <div class="album">
        <div class="container">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product') }}">Products</a></li>
                    @if(!empty($category->name))
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                    @endif
                </ol>
            </nav>
            @include('layouts.alerts')

            @if(count($products) > 0)
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        @include('layouts.product')
                    </div>
                @endforeach
            </div>
            {{ $products->links('layouts.paginacao') }}
            @else
                <div class="alert alert-success">
                    <h2>Search not found</h2>
                    <p>Your search returned no results. Try a new search or browse the top menu of the site.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
@section("style")
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endsection
