@extends('admin.layouts.app')

@section('content')
    <div class="page-body">
        <div class="title-header">
            <h5>Edit Users</h5>
        </div>
        <!-- New User start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button">Account</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST"
                                                class="theme-form theme-form-2 mega-form">
                                                @csrf
                                                @method('put')
                                                <div class="card-header-1">
                                                    <h5>Category Information</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0">First
                                                            Name</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text"
                                                                value={{ $user->name }} name="name">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                            Address</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="email" name="email"
                                                                value={{ $user->email }}>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="password" name="password"
                                                                value={{ $user->password }}>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-10">
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <select class="form-select" name="role"
                                                                value={{ $user->name }}>
                                                                <option>users</option>
                                                                <option>admin</option>
                                                            </select>
                                                        </div>

                                                        <input type="submit" value="cập nhật">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User End -->

        <!-- footer start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer end -->
    </div>
@endsection
