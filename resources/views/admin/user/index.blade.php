@extends('layouts.admin')



@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">

                </div>


                <div class="col-lg-6 grid-margin stretch-card">

                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Welcome</h4>

                            <div class="table-responsive pt-3">
                                <h3>Users Information</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Admin-Users</h4>
                            <p class="card-description">
                                {{-- Add class <code>.table-striped</code> --}}
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                UserID
                                            </th>
                                            <th>
                                                name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Created At
                                            </th>
                                            <th>
                                                Updated At
                                            </th>
                                              <th>
                                                Permisions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td class="py-1">
                                                {{$all_users_admin->id}}
                                            </td>
                                            <td>
                                               {{$all_users_admin->name}}
                                            </td>
                                            <td>
                                                {{-- <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> --}}
                                                {{$all_users_admin->email}}
                                            </td>
                                            <td>
                                                {{$all_users_admin->created_at}}
                                            </td>
                                            <td>
                                               {{$all_users_admin->updated_at}}
                                            </td>
                                            <td>
                                                    <input type="text" style="text-align: center" name="" value="{{$all_users_admin->role_as}}"  id="">

                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Clients-Users</h4>
                            <p class="card-description">
                                {{-- Add class <code>.table-striped</code> --}}
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                UserID
                                            </th>
                                            <th>
                                                name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Created At
                                            </th>
                                            <th>
                                                Updated At
                                            </th>
                                            <th>
                                                Permisions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($all_users_client as $client )
                                        <tr>
                                            <td class="py-1">
                                                {{$client->id}}
                                            </td>
                                            <td>
                                                {{$client->name}}
                                            </td>
                                            <td>
                                                {{-- <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div> --}}
                                                {{$client->email}}
                                            </td>
                                            <td>
                                                {{$client->created_at}}
                                            </td>
                                            <td>
                                                {{$client->updated_at}}
                                            </td>
                                            <td>
                                                    <input type="text" style="text-align: center" name="" value="{{$client->role_as}}"  id="">

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Inverse table</h4>
                            <p class="card-description">
                                Add class <code>.table-dark</code>
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                First name
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Messsy Adam
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                July 1, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                John Richards
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                Apr 12, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Peter Meggik
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                Edward
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td>
                                                May 03, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                6
                                            </td>
                                            <td>
                                                John Doe
                                            </td>
                                            <td>
                                                $ 123.21
                                            </td>
                                            <td>
                                                April 05, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                7
                                            </td>
                                            <td>
                                                Henry Tom
                                            </td>
                                            <td>
                                                $ 150.00
                                            </td>
                                            <td>
                                                June 16, 2015
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table with contextual classes</h4>
                            <p class="card-description">
                                Add class <code>.table-{color}</code>
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                First name
                                            </th>
                                            <th>
                                                Product
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-info">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                Photoshop
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr class="table-warning">
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Messsy Adam
                                            </td>
                                            <td>
                                                Flash
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                July 1, 2015
                                            </td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                John Richards
                                            </td>
                                            <td>
                                                Premeire
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                Apr 12, 2015
                                            </td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Peter Meggik
                                            </td>
                                            <td>
                                                After effects
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr class="table-primary">
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                Edward
                                            </td>
                                            <td>
                                                Illustrator
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td>
                                                May 03, 2015
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection
