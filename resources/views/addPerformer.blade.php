@extends('layouts.app')
@section('content')
<div>
<div class="container-fluid p-5">
<div class="col-4 mx-auto p-4 border border-success border-2">
<h4 class="text-uppercase text-center">Sell a Product</h4>
<form method="POST" action="{{route('storeP')}}" enctype="multipart/form-data">
@csrf
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="product_name">Product Name</label>
<input class="form-control @error('product_name')
is-invalid @enderror" required id="product_name" name="product_name"
type="text" placeholder="Enter Product Name" value="{{ old('product_name') }}">
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
<label for="gig_price">Price</label>
<input class="form-control @error('gig_price')
is-invalid @enderror" required id="gig_price" name="gig_price"
type="text" placeholder="Enter Product Price" value="{{ old('gig_price')
}}">
@error('gig_price')
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
<label for="size">Size</label>
<input class="form-control @error('size')
is-invalid @enderror" required id="size" name="size"
type="text" placeholder="Enter Size" value="{{ old('size')
}}">
@error('size')
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
<label for="product_type">Product Type (e.g sneaker, apparel, etc.)</label>
<input class="form-control @error('product_type')
is-invalid @enderror" required id="product_type" name="product_type"
type="text" placeholder="Enter Type" value="{{ old('product_type')
}}">
@error('product_type')
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
<label for="condition">Condition</label>
<input class="form-control @error('condition')
is-invalid @enderror" required id="condition" name="condition"
type="text" placeholder="Enter Type" value="{{ old('condition')
}}">
@error('condition')
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
<label for="performer_phone">Phone</label>
<input class="form-control @error('performer_phone')
is-invalid @enderror" required id="performer_phone" name="performer_phone"
type="text" placeholder="Enter Phone" value="{{ old('performer_phone')
}}">
@error('performer_phone')
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
<label for="performer_socials">Billing Information (Bank/Account Name/Account Number)</label>
<input class="form-control @error('performer_socials')
is-invalid @enderror" required id="performer_socials" name="performer_socials"
type="text" placeholder="Enter Billing Information" value="{{ old('performer_socials')
}}">
@error('performer_socials')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<!-- /.row-->
<div class="form-group">
<label for="img">Upload Image</label>
<div class="row">
<div class="col-sm-6 ">
<img id="preview-image-before-upload"
src="{{asset('/img/Upload Image.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;"
class=" mb-2">
<input class=" form-control @error('img')
is-invalid @enderror " type="file" name="img" value="{{ old('img') }}"
id="img">
@error('img')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class=" mt-5">
<button class="btn ">Apply</button>
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