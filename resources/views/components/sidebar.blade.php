<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('pages.dashboard') }}"><i class="fas fa-hospital-alt"></i> Yudha Klinik</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">YK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('users.index') }}"><i class="far fa-user"></i>Users</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('doctors.index') }}"><i class="fas fa-stethoscope"></i>Doctors</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctor-schedules.index') }}"><i class="fas fa-calendar-plus"></i>Doctor Schedules</a>
                    </li>

                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('patients.index') }}"><i class="fas fa-user-injured"></i>Patients</a>
                    </li>

                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('service-medicines.index') }}"><i class="fas fa-briefcase-medical"></i>Service and obat</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
