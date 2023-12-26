@extends('layouts.app')

@section('title','Contact Page')

@section('content')
   
<div class="container mt-5">
  <div class="row">
     <div class="col-sm-12">
      <h2>Contact Us</h2>
      <form method="post" action="contact">
        @csrf
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   
      
    </div>
  </div>
</div>

@endsection