<style>
    .btn-open {
        display: none;
    }

    .btn-close {
        display: none;
    }

    @media (max-width: 767.98px) {

        .main-sidebar,
        .main-sidebar::before {
            box-shadow: none !important;
            margin-left: 0px;
        }

        aside {
            display: none;
        }

        .btn-open {
            display: block;
            position: fixed;
            top: 55vh;
            z-index: 100;
            font-size: 2em;
            left: -10px;
        }

        .btn-close {
            float: right;
            display: block;
        }
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" id="sidebar" style="background: black; margin-top:77px;padding-top:50px;">
    <!-- #51284f; -->

    <!-- Sidebar -->
    <div class="sidebar">
        <button class="btn btn-primary btn-close" id="btn-close"><i class="fa fa-times" aria-hidden="true"></i></button>

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
                            <a href="admin-addJob" class="nav-link">
                                <p>Add Jobs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.active-jobs') }}" class="nav-link">
                                <p>Active Jobs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.inactive-jobs') }}" class="nav-link">
                                <p>Inactive Jobs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pending-jobs') }}" class="nav-link">
                                <p>Pending Jobs</p>
                            </a>
                        </li>
<!--                         <li class="nav-item">
                            <a href="admin-addJob" class="nav-link">
                                <p>Deleted Jobs</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ route('admin.applied') }}" class="nav-link">
                                <p>Applied Jobs</p>
                            </a>
                        </li>
                    </ul>
                </li>
<!--                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fw fa-rss"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="blogs" class="nav-link">
                                <p>Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="public/assets/pages/layout/top-nav.html" class="nav-link">
                                <p>Add Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
<!--                 <li class="nav-item">
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
                </li> -->
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
<!--                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fw fa-cogs"></i>
                        <p> Services
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
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div>
    <button class="btn btn-open" id="btn-open" style="color: #51284f;"><i class="fa fa-arrow-circle-right" aria-hidden="true"
     ></i></button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // function myFunction() {
    //     document.getElementById("sidebar").style.display = "block";
    // }

    // function closeSideBar() {
    //     document.getElementById("sidebar").style.display = "none";
    // }

        $("#btn-close").click(function() {
            $("#sidebar").hide("slow");
        });
        $("#btn-open").click(function() {
            $("#sidebar").show("slow");
        });
</script>