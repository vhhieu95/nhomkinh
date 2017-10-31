<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
          <p>Hieu Vo</p>
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
          <i class="fa fa-dashboard"></i> <span>Users</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Sản Phẩm</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-th"></i> <span>Danh Mục</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Dự Án</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Tin Tức</span>
        </a>
      </li>
      <li class=" {{ isActiveRoute('') }}">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Giới Thiệu</span>
        </a>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Liên Hệ</span>
        </a>
      </li>
    </ul>
  </section>
</aside>