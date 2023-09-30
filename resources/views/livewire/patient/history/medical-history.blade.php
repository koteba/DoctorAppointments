<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>My Medical History and Medications</h3>
            <p class="text-muted">List of the medication received.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>


        </div>
    </div>
    <div class="row col-md-12">
        @if($medical ==null)
        <div class="alert alert-warning" role="alert">
            You dont have any medication listed on your profile. Stay safe as required <i class="pr-2 fas fa-thumbs-up"></i>
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Medications History</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Date Applied</th>
                            <th>Medication</th>

                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($medical as $value)
                            <tr>
                                <td>
                                    {{ $value->created_at }}
                                </td>
                                <td>{{ $value->description }}</td>
                               
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="2">No Record Found</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
