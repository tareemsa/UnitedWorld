@extends('layouts.dashboradheader')

@section('content')
    @if(session()->has('Success'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                toastr.success('{{ session()->get('Success') }}');
            })
        </script>
    @elseif(session()->has('info'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                toastr.info('{{ session()->get('info') }}');
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
                document.addEventListener("DOMContentLoaded", function () {
                    toastr.error('{{ $error }}');
                })
            </script>
        @endforeach
    @endif
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

                            <li class="breadcrumb-item active">projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ALl projects </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <table class="table  table-bordered table-hover dataTable dtr-inline " id="example1">
                                    <thead>
                                    <tr>
                                        <th >#</th>
                                        <th >Project id</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Town</th>

                                        <th>Url</th>
                                        <th>Price $</th>

                                        <th style="width: 5%">
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$project->id}}</td>
                                            <td>{{$project->project_id}}</td>
                                            <td>{{$project->title}}</td>
                                            <td>{{$project->status}}</td>
                                            <td>{{$project->town}}</td>

                                            <td>{{$project->uwestate_url}}</td>
                                            <td>{{$project->starting_price_usd}} $</td>

                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm " style="display:none;" href="/dashboard/projects/{{$project->id}}">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm hide" style="display:none;" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn ">
                                                    <form method="post" action="/dashboard/projects/{{$project->id}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this #{{$project->id}} project?')"
                                                                class="btn btn-sm btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            {{ $projects->links() }}

        </section>

        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->


@endsection
