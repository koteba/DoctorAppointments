<div wire:ignore.self class="modal fade" id="prescriptions" tabindex="-1" role="dialog" aria-hidden="true">
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
                          <label for="">Patient Name</label>
                          <select wire:model="patient" class="form-control" required id="">
                              <option value="">--Seelct Tenant--</option>
                              <option value="{{$value->id}}">{{$value->name}}</option>
                          </select>
                      </div>
                      <div class="col-md-12">
                          <label for="">Prescription</label>
                          <input type="text" required class="form-control" placeholder="Enter Prescriptions" wire:model="prescriptions" id="">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>