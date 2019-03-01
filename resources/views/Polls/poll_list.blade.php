@extends ('layout/main')

@section('content')
    
@foreach ($polls as $poll)

<div class="poll card-header">
<div class="card-body">
<h5 class="card-title">{{ $poll->title }}</h5>
<p class="card-text">{{ $poll->user_id }}</p>


<div class="container">
    
    
    @foreach ($options[$poll->id] as $option)
    
    <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                    {{ $option->title }}
            </label>
          </div>
    
    {{-- <select class="options">
    <option value="">{{ $option->title }}</option>
    </select> --}}
    
    @endforeach
</div>


<button type="button" class="btn btn-warning" style="text-decoration:none">
<a href= "{{action("PollController@edit", $poll->id)}} ">Edit</a>
</button>

<button type="button" class="btn btn-success" style="text-decoration:none">
                <a href= "{{action("PollController@edit", $poll->id)}} ">Vote</a>
                </button>



</div>
</div>

@endforeach

@endsection