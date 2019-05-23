<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #1d2124;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">Company Logo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-arrow-alt-circle-right"></i>
            <span>Project</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Project Components:</h6>
                <a class="collapse-item" href="{{ url('/create/project') }}">Create Project</a>
                <a class="collapse-item" href="#">Running Project PO</a>
                <a class="collapse-item" href="#">Running Project Expanse</a>
                <a class="collapse-item" href="#">Project DateLine</a>
                <a class="collapse-item" href="#">Project Worker</a>
                <a class="collapse-item" href="#">Project Profit</a>
                <a class="collapse-item" href="#">Project Loss</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-arrow-alt-circle-right"></i>
            <span>Employee History</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Employee's:</h6>
                <a class="collapse-item" href="#">Manager's</a>
                <a class="collapse-item" href="utilities-color.html">Engineer's</a>
                <a class="collapse-item" href="utilities-border.html">HR Admin</a>
                <a class="collapse-item" href="utilities-animation.html">Accounts</a>
                <a class="collapse-item" href="utilities-other.html">Team Leader</a>
                <a class="collapse-item" href="utilities-other.html">Technician</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Utilities" aria-expanded="true" aria-controls="Utilities">
            <i class="fa fa-arrow-alt-circle-right"></i>
            <span>Accounts History</span>
        </a>
        <div id="Utilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Account's:</h6>
                <a class="collapse-item" href="#">Main Account</a>
                <a class="collapse-item" href="utilities-color.html">Salary Statement</a>
                <a class="collapse-item" href="utilities-border.html">Yearly Profit</a>
                <a class="collapse-item" href="utilities-animation.html">Yearly Loss</a>
                <a class="collapse-item" href="utilities-other.html">Daily Expanse</a>
                <a class="collapse-item" href="utilities-other.html">Project Expanse</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-arrow-alt-circle-right"></i>
            <span>HRM</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">New Employee</a>
                <a class="collapse-item" href="forgot-password.html">Employee History</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fa fa-arrow-alt-circle-right"></i>
            <span>Manager</span>
        </a>
        <div id="Pages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Daily Work Mail</a>
                <a class="collapse-item" href="forgot-password.html">Daily Money Requisition</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>