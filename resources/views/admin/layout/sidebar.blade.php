<style>
@media (max-width: 767.98px) {
    .main-sidebar, .main-sidebar::before {
    box-shadow: none!important;
    margin-left: 0px;
}

aside {
    display: none;
}
.btn-open{
    position: fixed;
    top: 55vh;
    z-index: 1;
}
/* .btn-open{
    position: fixed;
    top: 80vh;
    z-index: 1;
} */
}
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" id="sidebar" style="background: black; margin-top:77px;padding-top:50px;">
    <!-- #51284f; -->

    <!-- Sidebar -->
    <div class="sidebar">

        <h2 style="color: white;font-weight:700;">Menu</h2>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-fw fa-tasks"></i>
                        <p>
                            Jobs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.jobs') }}" class="nav-link">
                                <p>Jobs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Add Jobs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Applied Jobs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-fw fa-rss"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Add Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fa fa-star"></i>
                        <p>
                            Testimonials
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Testimonials</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Add Testimonials</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fa fa-user"></i>
                        <p>
                            Candidates
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.candidates') }}" class="nav-link">
                                <p>Candidates</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.candidates') }}" class="nav-link">
                                <p>Temping Candidates</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-fw fa-cogs"></i>
                        <p>     Services
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Add Services</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div>
    <button class ="btn btn-primary btn-open" onclick="myFunction()"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
</div>
<div>
    <button class ="btn btn-primary btn-close"><i class="fa fa-times" aria-hidden="true"></i></button>
</div>
<script>
function myFunction() {
    document.getElementById("sidebar").style.display = "block";
    // console.log('Button Is Clicked');
}
</script>
