@extends ('layout/main')

@section('content')

        <form action="{{action("PollController@update", $poll->id )}}" method="POST">
        @csrf
        {{ method_field("PUT") }}

        <div class="d-flex flex-column p-5 form-group">
        <input class="form-control mb-4" type="text" placeholder="Default input" name="title" value="{{$poll->title}}">
        
        <button type="submit"class="btn btn-warning">Edit Question</button>
        
        </div>
    </form>
    
@endsection