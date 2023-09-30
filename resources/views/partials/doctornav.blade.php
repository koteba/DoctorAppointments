<div class="navigation-menu-body">
    <ul>
        <li>
            <a class="{{Request::segment(1)=='dashboard' ? 'active' : null}}" href={{route('doctor.home')}}>
                <span class="nav-link-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a class="{{Request::segment(2)=='notes' ? 'active' : null}}" href="{{route('doctor.notes')}}" href="{{route('doctor.notes')}}">
                <span class="nav-link-icon">
                    <i data-feather="mail"></i>
                </span>
                <span>Notes</span>
            </a>
        </li>
    
        <li>
            <a class="{{Request::segment(2)=='appointment' ? 'active' : null}}" href="{{route('doctor.appointment')}}">
                <span class="nav-link-icon">
                    <i data-feather="calendar"></i>
                </span>
                <span>Appointments</span>
            </a>
        </li>

        <li>
            <a class="{{Request::segment(2)=='patients' ? 'active' : null}}" href="{{route('doctor.patients')}}">
                <span class="nav-link-icon">
                    <i data-feather="calendar"></i>
                </span>
                <span>Patients</span>
            </a>
        </li>



    </ul>
</div>