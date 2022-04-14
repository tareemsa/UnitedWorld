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
                        <h1>Categories </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashborad">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                <h3 class="card-title">ALl categories </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <table class="table  table-bordered table-hover dataTable dtr-inline " id="example1">
                                    <thead>
                                    <tr>
                                        <th  style="width: 10px">#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th style="width: 15%">Created at</th>
                                        <th style="width: 15%">
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->title}}</td>
                                            <td>{{$category->desc}}</td>
                                            <td>{{$category->created_at}}</td>

                                            <td class="project-actions text-right">



                                                <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-default">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>

                                                <a class="btn btn-sm">
                                                    <form method="post" action="/dashboard/categories/{{$category->id}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this #{{$category->id}} category?')"
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
            {{ $categories->links() }}

            <div class="container col-12">


            </div>
            <form action="{{ action('CategoryController@store') }}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary" >
                            <div class="card-header">
                                <h3 class="card-title">Add New Category</h3>
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

                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button onclick="this.form.reset();" class="btn btn-secondary">Cancel</button>
                        <input type="submit" value="Add New Category" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
        </section>

        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



@endsection
