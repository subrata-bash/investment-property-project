@extends('admin.admin_dashboard')
@section('admin')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>User Profile</h2>
        </header>
        <div class="row">
            <form action="">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            <h2 class="card-title">Admin Chnage Password</h2>
                        </header>
                        <div class="card-body">

                            <div class="row form-group pb-3">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Old Password</label>
                                        <input type="password" name="old_password"
                                            class="form-control @error('old_password')
                                            is-invalid @enderror"
                                            id="formGroupExampleInput" placeholder="">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="col-form-label" for="new_password">New Password</label>
                                        <input type="password" name="new_password"
                                            class="form-control @error('new_password')
                                            is-invalid @enderror"
                                            id="new_password" placeholder="">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="col-form-label" for="new_password_confirmation">Confirm
                                            Password</label>
                                        <input type="password" name="new_password_confirmation" class="form-control"
                                            id="new_password_confirmation" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </footer>
                    </section>
                </div>
            </form>
        </div>
    </section>
@endsection
