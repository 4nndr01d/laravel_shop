@extends('layout')

@section('title', $category->title)

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>
            {{$category->title}}
        </h1>
        <p>
            {{$category->description}}
        </p>
        <div class="row">
            @include('product_card')
        </div>
    </div>
</div>

@endsection
