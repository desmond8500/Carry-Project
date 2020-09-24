<li class="nav-item {{ Request::is('cars*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cars.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cars</span>
    </a>
</li>
<li class="nav-item {{ Request::is('commandes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('commandes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Commandes</span>
    </a>
</li>
