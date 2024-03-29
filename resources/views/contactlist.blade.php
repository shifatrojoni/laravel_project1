@extends('layouts.app')

@section('title','Contact list Page')

@section('content')

@if(session('msg')) 
<div class="alert alert-successs">{{session('msg')}}</div>
@endif
   

     <table class="table table-success table-striped">
      
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                {{-- <th>{{$message['id']}}</th>
                <th>{{$message['name']}}</th>
                <th>{{$message['email']}}</th>
                <th>{{$message['subject']}}</th>
                <th>{{$message['message']}}</th> --}}

                <th>{{$message->id}}</th>
                <th>{{$message->name}}</th>
                <th>{{$message->email}}</th>
                <th>{{$message->subject}}</th>
                <th>{{$message->message}}</th>
                <th>
                    <a href="/contact/edit/{{$message['id']}}" class="btn btn-primary btn-sm">Edit</a>
                 <a href="/contact/delete/{{$message['id']}}" class="btn btn-secondary btn-sm">Delete</a>
                    {{-- <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-secondary btn-sm">delete</button> --}}
                </th>
               
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
                
            </tr>

        </tfoot>
     </table>
      
    </div>
  </div>
</div>

@endsection