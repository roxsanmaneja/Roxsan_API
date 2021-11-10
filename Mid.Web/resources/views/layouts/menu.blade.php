<li class="nav-item">
    <a href="{{ route('hotelreservationforms.index') }}"
       class="nav-link {{ Request::is('hotelreservationforms*') ? 'active' : '' }}">
        <p>Hotelreservationforms</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


