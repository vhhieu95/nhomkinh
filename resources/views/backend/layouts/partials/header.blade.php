<header class="main-header">
  <a href="{{ route('admin.index') }}" class="logo">
    <span class="logo-mini"><b>{{ __('Ad') }}</b></span>
    <span class="logo-lg"><b>{{ __('Admin') }}</b></span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('images/user.jpg')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <p>
                {{ Auth::user()->name }}
                <small>{{ ('DateCreation: ')}}{{ Auth::user()->created_at }}</small>
              </p>
            </li>
            <li class="user-footer">
              <form action="{{ route('logout') }}" class="text-center" method="POST">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary"  name="logout">
                  {{__('Log out')}}
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>