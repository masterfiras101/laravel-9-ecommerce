@extends('layouts.admin')

@section('content')



    <div class="container col-lg-12" style="" >

        <!-- Outer Row -->
        <div class="row justify-content-center">
                        <div>
                            <a href="{{url('admin/category')}}">Back</a>
                        </div>
            <div class="col-xl- col-lg-23 col-md-9" >

                <div class="card o-hidden border-1 shadow-lg" style="border-radius:40px; font-weight:bold;">
                    <div class="card-body p-0" style="border: 3px solid black;border-radius:40px;">
                        <!-- Nested Row within Card Body -->
                        <div class="row" ">
                            <div class="col-lg-5 d-none d-lg-block bg-login-image" >
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-3 mt-5 ml-5">  Category Image </h1>
                                        </div>
                                <div class="card-img">
                                    <img style="width: 400px; border-radius: 100%; margin:30px"
                                        src="" alt="">

                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Add Category</h1>
                                    </div>
                                    <form class="user" action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label >Name </label>

                                                <input name="name" type="text"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="category name">
                                            @error('name') <small class="text-danger">{{$message}}</small> @enderror

                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label >Slug</label>

                                                <input name="slug" type="text"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="slug for category">
                                                @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                                            </div>

                                        </div>

                                        <div class="form-group">
                                        <label > Description </label>
                                                <input type="text" name="description"
                                                    class="form-control form-control-user" id=""
                                                    placeholder=" enter description for category">
                                            </div>
                                                <div class="col-md-12 ">
                                                    <h4>SEO Tages</h4>
                                                </div>
                                            <div class="row">

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label > Meta Title</label>
                                                <input  type="text" name="meta_title"
                                                    class="form-control form-control-user" id=""
                                                        placeholder="enter the meta title">
                                            </div>
                                            <div class="col-sm-6">
                                                <label >Image </label>

                                                    <input  type="file"
                                                    class="form-control form-control-user"  name="image[]" id="">
                                                     <div class="mb-3">

                                        </div>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                    <label >Meta Keyword</label>
                                                    <input  type="text"name="meta_keyword"
                                                        class="form-control form-control-user" id=""
                                                        placeholder="enter key word of category">
                                                </div>
                                                <div class="form-group">
                                                <label > Meta Description</label>
                                                <input  type="text"name="meta_description"
                                                    class="form-control form-control-user" id=""
                                                        placeholder="enter meta description of category">
                                                </div>
                                                <div class="form-group">
                                                    <div style="display: inline-flex; " class="float-end">
                                                        <label style=" margin-right:5px" for="customCheck">الزر مفعل  الصنف غير متوفر
                                                        </label>
                                                        <input type="checkbox" name="status"  style="display: block;"
                                                            class="float-end" id="customCheck">
                                                        </div>
                                                </div>


                                        {{-- <RouterLink class="btn btn-primary btn-user btn-block" to="/categories">إضافة
                                        </RouterLink> --}}
                                        <div>
                                    <button class="tn btn-primary btn-user btn-block" type="submit"  class="btn btn-primary text-white">Save</button>
                                </div>

                                    </form>

                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> الدخول بواسطة جوجل
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> الدخول بواسطة فيسبوك
                                        </a> -->
                                    <!-- <div class="text-center">
                                        <RouterLink class="small" to="/dashboard/forgot-password"> نسيت كلمة المرور
                                        </RouterLink>
                                    </div>
                                    <div class="text-center">
                                        <RouterLink class="small" to="/dashboard/register"> إنشاء حساب</RouterLink>

                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection






{{--  --}}


<!-- <a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form> -->
