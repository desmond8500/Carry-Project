<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">Carry Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @php
                        $user = Auth::user();
                    @endphp
                    @auth
                        @foreach ($menus as $menu)
                            @if ($menu->access == 0 || $menu->access == $user->role)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($menu->route) }}">{{ $menu->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endauth

                </ul>
                <div class="form-inline my-2 my-lg-0">
                    @auth
                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('carry.logout') }}">Déconnexion</a>
                    @else
                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('carry.login') }}">Connexion</a>
                    @endauth

                </div>
            </div>
        </div>
    </nav>
</div>
