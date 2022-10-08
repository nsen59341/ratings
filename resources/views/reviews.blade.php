@extends('layouts.app')

@section('content')

<main id="main" class="main review">

    <div class="pagetitle">
      <h1>Reviews</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Reviews</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row align-items-top">

       @if(count($reviews) >= 1)
       @foreach($reviews as $review)
        <div class="col-lg-6">
          <!-- Default Card -->
          <div class="card">
            <!-- <img src="http://127.0.0.1:8000/images/card.jpg" class="card-img-top" > -->
            <div class="card-body">
              <h5 class="card-title">{{ $review->user->name }}</h5>
              {!! $review->review_statements !!}
              <br><br>
              <a href="{{url('reviews/'.$review->id.'/edit')}}" class="card-link">Edit</a>
              <form action="{{ route('reviews.destroy', $review->id) }}" id="del-form-{{$review->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type='button' class="card-link" onclick="del_confirm({{$review->id}})">Delete</button>
              </form>
            </div>
          </div><!-- End Default Card -->
        </div>
        @endforeach
        @endif

      </div>

      <script>
        function del_confirm(id){
          var is_confrm = confirm("Are you sure you want to delete the post?");

          if( is_confrm == true ){
            document.getElementById("del-form-"+id).submit();
          }

        }
      </script>

    </section>

</main><!-- End #main -->

@endsection