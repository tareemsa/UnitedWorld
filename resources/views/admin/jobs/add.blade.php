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

            <div class="container col-12">
                @if(session()->has('Success'))
                    <div class="m-sm-4 alert alert-success">
                        {{ session()->get('Success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            <form action="{{ action('JobController@store') }}" method="POST" >
                @csrf
                <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary" >
                        <div class="card-header">
                            <h3 class="card-title">Add New Job</h3>


                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input required type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="summernote"> Description</label>
                                <textarea  required id="summernote" name="desc" class="form-control" rows="20"  ></textarea>
                            </div>
                            <div class=" form-group row">
                                <div class="col-3">
                                <label for="type">Type</label>
                                <select required id="type" name="type" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="remote">Remote</option>
                                    <option value="indoor" selected >Indoor</option>
                                </select>
                                </div>
                                <div class="col-3">
                                <label for="work_time">Work Time</label>
                                <select required id="work_time" name="work_time" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                </select>
                                </div>

                                <div class="col-3">
                                <label for="paid_per">Paid Per</label>
                                <select required id="paid_per" name="paid_per" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="paid_per_hour" selected>Paid Per Hour</option>
                                    <option value="paid_per_day">Paid Per Day</option>
                                </select>
                                </div>



                                <div class="col-3">
                                    <label for="military_status">Military Status</label>
                                    <select required id="military_status" name="military_status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="paid_per_hour" selected>Done</option>
                                        <option value="paid_per_day">Not Yet</option>
                                        <option value="paid_per_day">Not Yet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                <label for="location">Location</label>
                                <input required type="text" id="location" name="location" class="form-control">
                                </div>

                                <div class="col-3">
                                <label for="location">Experience</label>
                                <input required type="text" id="location" name="location" class="form-control">
                                </div>

                                <div class="col-3">
                                <label for="location">Education level</label>
                                <input required type="text" id="location" name="location" class="form-control">
                                </div>

                                <div class="col-3">
                                <label for="salary">Salary In USD</label>
                                <input required type="text" id="salary" name="salary" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Add New Job" class="btn btn-success float-right">
                </div>
            </div>
            </form>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Page specific script -->

@endsection
