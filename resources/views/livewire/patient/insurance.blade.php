<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>My Insurance</h3>
            <p class="text-muted">List of my Insurances.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>
          @if(count($insurances) < 0)
          <a href="#" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0" data-toggle="modal"
          data-target="#exampleModalCenter">Add New</a>
          @endif

        </div>
    </div>
    <div class="row">
        @if(count($insurances)>0)
        <div class="alert alert-warning" role="alert">
            You have a running insurance. Therefore you can`t apply for another one till this ends
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Recent Orders</h6>
            <div class="table-responsive">
                <table id="recent-orders" class="table">
                    <thead>
                        <tr>
                            <th>Date Applied</th>
                            <th>Insurance type</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Deposit Amount</th>

                            <th>Period</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($insurances as $value)
                            <tr>
                                <td>
                                    {{ $value->date_applied }}
                                </td>
                                <td>{{ $value->insurance_cover }}</td>
                                <td>{{ $value->payment_method }}</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">{{ $value->status }}</span>
                                </td>
                                <td>{{ $value->deposit_amount }}</td>
                                <td class="text-right">
                                    {{ $value->period }}
                                </td>
                                <td><span class="fa fa-trash"></span> Remove</td>
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
                                <label for="">Insurance Cover</label>
                                <select wire:model="insurance" class="form-control" id="">
                                    <option value="">--Select--</option>
                                    <option value="Medical Cover">Medical Cover</option>
                                </select>
                                @error('insurance') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Insurance Period</label>
                                <select wire:model="period" class="form-control" id="">
                                    <option value="">--Select--</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="2 Years">2 Year</option>
                                    <option value="3 Years">3 Year</option>
                                </select>
                                @error('period') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Payment Method
                                </label>
                                <select wire:model="payment_method" class="form-control" id="">
                                    <option value="">--Select--</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Quartly">Quartly</option>
                                    <option value="Annually">Annually</option>
                                </select>
                                @error('payment_method') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Installment Amount
                                </label>
                                <select wire:model="deposits" class="form-control" id="">
                                    <option value="">--Select--</option>
                                    <option value="5,000">5,000</option>
                                    <option value="10,000">10,000</option>
                                    <option value="20,000">20,000</option>
                                </select>
                                @error('deposits') <span class="text-danger">{{ $message }}</span> @enderror
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
