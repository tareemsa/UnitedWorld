@extends('layouts.dashboradheader')

@section('content')
@if(session()->has('success'))

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                toastr.success('{{ session()->get('success') }}');
            })
        </script>
    @elseif(session()->has('info'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                toastr.info('{{ session()->get('info') }}');
            })
        </script>
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
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Orders</li>
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
                                <h3 class="card-title">All Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover dataTable dtr-inline" id="example1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>City</th>
                                            <th>Town</th>
                                            <th>Location</th>
                                            <th>Rooms</th>
                                            <th>Sea View</th>
                                            <th>Url</th>
                                            <th>Price $</th>
                                            <th>Added By</th>
                                            <th style="width: 5%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->title }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>{{ $order->city }}</td>
                                                <td>{{ $order->town }}</td>
                                                <td>{{ $order->location }}</td>
                                                <td>{{ $order->rooms }}</td>
                                                <td>{{ $order->sea_view }}</td>
                                                <td><a href="{{ $order->uwestate_url }}">{{ $order->uwestate_url }}</a></td>
                                                <td>{{ number_format($order->starting_price_usd) }} $</td>
                                                <td>{{ $order->user->full_name }}</td>

                                                <td class="project-actions text-right">
                                                    <a class="btn btn-info btn-sm" href="/dashboard/orders/{{ $order->id }}/edit">
                                                        <i class="fas fa-pencil-alt"></i> 
                                                    </a>
                                                    <form method="post" action="/dashboard/orders/{{ $order->id }}" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')">
                                                            <i class="fas fa-trash"></i> 
                                                        </button>
                                                    </form>
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
            {{ $orders->links() }}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
