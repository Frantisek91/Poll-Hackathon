@extends ('layout/main')


@section('content')
    

<form action="{{action("PollController@store")}}" method="POST">
    @csrf

<div class="d-flex flex-column p-5">
    <div class="form-group">
        <label for="question">Enter Your question</label>
        <textarea class="form-control" id="new_question" rows="3"></textarea>
      </div>

    <button type="submit" class="btn btn-success">Add Question</button>
    

</form>
</div>


@endsection

