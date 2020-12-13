 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <button class="btn btn-warning">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                </button>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
    </ul>
  </nav>