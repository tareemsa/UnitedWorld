@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Match Orders & Projects</h1>
    <form action="{{ route('match.filter') }}" method="POST">
        @csrf
        <form action="{{ route('match.filter') }}" method="POST">
    @csrf
    <div class="form-group">
        <label><input type="checkbox" name="criteria[]" value="rooms"> Rooms</label><br>
        <label><input type="checkbox" name="criteria[]" value="sea_view"> Sea View</label><br>
        <label><input type="checkbox" name="criteria[]" value="city"> City</label><br>
        <label><input type="checkbox" name="criteria[]" value="town"> Town</label><br>
        <label><input type="checkbox" name="criteria[]" value="starting_price_usd"> Starting Price (USD)</label><br>
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>


    <hr>

    <!-- No Results or Projects section included, so it’s removed -->
</div>
@endsection
