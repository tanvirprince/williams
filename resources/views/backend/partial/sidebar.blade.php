<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel <sup>Williams.</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true" aria-controls="collapseSlider">
            <i class="fas fa-fw fa-image"></i>
            <span>Slider Management</span>
        </a>
        <div id="collapseSlider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Slider</h6>
                <a class="collapse-item" href="{{ route('sliders.index') }}">Manage Slider</a>
                <a class="collapse-item" href="{{ route('sliders.create') }}">Add new Slider</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-info-circle"></i>
            <span> About Us </span>
        </a>
        <div id="collapseAbout" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Home | about  </h6>
                <a class="collapse-item" href="{{ route('about.create') }}">Update Our Story</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-image"></i>
            <span>Gallary Management</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gallary Product</h6>
                <a class="collapse-item" href="{{ route('galleries.index') }}">Manage Gallary</a>
                <a class="collapse-item" href="{{ route('galleries.create') }}">Add Product to Gallary</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecertificate" aria-expanded="true" aria-controls="collapsecertificate">
            <i class="fas fa-file"></i>
            <span>Certificate Management</span>
        </a>
        <div id="collapsecertificate" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Certificate</h6>
                <a class="collapse-item" href="{{ route('certificates.index') }}">Manage Certificate</a>
                <a class="collapse-item" href="{{ route('certificates.create') }}">Add new Certificate</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#managements" aria-expanded="true" aria-controls="managements">
            <i class="fas fa-fw fa-user"></i>
            <span>Management</span>
        </a>
        <div id="managements" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Management</h6>
                <a class="collapse-item" href="{{ route('managements.create') }}">Managing Director</a>
                <a class="collapse-item" href="{{ route('management2.create') }}">Management Two</a>
                <a class="collapse-item" href="{{ route('management3.create') }}">Management Three</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Service </span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Service Process</h6>
            <a class="collapse-item" href="{{ route('service.index')}}">Manage Service</a>
            <a class="collapse-item" href="{{ route('service.create') }}">Add Service</a>

            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sustainabilities" aria-expanded="true" aria-controls="sustainabilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sustainability </span>
        </a>
        <div id="sustainabilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sustainability Process</h6>
            <a class="collapse-item" href="{{ route('sustainabilities.index')}}">Manage Sustainability</a>
            <a class="collapse-item" href="{{ route('sustainabilities.create') }}">Add Sustainability</a>

            </div>
        </div>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span> Clients </span>
        </a>
        <div id="collapseBrand" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">My Clients </h6>
                <a class="collapse-item" href="{{ route('brand.index')}}">Manage Client</a>
                <a class="collapse-item" href="{{ route('brand.create') }}">Add Client</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->


    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-angle-down"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
