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
                            <li class="breadcrumb-item ">Jobs</li>
                            <li class="breadcrumb-item active">{{$job->title}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{$job->title}}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row col-12">
                                <div class="col-3">
                                    <img class="profile-user-img img-fluid img-circle" src="{{asset('storage/'.$job->user->image)}}" alt=" profile picture">
                                </div>
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="title"> COMPANY : </label> {{$job->user->name}}
                                </div>
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="title"> JOB : </label> {{$job->title}}
                                </div>
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="education_level">Education level : </label> {{$job->education_level}}

                                </div>
                            </div>
                            <div class="row col-12">
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="title"> Driver license : </label>  @if($job->driver_license==0)no @else yes @endif

                                </div>
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="title"> Category : </label> {{$job->category}}
                                </div>
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="title"> City : </label> {{$job->city}}
                                </div>
                                <div class="col-3" style="margin-top: 4%;">
                                    <label for="area">Area: </label> {{$job->area}}

                                </div>
                            </div>
                            <br/>
                            <div class="form-group row col-12">
                                <div class="col-12">
                                    <label for="summernote"> Description</label>
                                    <dev required name="desc" class="form-control"
                                              rows="5">{!! $job->desc !!}
                                    </dev>
                                </div>
                            </div>


                            <div class="form-group row col-12">
                                <div class="col-3">
                                    <label for="type">Type : </label> {{$job->type}}
                                </div>
                                <div class="col-3">
                                    <label for="work_time">Work Time : </label> {{$job->work_time}}
                                </div>
                                <div class="col-3">
                                    <label for="paid_per">Paid Per : </label> {{$job->paid_per}}
                                </div>
                                <div class="col-3">
                                    <label for="salary">Salary : </label> {{$job->salary}}
                                </div>
                            </div>

                            <div class=" form-group row col-12">
                                <div class="col-3">
                                    <label for="military_status">Military Status : </label> {{$job->military_status}}

                                </div>
                                <div class="col-3">
                                    <label for="Smoker">Smoker : </label> @if($job->smoker==0)no @else yes @endif
                                </div>
                                <div class="col-3">
                                    <label for="experience">Experience : </label> {{$job->experience}}
                                </div>
                                <div class="col-3">
                                    <label for="relationship_status">Relationship status : </label> {{$job->relationship_status}}
                                </div>

                            </div>

                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Page specific script -->

@endsection
