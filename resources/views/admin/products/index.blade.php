@extends('layouts.admin')



@section('content')

<div class="row" style="font-weight: bold;">
    <div class="col-md-12 mb">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>المنتجات
                    <a href="{{url('admin/products/create')}}" class="btn btn-primary text-white float-end">اضافة منتج</a>
                </h4>
            </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>رقم</th>
                                    <th>الصنف</th>
                                    <th>المنتج</th>
                                    <th>السعر</th>
                                    <th>الكمية</th>
                                    <th>الحالة</th>
                                    <th>الحدث</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if ($product->category)
                                        {{ $product->category->name }}
                                        @else
                                            لايوجد اسم
                                        @endif

                                    </td>

                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status == '1' ? 'ليس متوفر':'متوفر' }}</td>
                                    <td>
                                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success">تعديل</a>
                                        <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('هل انت متاكد من حذف خذا العنصر ؟')" class="btn btn-danger">حذف</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">لايوجد اي منتج</td>
                                </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
        </div>
    </div>
</div>


@endsection





