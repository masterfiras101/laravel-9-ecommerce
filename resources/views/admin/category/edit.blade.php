@extends('layouts.admin')

@section('content')
 <style>
    .card-header{

        background-color:skyblue;
        /* border-radius: 30px; */


    }
     .card{    border: 2px solid black;
        border-radius: 10px;}

    .form-control{
         border: 2px solid black;
        border-radius: 10px;
    }



    </style>


<div class="row">
    <div class="col-md-12 mb">
        <div class="card">
            <div class="card-header">
                <h4>Edit The Category
                    <a href="{{url('admin/category')}}" class="btn btn-danger text-white float-end">Back</a>
                </h4>
            </div>

            <div class="card-body">
                <form action="{{url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class=" col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $category->name}}" class="form-control" />
                        @error('name') <small class="text-danger">{{$message}}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" value="{{ $category->slug}}" class="form-control" />
                        @error('slug') <small class="text-danger">{{$message}}</small> @enderror

                    </div>
                </div>
                    <div class="col-md-12 mb-3">
                                    <label>Description</label>
                                    <textarea  name="description"  class="form-control" rows="3">{{ $category->description}}</textarea>
                        {{-- @error('description') <small class="text-danger">{{$message}}</small> @enderror --}}

                                </div>

                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image"  class="form-control-file" />
                                    <img src="{{ asset("$category->image") }}" width="60px" height="60px"/>
                        {{-- @error('image') <small class="text-danger">{{$message}}</small> @enderror --}}

                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Status</label><br>
                                    <input type="checkbox"name="status" {{ $category->status =='1' ?'checked':''}}  />
                        {{-- @error('status') <small class="text-danger">{{$message}}</small> @enderror --}}

                                </div>
                            </div>


                                <div class="col-md-12 ">
                                    <h4>SEO Tages</h4>
                                </div>


                                <div class="col-md-10 mb-3">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" value="{{ $category->meta_title}}" class="form-control" />
                        {{-- @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror --}}

                                </div>

                                <div class="col-md-10 mb-3">
                                    <label>Meta Keyword</label>

                                    <textarea name="meta_keyword" class="form-control"  rows="3">{{ $category->meta_keyword}}</textarea>
                                    {{-- @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror --}}

                                </div>

                                <div class="col-md-10 mb-3">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description"class="form-control"  rows="3">{{ $category->meta_keyword}}</textarea>
                                    {{-- @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror --}}
                                </div>

                                <div>
                                    <button style="padding:20px 40px 20px 40px;margin-left:80%; margin-bottom:30px;"type="submit"  class="btn btn-primary text-white">Update</button>
                                </div>


                            </form>

                        </div>
                </div>
            </div>
</div>

@endsection



<!-- <a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form> -->
