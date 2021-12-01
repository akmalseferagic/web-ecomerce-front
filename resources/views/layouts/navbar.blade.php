<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home" id="Tasanesia">Tasanesia.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-inline-end: 10px">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Halal food</a></li>
              <li><a class="dropdown-item" href="#">Tanaman hias</a></li>
              <li><a class="dropdown-item" href="#">Sarana prasarana</a></li>
              <li><a class="dropdown-item" href="#">Nanas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Buat project campaign</a></li>
            </ul>
          </li>
          <li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="padding: 0.375rem 18rem; margin-left:10px;">
          </form>
        </li>

       <!-- ini untuk login di navbar --> 
       <!-- ganti ini dengan kode dibawah -->
            <li class="nav-item">
                <a class="nav-link" href="login" style="margin-left: 58px;">Masuk</a>
            </li>
       
            <!-- Ganti pakai ini -->
            {{--
                              @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hi {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Akun</a>
                                        @if (Auth::user()->role == 'regular')
                                        <a class="dropdown-item" href="#">Upgrade
                                            Premium</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
        --}} 
        </ul>
      </div>
    </div>
  </nav>
</div>

  