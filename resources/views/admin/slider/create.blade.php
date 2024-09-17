@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 mb">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Add Slider
                    <a href="{{url('admin/sliders/')}}" class="btn btn-primary text-white float-end">
                        Back
                    </a>
                </h4>
            </div>

                    <div class="card-body">
                        <form action="{{ url('admin/sliders/create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3"></textarea>

                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Status</label> <br/>
                                <input type="checkbox" style="width: 50px; height:30px;" name="status" />
                                checked-hidden,unchecked-visible
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
            </div>
        </div>
    </div>
</div>


@endsection
