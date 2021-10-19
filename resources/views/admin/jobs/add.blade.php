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
                            <th >#</th>
                            <th >#</th>
                            <th >#</th>
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
                            <td><a><i class="fa fa-solid fa-eye"></i></a></td>
                            <td><a><i class="fa fa-solid fa-pen"></i></a></td>
                            <td><a><i class="fa fa-solid fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- /.card-body -->
            </div>
            {{ $jobs->links() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">Add New Job</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="summernote"> Description</label>
                                <textarea  id="summernote" name="description" class="form-control" rows="20"  ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select id="type" name="type" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="remote">Remote</option>
                                    <option value="indoor" selected >Indoor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" id="location" name="location" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="text" id="salary" name="salary" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="work_time">Work Time</label>
                                <select id="work_time" name="work_time" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="work_time">Paid Per</label>
                                <select id="work_time" name="work_time" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="paid_per_hour" selected>Paid Per Hour</option>
                                    <option value="paid_per_day">Paid Per Day</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="skills">Skills</label>
                                <select id="skills" name="skills" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="paid_per_hour" selected>Paid Per Hour</option>
                                    <option value="paid_per_day">Paid Per Day</option>
                                </select>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Add New Job" class="btn btn-success float-right">
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Page specific script -->

@endsection
