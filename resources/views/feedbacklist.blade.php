@extends('layouts.app')

@section('title','Contact list Page')

@section('content')
   

     <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
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
                <th>{{$message->message}}</th>
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                
            </tr>

        </tfoot>
     </table>
      
    </div>
  </div>
</div>

@endsection