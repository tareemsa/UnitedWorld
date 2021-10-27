@extends('layouts.dashboradheader')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashborad">Home</a></li>
                            <li class="breadcrumb-item active">Jobs</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ALl Jobs </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped " id="example1">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th >Location</th>
                            <th>Work Time</th>
                            <th>Paid Per</th>
                            <th>Salary</th>
                            <th>Company</th>
                            <th >View</th>
                            <th >Edit</th>
                            <th >Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->id}}</td>
                                <td>{{$job->title}}</td>
                                <td>{{$job->type}}</td>
                                <td>{{$job->location}}</td>
                                <td>{{$job->work_time}}</td>
                                <td>{{$job->paid_per}}</td>
                                <td>{{$job->salary}}</td>
                                <td>{{$job->user->name}}</td>
                                <td><a><i class="fa fa-solid fa-eye green"></i></a></td>
                                <td><a><i class="fa fa-solid fa-pen yellow"></i></a></td>
                                <td><a><i class="fa fa-solid fa-trash red" ></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- /.card-body -->
            </div>
            {{ $jobs->links() }}


        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Page specific script -->

@endsection
