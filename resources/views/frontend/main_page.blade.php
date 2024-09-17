@extends('layouts.main_main_page')

@section('title','all categories')

@section('content_main_page')



<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4 float-end">قائمة الاصناف</h4>
            </div>
            @forelse ($categories as $categoryitem)

            <div class="col-6 col-md-3">
                <div class="category-card">
                    <a href="{{ url('/collections/'.$categoryitem->slug)}}">
                        <div class="category-card-img">
                            <img src="{{ asset("$categoryitem->image")}}" class="w-100" alt="{{$categoryitem->slug}}">
                        </div>
                        <div class="category-card-body">
                            <h5>{{$categoryitem->name}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                <div class="col-md-12">
                    <h5>لايوجد منتج هنا لانه مخفي</h5>
                </div>
            @endforelse


        </div>
    </div>
</div>

@endsection
