@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @if(count($customers) >= 1)
                  @foreach($customers as $customer)
                  <tr>
                    <th scope="row">{{ $customer->customer_id }}</th>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->customer_email }}</td>
                    <td>
                      <form method="post" action="{{url('ask-review')}}">
                        <input type="hidden" value="{{ $customer->customer_email }}" name="cust_email" id="cust_email">
                        <button type="submit">ask for review</button>
                      </form>
                  </td>
                  </tr>
                  @endforeach
                @endif
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

      

    </section>

    @if(session()->has('status'))
      <div x-data="{show:true}"
      x-init="setTimeout(()=>show=false, 2000)"
      x-show="show"
      class="fixed bottom-3 right-3 py-2 px-4 w-25 rounded-xl border border-dark bg-light text-sm">
        <p>{{ session('status') }}</p>
      </div>
    @endif

  </main>
  
    
@endsection