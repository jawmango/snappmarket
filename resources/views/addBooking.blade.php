@extends('layouts.app')
@section('content')
<div>
<div class="container-fluid p-5">
<div class="col-4 mx-auto p-4 border border-success border-2">
<h4 class="text-uppercase text-center">Buy Product</h4>
<form method="POST" action="{{route('storeBooking')}}" enctype="multipart/form-data">
@csrf
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
    <label for="product_name">Product Name</label>
    <input class="form-control @error('product_name') is-invalid @enderror" required id="product_name" name="product_name" type="text" placeholder="Enter product name" value="{{ $product_name }}" readonly>
    @error('product_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="client_name">Billing Name</label>
<input class="form-control @error('client_name')
is-invalid @enderror" required id="client_name" name="client_name"
type="text" placeholder="Enter billing name" value="{{ old('client_name') }}">
@error('client_name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="client_email">Email</label>
<input class="form-control @error('client_email')
is-invalid @enderror" required id="client_email" name="client_email"
type="text" placeholder="Enter email" value="{{ old('client_email')
}}">
@error('client_email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="client_phone">Phone</label>
<input class="form-control @error('client_phone')
is-invalid @enderror" required id="client_phone" name="client_phone"
type="text" placeholder="Enter phone number" value="{{ old('client_phone')
}}">
@error('client_phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="gig_date">Purchase Date (yyyy/mm/dd)</label>
<input class="form-control @error('gig_date')
is-invalid @enderror" required id="gig_date" name="gig_date"
type="text" placeholder="Enter Date" value="{{ old('gig_date')
}}">
@error('gig_date')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="shipping_address">Shipping Address</label>
<input class="form-control @error('shipping_address')
is-invalid @enderror" required id="shipping_address" name="shipping_address"
type="text" placeholder="Enter shipping address" value="{{ old('shipping_address')
}}">
@error('shipping_address')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<!-- /.row-->

<div class=" mt-5">
<button class="btn ">Buy Now</button>
</div>
</form>
</div>
</div>
</div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
$('#img').change(function() {
let reader = new FileReader();
reader.onload = (e) => {
$('#preview-image-before-upload').attr('src', e.target.result);
}
reader.readAsDataURL(this.files[0]);
});
});
</script>
@endsection