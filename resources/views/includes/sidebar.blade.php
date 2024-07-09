<!-- Sidebar -->
<div class="col-2 sidebar pt-3">
    <div class="sidebar-list">
        <a href="{{ route('dashboard') }}"
            class="list-group-item sidebar-item p-2 mb-2 {{ Request::is('/') ? 'active' : '' }}">
            <i class="bi bi-house"></i>
            <span class="ms-md-2 ms-sm-0">Home</span>
        </a>
        <a href="{{ route('category') }}"
            class="list-group-item sidebar-item mb-2 p-2 {{ Request::is('category') ? 'active' : '' }}">
            <i class="bi bi-book"></i>
            <span class="ms-md-2 ms-sm-0">Categories</span>
        </a>
        <a href="{{ route('favorite') }}"
            class="list-group-item sidebar-item mb-2 p-2 {{ Request::is('favorite') ? 'active' : '' }}">
            <i class="bi bi-heart"></i>
            <span class="ms-md-2 ms-sm-0">Favorite</span>
        </a>
        <a href="{{ route('mybook') }}"
            class="list-group-item sidebar-item mb-2 p-2 {{ Request::is('mybook') ? 'active' : '' }}">
            <i class="bi bi-journals"></i>
            <span class="ms-md-2 ms-sm-0">MyBooks</span>
        </a>
        <a href="#" class="list-group-item sidebar-item mb-2 p-2 {{ Request::is('setting') ? 'active' : '' }}">
            <i class="bi bi-gear"></i>
            <span class="ms-md-2 ms-sm-0">Settings</span>
        </a>
          <form action="{{ url('logout') }}" method="POST" class="form-inline">
            @csrf
            <button type="submit" class="list-group-item sidebar-item mb-2 p-2">
              <i class="bi bi-box-arrow-right"></i>
                Log out
            </button>
        </form>
    </div>
</div>
