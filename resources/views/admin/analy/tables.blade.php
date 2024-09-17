@extends('layouts.admin')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Orders Table</h4>
                        <p class="card-description">
                            {{-- Add class <code>.table-striped</code> --}}
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Order ID
                                        </th>
                                        <th>
                                            User Name
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th>
                                            Product Name
                                        </th>
                                        <th>
                                            Brand
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Original Price
                                        </th>
                                        <th>
                                            Selling Price
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Action
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td >
                                               {{$product->id}}
                                            </td>
                                            <td>
                                                Firas
                                            </td>
                                            <td>
                                                @if ($product->category)
                                                    {{ $product->category->name }}
                                                @else
                                                    لايوجد اسم
                                                @endif
                                            </td>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>
                                                {{ $product->brand }}
                                            </td>
                                            <td>
                                                @if ($product->productImages)
                                                    <img src="{{ asset($product->productImages[0]->image) }}" class="w-100"
                                                        alt="Img">
                                                @else
                                                    لايوجد صورة
                                                @endif
                                            </td>
                                            <td>
                                                {{ $product->original_price }}
                                            </td>
                                            <td>
                                                {{ $product->selling_price}}
                                            </td>
                                            <td>
                                                {{ $product->quantity }}
                                            </td>

                                            <td>
                                                <a href="{{ url('admin/analy/tables/'.$product->id) }}" class="btn btn-primary">Create
                                                    Invoice</a>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
@endsection
