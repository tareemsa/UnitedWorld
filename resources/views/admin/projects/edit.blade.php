@extends('layouts.dashboradheader')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit project</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Edit project</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container col-12">
            @if (session()->has('success'))

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            toastr.success('{{ session()->get('success') }}');
                        });
                    </script>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                toastr.error('{{ $error }}');
                            });
                        </script>
                    @endforeach
                @endif
            </div>

           
            <form action="{{ action('ProjectController@update', ['id' => $project->id]) }}" method="POST">
                      @csrf
                     @method('PUT')   
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Project</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" value="{{ $project->title }}" class="form-control" required>
                                    </div>
                                    <div class="col-2">
                                        <label for="sea_view">Sea View</label>
                                        <select name="sea_view" id="sea_view" class="form-control" required>
                                            <option value="1" {{ $project->sea_view == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $project->sea_view == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control custom-select" required>
                                            <option value="ready" {{ $project->status == 'ready' ? 'selected' : '' }}>Ready To Move</option>
                                            <option value="under_construction" {{ $project->status == 'under_construction' ? 'selected' : '' }}>Under Construction</option>
                                            <option value="sold" {{ $project->status == 'sold' ? 'selected' : '' }}>Sold</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label for="rooms">Rooms</label>
                                        <select name="rooms" id="rooms" class="form-control custom-select" required>
                                            <option value="1+1" {{ $project->rooms == '1+1' ? 'selected' : '' }}>1+1</option>
                                            <option value="2+1" {{ $project->rooms == '2+1' ? 'selected' : '' }}>2+1</option>
                                            <option value="3+1" {{ $project->rooms == '3+1' ? 'selected' : '' }}>3+1</option>
                                            <option value="4+1" {{ $project->rooms == '4+1' ? 'selected' : '' }}>4+1</option>
                                            <option value="5+1" {{ $project->rooms == '5+1' ? 'selected' : '' }}>5+1</option>
                                            <option value="6+1" {{ $project->rooms == '6+1' ? 'selected' : '' }}>6+1</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="starting_price_usd">Starting Price USD$</label>
                                        <input type="number" name="starting_price_usd" id="starting_price_usd" value="{{ $project->starting_price_usd }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" value="{{ $project->city }}" class="form-control" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="town">Town</label>
                                        <input type="text" name="town" id="town" value="{{ $project->town }}" class="form-control" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="uwestate_url">Url</label>
                                        <input type="text" name="uwestate_url" id="uwestate_url" value="{{ $project->uwestate_url }}" class="form-control" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="location">Location</label>
                                        <input type="text" name="location" id="location" value="{{ $project->location }}" class="form-control" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" value="{{ $project->phone }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="/dashboard/projects" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Update Project</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
