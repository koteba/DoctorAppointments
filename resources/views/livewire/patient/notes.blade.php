<div>
    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>My NOTES</h3>
            <p class="text-muted">Created Notes.</p>
        </div>
        <div class="mt-3 mt-md-0">
            <div id="dashboard-daterangepicker" class="btn btn-outline-light">
                <span></span>
            </div>
         
          <a href="#" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0" data-toggle="modal"
          data-target="#exampleModalCenter">Add Note</a>

        </div>
    </div>

    @forelse ($notes as $item)
    <div class="card">
        <div class="card-body">
            <p>{{$item->description}}</p>
        </div>
    </div>
    @empty
    <div class="card">
        <div class="card-body">
            <div class="alert alert-secondary" role="alert">No Notes Created</div>
        </div>
    </div>
    @endforelse

    {{-- CREATE INSURANCE MODAL --}}
    <div wire:ignore.self class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Notes</h5>
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
                            <textarea required wire:model="my_notes" class="form-control"  cols="60" rows="30"></textarea>
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

