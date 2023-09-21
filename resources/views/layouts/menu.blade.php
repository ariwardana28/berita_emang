
<ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ route('users.index') }}"
           class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Manage User</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('roles.index') }}"
           class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Manage Role</p>
        </a>
    </li>

</ul>
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Manage User</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Manage Role</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('kategoris.index') }}"
       class="nav-link {{ Request::is('kategoris*') ? 'active' : '' }}">
        <p>Kategoris</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('beritas.index') }}"
       class="nav-link {{ Request::is('beritas*') ? 'active' : '' }}">
        <p>Beritas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('slides.index') }}"
       class="nav-link {{ Request::is('slides*') ? 'active' : '' }}">
        <p>Slides</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('abouts.index') }}"
       class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <p>Abouts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('media.index') }}"
       class="nav-link {{ Request::is('media*') ? 'active' : '' }}">
        <p>Media</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('daerahs.index') }}"
       class="nav-link {{ Request::is('daerahs*') ? 'active' : '' }}">
        <p>Daerahs</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('beritaDaerahs.index') }}"
       class="nav-link {{ Request::is('beritaDaerahs*') ? 'active' : '' }}">
        <p>Berita Daerahs</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('iklans.index') }}"
       class="nav-link {{ Request::is('iklans*') ? 'active' : '' }}">
        <p>Iklans</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('komens.index') }}"
       class="nav-link {{ Request::is('komens*') ? 'active' : '' }}">
        <p>Komens</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('komenDaerahs.index') }}"
       class="nav-link {{ Request::is('komenDaerahs*') ? 'active' : '' }}">
        <p>Komen Daerahs</p>
    </a>
</li>


