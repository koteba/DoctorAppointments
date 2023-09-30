<div class="navigation-menu-body">
    <ul>
        <li>
            <a class="{{Request::segment(1)=='' ? 'active' : null}}" href={{route('patient.home')}}>
                <span class="nav-link-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a class="{{Request::segment(2)=='insurance' ? 'active' : null}}" href="{{route('patient.insurance')}}">
                <span class="nav-link-icon">
                    <i data-feather="message-circle"></i>
                </span>
                <span>Insurance</span>
                
            </a>
        </li>
        <li>
            <a class="{{Request::segment(2)=='notes' ? 'active' : null}}" href="{{route('patient.notes')}}" href="{{route('patient.notes')}}">
                <span class="nav-link-icon">
                    <i data-feather="mail"></i>
                </span>
                <span>Notes</span>
            </a>
        </li>
    
        <li>
            <a class="{{Request::segment(2)=='appointment' ? 'active' : null}}" href="{{route('patient.appointment')}}">
                <span class="nav-link-icon">
                    <i data-feather="calendar"></i>
                </span>
                <span>Appointments</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i data-feather="shopping-cart"></i>
                </span>
                <span>My History</span>
            </a>
            <ul>
                <li>
                    <a class="{{Request::segment(3)=='medical' ? 'active' : null}}" href="{{route('patient.history.medical')}}">Medical History</a>
                </li>
                <li>
                    <a class="{{Request::segment(3)=='family' ? 'active' : null}}"  href="{{route('patient.history.family')}}">Family History</a>
                </li>
                <li>
                    <a class="{{Request::segment(3)=='allergy' ? 'active' : null}}" href="{{route('patient.history.allergy')}}">Allergies History</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="nav-link-icon">
                    <i data-feather="edit-3"></i>
                </span>
                <span>Doctor Reviews</span>
            </a>
            <ul >
                <li>
                    <a class="{{Request::segment(3)=='vitals' ? 'active' : null}}" href="{{route('patient.doctor.vitals')}}">Vital Signs</a>
                </li>
                <li>
                    <a class="{{Request::segment(3)=='exam' ? 'active' : null}}" href="{{route('patient.doctor.exam')}}">Physical Exams</a>
                </li>
                <li>
                    <a class="{{Request::segment(3)=='recomendations' ? 'active' : null}}" href="{{route('patient.doctor.recomendations')}}">Recommendations</a>
                </li>
                
            </ul>
        </li>

    </ul>
</div>