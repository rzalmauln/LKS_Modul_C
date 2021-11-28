<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Geek Bot</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $active == 'home' ? 'active' : ' ' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto dropdown">
            @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selamat datang, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/users"><i class="bi bi-layout-text-sidebar-reverse"></i> User</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="{{ route('logout') }}" method="post">
                              @csrf
                              <button type="submit" class="dropdown-item">
                                  <i class="bi bi-box-arrow-right"></i> Logout
                              </button>
                          </form>
                      </li>
                  </ul>
                </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link {{ $active == 'login' ? 'active' : ' ' }}"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>