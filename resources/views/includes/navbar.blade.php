<div class="navbar navbar-expand-lg bg-dark navbar-dark rounded">

    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>

    <!-- Overflow button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          {{-- mikrotik.com API sample --}}
          <li class="nav-item">
              <a class="nav-link" href="/mikrotik">mikrotik.com</a>
          </li>
        </ul>
    </div>

</div>
