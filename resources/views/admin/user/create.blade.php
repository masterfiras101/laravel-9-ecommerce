@extends('layouts.admin')

@section('content')


<div class="container">
        <!-- Outer Row -->
        <div style="align-items: center; display: flex;" class="justify-content-center mt-2">

            <div class="col-xl-4  col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="col-12">

                            <div class="col-lg-13 bordered">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create User</h1>
                                    </div>
                                    <div style="color: red;" >

                                    </div>
                                    <form method="POST" action="{{ route('register')}}" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Username</label>
                                            <input type="text" name="name" class="form-control form-control-user" id="name"
                                                required placeholder="enter your username">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="emailinput">Email</label>
                                            <input type="email"  class="form-control form-control-user" id="emailinput"
                                                placeholder="enter your email ">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="passinput">Password</label>
                                            <input type="password"  class="form-control form-control-user" id="passinput"
                                                placeholder="enter your password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="confirm_passinput">Password Confirm</label>
                                            <input type="password"  class="form-control form-control-user"
                                                id="confirm_passinput" placeholder="enter a password confirm">
                                        </div>

                                        <div class="mt-3"
                                            style="align-items:center; justify-content: center;display: flex; ">
                                            <button style="padding: 3px 40px 5px 40px;" type="submit"
                                                class="btn btn-primary btn-user mt-3">Create</button>
                                        </div>
                                        <!-- <RouterLink style="padding: 3px 30px 5px 30px;" class="btn btn-primary btn-user btn-block float-end mt-5" to="/"></RouterLink> -->
                                    </form>

                                    <div class="text-center mt-4">
                                        {{-- <RouterLink class="small" to="/login"> I have an account </RouterLink> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

</div>






@endsection




