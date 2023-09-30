<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>My Insurance</h3>
            <p class="text-muted">List of my Insurances.</p>
        </div>

    </div>
    <div class="row">
        @if(count($patients)<0)
        <div class="alert alert-info" role="alert">
            You dont have patients at the moment
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">All Patients</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($patients as $value)
                            <tr>
                                <td>
                                    {{ $value->name }}
                                </td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->Age }}</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">{{ $value->phone }}</span>
                                </td>
                                <td>{{ $value->address }}</td>
                               
                                <td>
                                    <div data-toggle="modal" data-target="#prescriptions" class="badge badge-info">Prescriptions</div>
                                    <div data-toggle="modal" data-target="#allergy" class="badge badge-primary" class="badge badge-success">Allergies</div>
                                    
                                    <div data-toggle="modal" data-target="#recommend" class="badge badge-danger">Recomends</div>
                                    <div data-toggle="modal" data-target="#review" class="badge badge-secondary">Reviews</div>
                                    {{-- <div class="badge badge-warning">History</div> --}}
                                </td>
                                @include('livewire/doctor/includes/prescriptions')
                                @include('livewire/doctor/includes/allergy')
                                @include('livewire/doctor/includes/recommend')
                                @include('livewire/doctor/includes/reviews')
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="6">No Patient Found</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- CREATE INSURANCE MODAL --}}


</div>

