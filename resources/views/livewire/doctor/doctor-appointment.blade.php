<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>My Appointments</h3>
            <p class="text-muted">List of my Appointments.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>
        
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h6 class="card-title"> Appointments</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Date Applied</th>
                            <th>Diagnosis</th>
                            
                            <th>Status</th>
                            <th>Doctor</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($appointments as $value)
                            <tr>
                                <td>
                                    {{ $value->date }}
                                </td>
                                <td>{{ $value->diagnosis }}</td>
                                
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">{{ $value->status }}</span>
                                </td>
                                <td>{{ $value->doctor }}</td>
           
                                <td><span class="fa fa-trash"></span> Cancel</td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="5">No Record Found</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- CREATE INSURANCE MODAL --}}
    <div wire:ignore.self class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Fill in the details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                
                </div>
                <form wire:submit.prevent="store">
                    <div class="col-md-12">
                        @if(Session::get('message'))
                        <div class="alert alert-success">
                            <p>{{Session::get('message')}}</p>
                        </div>
                    @endif
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="">Diagnosis</label>
                                <select wire:model="diagnosis" class="form-control" id="">
                                    <option value="">--Select--</option>
                                    <option value="Dentist">Dentist</option>
                                </select>
                                @error('diagnosis') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Doctor</label>
                                <select wire:model="doctor" class="form-control" id="">
                                    <option value="">--Select--</option>
                                    <option value="Doctor ">Kamau</option>
                                </select>
                                @error('doctor') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="">Booking Date
                                </label>
                                <input type="date" wire:model="date" class="form-control" id="">
                               
                                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
