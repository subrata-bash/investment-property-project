@extends('admin.admin_dashboard')
@section('admin')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Times</h2>
        </header>
        <div class="row">
            <form action="{{ route('admin.password.update') }}" method="POST">
                @csrf
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            <h2 class="card-title">Add Times</h2>
                        </header>
                        <div class="card-body">

                            <div class="row form-group pb-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Time Name</label>
                                        <input type="text" name="time_name" class="form-control"
                                            id="formGroupExampleInput" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="time_hour">Time Hour</label>
                                        <input type="text" name="time_hour" class="form-control" id="time_hour"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Add Time</button>
                        </footer>
                    </section>
                </div>
            </form>
        </div>
    </section>
@endsection
