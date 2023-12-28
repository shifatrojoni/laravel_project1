@extends('layouts.app')

@section('title','Contact Page')

@section('content')
   
<div class="container mt-5">
  <div class="row">
     <div class="col-sm-12">
      <h2>Contact Us</h2>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  {{-- Success Data --}}
  @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

      <form method="post" action="/contact/update/{{$single['id']}}">
        @csrf
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Name:</label>
          <input type="name" class="form-control" id="email" placeholder="Enter name" name="name" value="{{ old('name') ? old('name'): $single['name'] }}">
          @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') ? old('email'): $single['email'] }}">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Subject:</label>
          <input type="subject" class="form-control" id="email" placeholder="Enter subject" name="subject" value="{{ old('subject') ? old('subject'): $single['subject'] }}">
          @error('subject')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Message:</label>
          <textarea name="message" id="" cols="30" rows="10" class="form-control">{{ old('message') ? old('message'): $single['message'] }}</textarea>
          @error('message')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror


        
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
   
      
    </div>
  </div>
</div>

@endsection