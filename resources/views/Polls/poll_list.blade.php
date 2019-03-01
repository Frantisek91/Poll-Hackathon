@foreach ($polls as $poll)

<div class="poll">

<h2>{{ $poll->user_id }}</h2>
<h2>{{ $poll->title }}</h2>

</div>

@endforeach