@extends ('layout/main')

@section('content')
    
@foreach ($polls as $poll)

<div class="poll card-header">
<div class="card-body">
<h5 class="card-title">{{ $poll->title }}</h5>
<p class="card-text">{{ $poll->user_id }}</p>

<a href= "{{action("PollController@edit", $poll->id)}} ">Edit</a>
</div>
</div>

@endforeach

@endsection