@extends ('layout/main')

@section('content')
    
@foreach ($polls as $poll)

<div class="poll card-header">
<div class="card-body">
<h5 class="card-title">{{ $poll->title }}</h5>
<p class="card-text">{{ $poll->user_id }}</p>



<div class="container">
    
        <form method="post"  action="{{action("VoteController@store")}}">
            @csrf
                @foreach ($options[$poll->id] as $option)

                <div class="form-check mb-2">
                        <input class="form-check-input" name="option_id" value="{{ $option->id }}" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                                {{ $option->title }}
                        </label>
                      </div>
                
                {{-- <select class="options">
                <option value="">{{ $option->title }}</option>
                </select> --}}
                
                @endforeach
    
                <button>Vote</button>
            </form>
    
</div>


<a class="btn btn-warning" href= "{{action("PollController@edit", $poll->id)}} ">Edit</a>




</div>
</div>

@endforeach

@endsection