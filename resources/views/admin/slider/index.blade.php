@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 mb">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Slider List
                    <a href="{{url('admin/sliders/create')}}" class="btn btn-primary text-white float-end">
                        Add Slider
                    </a>
                </h4>
            </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id}}</td>
                                    <td>{{ $slider->title}}</td>
                                    <td>{{ $slider->description}}</td>
                                    <td>

                                        <img src="{{ asset("$slider->image") }}" style="width:70px; height:70px;" alt="Slider">
                                    </td>
                                    <td>{{ $slider->status == '0'? 'visible':'hidden'}}</td>
                                    <td>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/edit')}}" class="btn btn-success btn-sm text-white">Edit</a>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/delete')}}"
                                            onclick="return confirm('Are u sure u want to delete this data ?');"
                                            class="btn btn-danger btn-sm text-white">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>

        </div>
    </div>
</div>


@endsection
