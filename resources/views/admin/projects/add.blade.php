@extends('layouts.dashboradheader')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>projects </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashborad">Home</a></li>
                            <li class="breadcrumb-item active">projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container col-12">
                @if(session()->has('Success'))
                 <script>
                     document.addEventListener("DOMContentLoaded", function() {
                         toastr.success('{{ session()->get('Success') }}');
                     })
                 </script>

<!--                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i>  {{ session()->get('Success') }}</h5>
                    </div>-->
                @endif
                @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    toastr.error('{{ $error }}');
                                })
                            </script>
                        @endforeach
                @endif

            </div>
            <form action="{{ action('ProjectController@store') }}" method="POST" >
                @csrf
                <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary" >
                        <div class="card-header">
                            <h3 class="card-title">Add New project</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-3">
                                 <label for="title"> Title</label>
                                 <input required type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label for="project_id"> Project Id</label>
                                    <input required type="text" name="project_id" id="project_id" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label for="status">Status</label>
                                    <select required id="status" name="status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="sold">Sold</option>
                                        <option value="ready" selected >Ready</option>
                                        <option value="under_construction" selected >Under Construction</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="starting_price_usd">Starting Price USD$	</label>
                                    <input required type="number" id="starting_price_usd" name="starting_price_usd" class="form-control">
                                </div>
                            </div>



                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-3">

                                    <label for="town">Town</label>
                                    <input required type="text" id="town" name="town" class="form-control">
                                </div>


                                <div class="col-3">
                                    <label for="uwestate_url">Url</label>
                                    <input required type="text" id="uwestate_url" name="uwestate_url" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label for="location">Location</label>
                                    <input required type="text" id="location" name="location" class="form-control">
                                </div>

                                <div class="col-3">
                                    <label for="Phone">Phone</label>
                                    <input required type="text" id="Phone" name="Phone" class="form-control">

                                </div>        <div class="col-3">


                            </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button onclick="this.form.reset();" href="" class="btn btn-secondary">Cancel</button>
                    <input type="submit" value="Add New project" class="btn btn-success float-right">
                </div>
            </div>
            </form>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Page specific script -->

@endsection
