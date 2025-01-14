@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Match Orders & Projects - Results</h2>

    <!-- Matched Orders Section -->
    <div class="mb-5">
        <h3 class="text-primary mb-3">Matched Orders</h3>
        @if(isset($matchedOrders) && count($matchedOrders) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Order Title</th>
                            <th>Rooms</th>
                            <th>Sea View</th>
                            <th>City</th>
                            <th>Town</th>
                            <th>Price (USD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matchedOrders  as $order)
                        <tr>
                        <td>{{ $order->title }}</td>
                        <td>{{ $order->rooms }}</td>
                        <td>{{ $order->sea_view ? 'Yes' : 'No' }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->town }}</td>
                        <td>{{ number_format($order->starting_price_usd, 2) }}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info">
                No matching orders found.
            </div>
        @endif
    </div>

    <!-- Matched Projects Section -->
    <div class="mb-5">
        <h3 class="text-success mb-3">Matched Projects</h3>
        @if(isset($matchedProjects) && count($matchedProjects) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Project Title</th>
                            <th>Rooms</th>
                            <th>Sea View</th>
                            <th>City</th>
                            <th>Town</th>
                            <th>Price (USD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matchedProjects  as $project)
                        <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->rooms }}</td>
                        <td>{{ $project->sea_view ? 'Yes' : 'No' }}</td>
                        <td>{{ $project->city }}</td>
                        <td>{{ $project->town }}</td>
                        <td>{{ number_format($project->starting_price_usd, 2) }}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info">
                No matching projects found.
            </div>
        @endif
    </div>
</div>
@endsection
