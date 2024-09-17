@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-home">
                <div class="card-header-home">{{ __('لوحة التحكم') }}</div>

                <div class="card-body-home">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                        <div class="for-thanks">

                            {{ __('!  مرحباً بك في متجرنا الالكتروني') }}
                        </div>


                            <a style="margin-left:50%; font-weight:bold " class="nav-link" href="{{ url('/admin/dashboard')}}">
                                دخول
                            </a>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
