@extends ('layout/main')


@section('content')
    

<div class="card-header">
    <div class="card-body">
<p class="nav-item ml-2">
    <a class="nav-link" href="{{ url('/poll/create') }}">Create a new Poll</a>
</p>
    </div>
</div>


<div class="card-header">
        <div class="card-body">
<p class="nav-item ml-2">
        <a class="nav-link" href="{{ url('polls') }}">See all polls and vote</a>
    </p>
</div>
</div>

      @endsection