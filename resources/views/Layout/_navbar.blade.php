<nav class="navbar navbar-expand-lg navbar navbar-light bg-ligt mb-3">
    <a class="navbar-brand" href="#" >Poll App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="{{ url('user') }}">User</a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="{{ url('polls') }}">Polls</a>
        </li>
      </ul>
    </div>
  </nav>