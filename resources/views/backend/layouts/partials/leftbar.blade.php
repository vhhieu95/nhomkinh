<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ isActiveRoute('users.index') }}">
        <a href="{{ route('users.index') }}">
          <i class="fa fa-dashboard"></i><span>Người dùng</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Products</span>
        </a>
      </li>
      <li  class="{{ areActiveRoute(['categories.index','categories.create', 'categories.edit']) }}">
        <a href="{{ route('categories.index')}}">
          <i class="fa fa-th"></i> <span>Danh mục</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Projects</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>News</span>
        </a>
      </li>
      <li class=" {{ isActiveRoute('') }}">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Introduction</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-table"></i> <span>Contacts</span>
        </a>
      </li>
    </ul>
  </section>
</aside>