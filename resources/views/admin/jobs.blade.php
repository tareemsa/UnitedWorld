@extends('layouts.app')
@section('content')
    <div class="py-4 text-center">
        <h2>News
        </h2>
    </div>
    <div class="container col-8">
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
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">link</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->link}}</td>

                    <td><button  type="button" class="btn btn-sm btn-warning " data-toggle="modal" data-target="#myModal" onclick="OpenModel({{$item->id}},'{{$item->title}}','{{$item->link}}')"><i class="fa fa-edit"></i></button></td>
                    <td> <form method="post" action="./news/{{$item->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="container">

    </div>
    <hr class="mb-4">
    @if(Auth::user()->role=='admin')
        <div class="container">

            <div class="row">

                <div class="col-md-8 order-md-2 container">
                    <h4 class="mb-3">Add New News</h4>
                    <form action="{{ action('NewsController@store') }}" class="needs-validation"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="Title">Title</label>
                                <input name="title" type="text" class="form-control" id="Title" placeholder="Title.." value="" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Link">Link</label>
                                <input name="link" type="text" class="form-control" id="Link" placeholder="www.example.com" value="" required>

                            </div>

                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Add </button>
                    </form>
                </div>
            </div>



        </div>
    @endif


    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 id="titleModal" class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form name="item-form" id="formModal"  action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="idModal" id="idModal" >
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="m_title">Title</label>
                                <input name="title" type="text" class="form-control" id="m_title" placeholder="name" value="" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="m_link">Link</label>
                                <input name="link" type="text" class="form-control" id="m_link" placeholder="" min="0"  required>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Edit Item
                            </button>
                        </div>

                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script>
        function OpenModel(id,title1,link){


            var idModal = document.getElementById("idModal");
            var title = document.getElementById("titleModal");
            var m_title = document.getElementById("m_title");
            var m_link= document.getElementById("m_link");

            var formModal = document.getElementById("formModal");
            m_title.value=title1;
            m_link.value=link;

            idModal.value=id;
            title.innerHTML="Edit news";


            formModal.action="./news/"+id;
        }
    </script>
@endsection
