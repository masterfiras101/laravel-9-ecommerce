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
        h1,h2,h3,h4,h5,h6,p,span,label {
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
        table, th, td {
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
                    <span>Report Number : 1</span> <br>
                    <span>Date:{{date('d / m / Y')}}</span> <br>
                    <span>Zip code : 560077</span> <br>
                    <span>Address: Yemen - Thamar</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Report Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>User Id:</td>
                <td>{{$user_admin->id}}</td>

                <td>Full Name:</td>
                <td>{{$user_admin->name}}</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>Firas M Daha</td>

                <td>Email Id:</td>
                <td>{{$user_admin->email}}</td>
            </tr>
            <tr>
                <td>Reported Date:</td>
                <td>04-02-2023 04:54 AM</td>

                <td>Phone:</td>
                <td>+967 774302926</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>Cash on Delivery</td>

                <td>Address:</td>

                    <td>yemen</td>
            </tr>
            <tr>
                <td>Report Status:</td>
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
                    Store Data
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Data Name</th>
                <th>Hidden</th>
                <th>Visible</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td width="10%">1</td>
                <td>
                    product
                </td>

                <td width="10%">{{$product_hidden->count() == 1 ?  $product_hidden->count() : 'Not found'}}</td>
                <td width="10%">{{$product_visible->count() == 0 ?  "Not found" : $product_visible->count() }}</td>
                <td width="15%" class="fw-bold">{{$product_hidden->count() +$product_visible->count()}}</td>
                <td width="15%" class="fw-bold">{{$product_hidden->count() +$product_visible->count()}}</td>
                {{-- @foreach ($product as $product)
                @endforeach --}}
            </tr>
            <tr>
                <td width="10%">2</td>
                <td>
                    category
                </td>
                <td width="10%">{{$category_hidden->count() == 1 ?   $category_hidden->count(): "Not found" }}</td>
                <td width="10%">{{$category_visible->count() == 0 ?  "Not found": $category_visible->count()}}</td>
                <td width="15%" class="fw-bold">{{$category_hidden->count() + $category_visible->count()}}</td>
                <td width="15%" class="fw-bold">{{$category_hidden->count() + $category_visible->count()}}</td>


            </tr>



            {{-- <tr>
                <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :{{$users->count()}}</td>
            </tr> --}}
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


            @foreach ($users_all  as $us )
            <tr>
                <td width="10%">{{$us->id}}</td>
                <td>
                    User
                </td>
                <td width="10%">{{$us->name}}</td>
                <td width="10%">{{$us->email}}</td>
                <td width="15%" class="fw-bold">{{$us->created_at}}</td>
                <td width="15%" class="fw-bold">{{$us->updated_at}}</td>
            </tr>

            @endforeach
            {{-- <tr>
                <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :{{$users->count()}}</td>
            </tr> --}}
        </tbody>
    </table>



    <br>
    <p class="text-center">
    Yemen
    </p>

</body>
</html>
