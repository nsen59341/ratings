@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Editors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/reviews">Reviews</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <form action="{{ route('reviews.update', $review->id) }}" method="POST"> -->
              <form action="{{url('reviews/'.$review->id)}}" method="POST">
                @csrf
                @method('PUT')
                <h5 class="card-title">{{ $review->user->name }}</h5>
                <!-- Quill Editor Full -->
                <p>Edit your review</p>
               
                <textarea class="tinymce-editor" name="statmnt">
                  {!! $review->review_statements !!}
                </textarea>
               
                <!-- End Quill Editor Full -->
                <button id="" type="submit">Update</button>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

@endsection