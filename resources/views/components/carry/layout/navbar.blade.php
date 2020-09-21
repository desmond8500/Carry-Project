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
                    {{-- @foreach ($menus as $menu)
                        <li class="nav-item">
                            <a class="nav-link" href="href="{{ route($menu->route) }}">{{ $menu->name }}</a>
                        </li>
                    @endforeach --}}

                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button>
                </div>
            </div>
        </div>
    </nav>
</div>
