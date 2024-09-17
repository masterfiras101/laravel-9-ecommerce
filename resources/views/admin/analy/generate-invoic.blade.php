<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admin Report</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>

<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Store</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoic Number : 1</span> <br>
                    <span>Date:{{ date('d / m / Y') }}</span> <br>
                    <span>Zip code : 560077</span> <br>
                    <span>Address: Yemen - Thamar</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Invoice Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>User Id:</td>
                <td> 1</td>

                <td>Full Name:</td>
                <td> Firas Daha</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>Firas M Daha</td>

                <td>Email Id:</td>
                <td>firas.prog.it@gmail.com</td>
            </tr>
            <tr>
                <td>Invoice Date:</td>
                <td>04-02-2023 04:54 PM</td>

                <td>Phone:</td>
                <td>+967 774302926</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>Cash on Delivery</td>

                <td>Address:</td>

                <td>yemen - thamar</td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>completed</td>

                <td>Pin code:</td>
                <td>566999</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Users Data
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Data</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>


            {{-- @foreach ($users_all as $us) --}}
                <tr>
                    <td width="10%">3</td>
                    <td>
                        User
                    </td>
                    <td width="10%">Nebras</td>
                    <td width="10%">nebras.ai@gmail.com</td>
                    <td width="15%" class="fw-bold">04-02-2023 04:54 PM</td>
                    <td width="15%" class="fw-bold">04-02-2023 04:54 PM</td>
                </tr>
            {{-- @endforeach --}}

        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Data
                </th>
            </tr>
            <tr class="bg-blue">
                <th>
                    Order ID
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
            </tr>
        </thead>
        <tbody>
                {{-- @foreach ($products_order as $product_order ) --}}

                <tr>
                    <td width="10%">{{$products_order->id}}</td>

                <td width="10%">
                    @if ($products_order->category)
                    {{$products_order->category->name }}
                    @else
                    لايوجد اسم
                        @endif
                </td>
                <td>
                   {{$products_order->name}}
                </td>
                <td width="10%">{{$products_order->brand}}</td>
                <td width="15%" class="fw-bold">
                    @if ($products_order->productImages)
                        <img src="{{ asset($products_order->productImages[0]->image) }}" class="w-100"
                            alt="Img">
                    @else
                        لايوجد صورة
                    @endif
                </td>
                <td width="15%" class="fw-bold">{{ $products_order->original_price}}</td>
                <td width="15%" class="fw-bold">{{ $products_order->selling_price}}</td>
                <td width="15%" class="fw-bold">{{ $products_order->quantity}}</td>


            </tr>

            {{-- @endforeach --}}



        </tbody>
    </table>




    <br>
    <p class="text-center">
        Yemen
    </p>

</body>

</html>
