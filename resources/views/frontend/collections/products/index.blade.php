@extends('layouts.app')

@section('title')

    {{$category->meta_title}}

@endsection

@section('meta_keyword')
    {{$category->meta_keyword}}
@endsection
@section('meta_description')
    {{$category->meta_keyword}}
@endsection


@section('content')



<div id="product_page_title" >
    <h4>صفحةالمنتجات </h4>
</div>
<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">

            {{-- <livewire:frontend.product.index :products="$products" :category="$category" /> --}}
            <livewire:frontend.product.index :category="$category" />

        </div>
    </div>
</div>
@endsection
