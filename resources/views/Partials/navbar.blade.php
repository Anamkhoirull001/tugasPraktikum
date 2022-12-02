<div class="container">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid ">
            <a class="navbar-brand " href="/"><h3><i class="bi bi-house-fill "></i></h3></a>
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
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item ">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link bg-white border-0"><b>Log <i class="bi bi-box-arrow-right"></i>out</b></button>
                            </form>
                            {{-- <a  href="/login"> </a> --}}
                        </li>                    
                    @else                    
                        <li class="nav-item ">
                            <a class="nav-link border-0 bg-white" href="/login"><i class="bi bi-box-arrow-in-right"><b>Login</b></i></a>
                        </li>
                    @endauth
                    </ul>
                
            </div>
        </div>
    </nav>
    <hr style="margin-top: -3px">
</div>