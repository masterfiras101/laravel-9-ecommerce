@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 mb">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Colors List
                    <a href="{{url('admin/colors/create')}}" class="btn btn-primary text-white float-end">
                        Add Color
                    </a>
                </h4>
            </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Color Name</th>
                                    <th>Color Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colors as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->status  ?'hidden':'visible'}}</td>
                                    <td>
                                        <a href="{{ url('admin/colors/'.$item->id.'/edit') }}" style="paddin:5px 15px 5px 12px; margin-left:5%;" class="btn btn-primary text-white">Edit</a>
                                        <a href="{{ url('admin/colors/'.$item->id.'/delete') }}" onclick="return confirm('Are u sure u want to delete this data ?') " style="paddin:10px 10px 10px 10px; margin-left:5%;" class="btn btn-danger text-white">Delete</a>
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
