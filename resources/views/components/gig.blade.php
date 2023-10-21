<div class="container-fluid py-5 bg-light border border-2 border-secondary rounded-3">
  <div class="col-10 mx-auto">
    <h1 class="text-center mb-5">SnappMarket Products</h1>
    <div class="text-center my-4">
      {{$slot}}
    </div>
    <div class="row row-cols-4 gap-5 justify-content-center">
      @foreach($gigs as $gigs)
      <div class="card col p-0 border border-2 border-secondary rounded-3">
        <img src="{{ asset('/img/'.$gigs->img)}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body d-flex flex-column ">
          <h4 class="card-title text-center mb-4"><strong>{{$gigs['product_name']}}</strong></h4>
          <div class="mb-3">
            <p class="card-text text-muted fst-italic">Size: {{ substr($gigs['size'], 0, 100) }}{{ strlen($gigs['size']) > 100 ? '...' : '' }}</p>
            <p class="card-text">Type: {{$gigs['product_type']}}</p>
            <p class="card-text">Condition: {{$gigs['condition']}}</p>
            <p class="card-text fw-bold fs-5 text-primary"><strong>Price: P{{$gigs['price']}}</strong></p>
          </div>
          <div class="mt-auto">
            @if(auth()->user() && !($admin))
            <a href="/discover/addBooking?product_name={{ $gigs->product_name }}" class="btn btn-primary text-white text-decoration-none d-block w-100 mb-3">Buy Now</a>
            @elseif(auth()->guest())
            <a href="/login" class="btn btn-primary text-white text-decoration-none d-block w-100 mb-3">Login to Buy</a>
            @else
            <div class="d-flex justify-content-center">
              <a href="/discover/edit/{{$gigs['id']}}" class="btn btn-secondary text-white text-decoration-none me-3">Edit</a>
              <form action="{{route('delete', ['id' => $gigs['id']])}}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" value="Delete" name="submit" class="btn btn-danger text-white text-decoration-none " onclick="return confirm('Are you sure to delete?')">Delete </button>
              </form>
            </div>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
