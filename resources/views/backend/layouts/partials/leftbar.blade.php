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
        <a href="{{ route('products.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Sản phẩm</span>
        </a>
      </li>
      <li class="{{isActiveRoute('categories.index')}}">
        <a href="{{ route('categories.index')}}">
          <i class="fa fa-th"></i> <span>{{__('Danh Mục')}}</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>{{__('Dự Án')}}</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>{{__('Tin Tức')}}</span>
        </a>
      </li>
      <li class=" {{ isActiveRoute('') }}">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>{{__('Giới Thiệu')}}</span>
        </a>
      </li>
      <li class="{{ isActiveRoute('feedbacks.index') }}">
        <a href="{{ route('feedbacks.index') }}">
          <i class="fa fa-laptop"></i>
          <span>{{__('Liên Hệ')}}</span>
        </a>
      </li>
    </ul>
  </section>
</aside>