@extends('layouts.app')

@section('content')

<main id="main" class="main review">

    <div class="pagetitle">
      <h1>Reviews</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Reviews</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">

       @if(count($reviews) > 1)
       @foreach($reviews as $review)
        <div class="col-lg-6">
          <!-- Default Card -->
          <div class="card">
            <img src="http://127.0.0.1:8000/images/card.jpg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">{{ $review->user->name }}</h5>
              {{ $review->review_statements }}
              <br><br>
              <a href="#" class="card-link">Edit</a>
              <a href="#" class="card-link">Delete</a>
            </div>
          </div><!-- End Default Card -->
        </div>
        @endforeach
        @endif

      </div>
    </section>

</main><!-- End #main -->

@endsection