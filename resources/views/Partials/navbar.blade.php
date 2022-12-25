<div class="container">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid ">
            <a class="navbar-brand " href="/dasboard"><h3><i class="bi bi-house-fill "></i></h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="/read"><b>Sederhana</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/Mahasiswa"><b>Mahasiswa</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><b>Company</b></a>
                    </li>
                </ul>

               @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-auto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/no photo.png" width="40px" height="40px" alt=""><small style="size: 2px">{{ auth()->user()->username }}</small>
                          </a>
                          <ul class="dropdown-menu ms-auto">
                            <li><a class="dropdown-item text-center" href="/account">Acount</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="nav-item dropdown-item ms-auto">
                              <form action="/logout" method="post">
                               @csrf
                                <button type="submit" class="dropdown-item text-center"><b>Logout <i class="bi bi-box-arrow-right"></i></b></button>
                              </form>
                            </li>                    
                          </ul>
                    </li>
                  </ul>
                 @else  
                  <ul class="navbar-nav ms-auto">                  
                    <li class="nav-item dropdown-item ms-auto">
                      <a class="nav-link border-0 " href="/login"><i class="bi bi-box-arrow-in-right"><b>Login</b></i></a>
                    </li>
                  </ul>
                 @endauth
            </div>
        </div>
    </nav>
    <hr style="margin-top: -3px">
</div>