<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{url('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
            <li><a href=" {{Route('all.categories')}}"><i class="icon-envelope"></i><span class="hidden-tablet">All Categories</span></a></li>
            <li><a href="{{Route('add.category')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Category</span></a></li>
            <li><a href="{{Route('all.brands')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> All Brands</span></a></li>
            <li><a href="{{Route('add.brand')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Brand</span></a></li>
            <li>
                <a href="#" class="dropmenu"><i class="icon-dashboard"></i><span class="hidden-tablet"> Product<span class="label label-important"> New </span></span></a>
                <ul>
                    <li><a class="submenu" href="{{ Route('all.products') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Products</span></a></li>
                    <li><a class="submenu" href="{{ Route('add.product') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Product</span></a></li>
                </ul>
            </li>
            <li><a href="{{Route('menu')}}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Menus</span></a></li>
            <li><a href="{{Route('slider')}}"><i class="icon-font"></i><span class="hidden-tablet"> Slider</span></a></li>
            <li><a href="{{Route('site.name')}}"><i class="icon-picture"></i><span class="hidden-tablet"> Site Name</span></a></li>
            <li><a href="{{URL::to('/admin/login')}}"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
        </ul>
    </div>
</div>
