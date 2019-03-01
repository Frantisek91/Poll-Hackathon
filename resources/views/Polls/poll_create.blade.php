@extends ('layout/main')


@section('content')
    

<form action="{{action("PollController@store")}}" method="POST">
    @csrf
    
    <label for="">Enter your Question</label>
    <input type="text" name="title">

    <button type="submit">Add Question</button>
    

</form>


@endsection

<form>
    <div class="form-group">
      <label for="question">Enter your question</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>