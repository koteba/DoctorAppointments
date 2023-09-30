</tbody>
<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>My Allergies</h3>
            <p class="text-muted">Recorded Allergies from Doctor.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>


        </div>
    </div>
    <div class="row col-md-12">
        @if($allergy ==null)
        <div class="alert alert-success" role="alert">
             You dont have any alergy registered on your profile<i class="pr-2 fas fa-thumbs-up"></i>
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Allergies Recorded</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Date Recorded</th>
                            <th>Description</th>
                          
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($allergy as $value)
                            <tr>
                                <td>
                                    {{ $value->created_at }}
                                </td>
                                <td>{{ $value->description }}</td>
                                
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="">No Record Found</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
