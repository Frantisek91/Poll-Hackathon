@extends ('layout/main')

@section('content')

        <form action="{{action("PollController@update", $poll->id )}}" method="POST">
        @csrf
        {{ method_field("PUT") }}

        <div class="d-flex flex-column p-5 form-group">
        <input class="form-control" type="text" placeholder="Default input" name="title" value="{{$poll->title}}">
        <textarea class="form-control" id="new_question" rows="3"></textarea>
        
        <button type="submit btn btn-warning">Edit Question</button>
        
        </div>
    </form>
    
@endsection