@extends('admin.admin_dashboard')
@section('admin')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Time</h2>
        </header>
        <div class="row">
            <form action="{{ route('update.times') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $time->id }}">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header">
                            <h2 class="card-title">Edit Time</h2>
                        </header>
                        <div class="card-body">

                            <div class="row form-group pb-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Time Name</label>
                                        <input type="text" name="time_name" class="form-control"
                                            id="formGroupExampleInput" value="{{ $time->time_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="time_hour">Time Hour</label>
                                        <input type="text" name="time_hour" class="form-control" id="time_hour"
                                            value="{{ $time->time_hour }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Update Time</button>
                        </footer>
                    </section>
                </div>
            </form>
        </div>
    </section>
@endsection
