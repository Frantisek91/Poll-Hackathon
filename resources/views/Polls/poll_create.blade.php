@extends ('layout/main')


@section('content')
    

<form action="{{action("PollController@store")}}" method="POST">
    @csrf
    
    <label for="">Enter your Question</label>
    <input type="text" name="title">

    <button type="submit">Add Question</button>
    

</form>


@endsection