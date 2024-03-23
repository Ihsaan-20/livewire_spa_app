<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}" aria-current="page">Home <span
                        class="visually-hidden">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}" wire:navigate>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('register')}}" wire:navigate>Register</a>
                </li>
            @endguest
            

           @auth
           <li class="nav-item">
                <livewire:logout />
            </li>
           @endauth
        </ul>
        
    </div>
</nav>
