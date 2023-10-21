@extends('layouts.app')

@section('content')

<div class="container">
<br>
    <h1>User Purchases</h1>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search Product Name \ Product Type \ Price" />
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped" id="gig-table">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Type</th>
                                        <th>Price</th>
                                        <th>Buy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <h1>Purchased Products</h1>

    <table class="table" id="bookings-table">
        <tr>
            <td>Product Name</td>
            <td>Purchase Date</td>
            <td>Shipping Address</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>

@foreach($bookings as $booking)
    <tr>
        <td>{{$booking->product_name}}</td>
        <td>{{$booking->date}}</td>
        <td>{{$booking->shipping_address}}</td>
        <td>{{$booking->client_name}}</td>
        <td>{{$booking->client_email}}</td>
        <td>{{$booking->phone}}</td>
        <td>
            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this booking?')">Cancel</button>
            </form>
        </td>
    </tr>
@endforeach
        </table>
    </div>
</div>
@endsection

@section('javascript')
<script>
$(document).ready(function() {
    fetch_gig_data();

    function fetch_gig_data(query = '') {
        $.ajax({
            url: "{{ route('action') }}",
            method: 'GET',
            data: {
                query: query
            },
            dataType: 'json',
            success: function(data) {
                $('#gig-table tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        });
    }

    $(document).on('keyup', '#search', function() {
        var query = $(this).val();
        fetch_gig_data(query);
    });

});
</script>
@endsection