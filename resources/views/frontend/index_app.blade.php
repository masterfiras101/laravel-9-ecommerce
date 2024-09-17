@extends('layouts.app')

@section('title','الصفحة الرئيسية')
{{-- @section('go_to','Welcom in the Main Page') --}}

@section('content')

        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="false">

            <div class="carousel-inner">
                <h1 style="text-align:center;margin-top:20%">الصفحة الرئيسة</h1>
                @foreach ($sliders as $key => $slideritem)
                <div class="carousel-item {{ $key == 0 ? 'active':''}}">

                @if ($slideritem->image)
                    <img src="{{ asset("$slideritem->image") }}" class="d-block im-show" alt="...">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                        <div class="custom-carousel-content">
                            <h1>

                                <span>
                                    {{$slideritem->title}}
                                </span>
                            </h1>
                            <p>
                                {{$slideritem->description}}
                            </p>
                            <div>
                                <a href="#"  class="btn btn-slider">
                                    Get Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>


        </div>

@endsection
