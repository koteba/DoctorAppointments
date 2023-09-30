<div wire:ignore.self class="modal fade" id="review" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Patient Reviews</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            
            </div>
            <form wire:submit.prevent="review">
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
                              <option value="">--Select Tenant--</option>
                              <option value="{{$value->id}}">{{$value->name}}</option>
                          </select>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Select Type</label>
                              <select class="form-control" wire:model="type" id="">
                                  <option value="">--Choose Option--</option>
                                  <option value="Vital Signs">Vital Signs</option>
                                  <option value="Physical Exam">Physical Exam</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="">Enter your Reviews</label>
                          <textarea wire:model="review" class="form-control" id="" cols="30" rows="10"></textarea>
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