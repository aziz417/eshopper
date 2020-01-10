<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
        <div class="sidebar-collapse" style="overflow: hidden; width: auto; height: 100%;">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{ url('backend/img/profile_small.jpg')}}">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">David Williams</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li><a href="#"><i class="fa fa-pie-chart"></i> <span class="hidden-tablet"> Dashboard</span></a></li>
                <li><a href="{{Route('all.brands')}}"><i class="fa fa-flask"></i><span class="hidden-tablet">Brands</span></a></li>
                <li><a class="submenu" href="{{ Route('product.index') }}"><i class="fa fa-flask"></i><span class="hidden-tablet">Products</span></a></li>
                <li><a class="submenu" href="{{ Route('category.index') }}"><i class="fa fa-flask"></i><span class="hidden-tablet">Category</span></a></li>
                <li><a href="{{Route('slider')}}"><i class="fa fa-flask"></i><span class="hidden-tablet"> Slider</span></a></li>
                <!-- <li><a href="{{Route('order.manage')}}"><i class="fa fa-flask"></i><span class="hidden-tablet"> Order</span></a></li> -->
            </ul>
        </div>
    </div>
</nav>
