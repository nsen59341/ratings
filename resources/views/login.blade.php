@extends('layouts.app2')

@section('content')

<form class="form-inline" action="/authenticate/token" method="POST>
  <div class="form-group">
    <label for="email">URL:</label>
    <input type="url" class="form-control" name="shop-url" id="shop-url">
  </div>
  <button type="submit" class="btn btn-default">login</button>
</form>

@endsection