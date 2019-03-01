@extends ('layout/main')


@section('content')
    

<form action="{{action("PollController@store")}}" method="POST">
    @csrf

    <div class="d-flex flex-column p-5 form-group">
    <label for="">Enter your Question</label>
    <input type="text" name="title" Class="mb-4">

    <button type="submit" class="btn btn-warning">Add Question</button>
    

</form>


@endsection