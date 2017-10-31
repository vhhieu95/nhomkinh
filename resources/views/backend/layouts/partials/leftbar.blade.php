<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('images/user.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <i class="fa fa-circle text-success"></i> {{('Online')}}
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">{{__('MAIN NAVIGATION')}}</li>
      <li class="{{ isActiveRoute('users.index') }}">
        <a href="{{ route('users.index') }}">
          <i class="fa fa-dashboard"></i><span>{{__('Người dùng')}}</span>
        </a>
      </li>
      <li class="{{ areActiveRoute(['products.index','products.create', 'products.edit']) }}">
        <a href="{{ route('products.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Sản phẩm</span>
        </a>
      </li>
      <li class="{{ areActiveRoute(['categories.index','categories.create', 'categories.edit']) }}">
        <a href="{{ route('categories.index')}}">
          <i class="fa fa-th"></i> <span>{{__('Danh Mục')}}</span>
        </a>
      </li>
      <li class="{{ areActiveRoute(['projects.index','projects.create', 'projects.edit']) }}">
        <a href="{{ route('projects.index') }}">
          <i class="fa fa-pie-chart"></i>
          <span>{{__('Dự Án')}}</span>
        </a>
      </li>
      <li class="{{ areActiveRoute(['news.index','news.create', 'news.edit']) }}">
        <a href="{{ route('news.index') }}">
          <i class="fa fa-laptop"></i>
          <span>{{__('Tin Tức')}}</span>
        </a>
      </li>
      <li class="{{ areActiveRoute(['introduces.index','introduces.create', 'introduces.edit']) }}">
        <a href="{{ route('introduces.index') }}">
          <i class="fa fa-laptop"></i>
          <span>{{__('Giới Thiệu')}}</span>
        </a>
      </li>
      <li class="{{ areActiveRoute(['contacts.index','contacts.show']) }}">
        <a href="{{ route('contacts.index') }}">
          <i class="fa fa-laptop"></i>
          <span>{{__('Liên Hệ')}}</span>
        </a>
      </li>
    </ul>
  </section>
</aside>