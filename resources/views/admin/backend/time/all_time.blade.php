@extends('admin.admin_dashboard')
@section('admin')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>All Time</h2>
        </header>
        <div class="row">
            <div class="col">
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions" style="top: 8px;">
                            <button class="btn btn-primary" onclick="window.location='{{ route('add.times') }}'">Add Times</button>
                        </div>
                        <h2 class="card-title">All Times</h2>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Time Name</th>
                                        <th>Time Hour</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($times as $time)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $time->time_name }}</td>
                                            <td>{{ $time->time_hour }}</td>
                                            <td>
                                                <a href="{{ route('edit.times', $time->id) }}" class="btn btn-success btn-sm">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
