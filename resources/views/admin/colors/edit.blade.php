@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 mb">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Edit Color
                    <a href="{{url('admin/colors')}}" class="btn btn-primary text-white float-end">
                        Back
                    </a>
                </h4>
            </div>

                    <div class="card-body">
                        <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Color Name</label>
                                <input type="text" name="name" value="{{$color->name}}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Color Code</label>
                                <input type="text" value="{{$color->code}}" name="code" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Status</label> <br/>
                                <input type="checkbox" {{$color->status ? 'checked':''}} style="width: 50px; height:30px;" name="status" />checked-hidden,unchecked-visible
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
