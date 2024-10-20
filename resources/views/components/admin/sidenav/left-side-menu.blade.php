<ul class="metismenu" id="side-menu">
    <li class="menu-title">Main</li>
    <li class="">
        <a href="">
            <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right">2</span> <span>
                Dashboard </span>
        </a>
    </li>


    <li>
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Employees <span
                    class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
        <ul class="submenu">
            <li>
                <a href="{{ route('employee.index') }}" class=""><i class="dripicons-view-apps"></i><span>Employees
                        List</span></a>
            </li>

        </ul>
    </li>

    <li class="menu-title">Management</li>

    <li class="">
        <a href="{{ route('schedule.index') }}" class="">
            <i class="ti-time"></i> <span> Schedule </span>
        </a>
    </li>
    <li class="">
        <a href="{{ route('attandance.index') }}" class="">
            <i class="dripicons-to-do"></i> <span> Attendance Sheet </span>
        </a>
    </li>
    <li class="">
        <a href="{{ route('sheet.index') }}" class="">
            <i class="dripicons-to-do"></i> <span> Sheet Report </span>
        </a>
    </li>

    <li class="">
        <a href="{{ route('attandance-log.index') }}" class="">
            <i class="ti-calendar"></i> <span> Attendance Logs </span>
        </a>
    </li>
    <li class="">
        <a href="{{ route('late.index') }}" class="">
            <i class="dripicons-warning"></i><span> Late Time </span>
        </a>
    </li>
    <li class="">
        <a href="{{ route('leave.index') }}" class="">
            <i class="dripicons-backspace"></i> <span> Leave </span>
        </a>
    </li>
    <li class="">
        <a href="{{ route('overtime.index') }}" class="">
            <i class="dripicons-alarm"></i> <span> Over Time </span>
        </a>
    </li>
    <li class="menu-title">Tools</li>
    <li class="">
        <a href="{{ route('biometric.index') }}">
            <i class="fas fa-fingerprint"></i> <span> Biometric Device </span>
        </a>
    </li>

</ul>