<div>
    <div class="page-header">
        <div>
            <h3>Settings</h3>
            <nav aria-label="breadcrumb" class="d-flex align-items-start">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=index.html>Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav nav-pills flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active" id="v-pills-home-tab" data-toggle="pill"
                           href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Your
                            Profile</a>
                        {{-- <a class="nav-item nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                           role="tab" aria-controls="v-pills-profile" aria-selected="false">Password</a> --}}
                        {{-- <a class="nav-item nav-link" id="v-pills-messages-tab" data-toggle="pill"
                           href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email
                            Notifications</a>
                        <a class="nav-item nav-link" id="v-pills-settings-tab" data-toggle="pill"
                           href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Integrations</a> --}}
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-body">
                                    <form wire:submit.prevent="userData">
                                    <h6 class="card-title">Your Profile</h6>
                                    <div class="d-flex mb-3">
                                        <figure class="mr-3">
                                            <img width="100" class="rounded-pill"
                                                 src="{{asset('assets/media/image/user/women_avatar1.jpg')}}" alt="...">
                                        </figure>
                                        <div>
                                            <p>{{auth()->user()->name}}</p>
                                            {{-- <button class="btn btn-outline-light mr-2">Change Avatar</button>
                                            <button class="btn btn-outline-danger">Remove Avatar</button> --}}
                                            <p class="small text-muted mt-3">For best results, use an image at least
                                                256px by 256px in either .jpg or .png format</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input required type="text" wire:model="name" class="form-control" value="{{auth()->user()->name}}">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" disabled  class="form-control" value="{{auth()->user()->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Role</label>
                                               <input type="text" disabled class="form-control" name="" value="{{auth()->user()->role}}" id="">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control">
                                                    <option value="">All</option>
                                                    <option value="" selected>Active</option>
                                                   
                                                </select>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Contact</h6>
                                  <form wire:submit.prevent="contact">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Birth Date</label>
                                                <input type="date" wire:model="dob" class="form-control" value="{{auth()->user()->dob}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" wire:model="phone" class="form-control" value="{{auth()->user()->phone}}">
                                            </div>
                                        
                                            <div class="form-group">
                                                <p>Gender</p>
                                                <select wire:model="gender"  class="form-control" id="">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" wire:model="address" class="form-control" value="{{auth()->user()->address}}">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label>Post Code</label>
                                                <input type="text" class="form-control"value="{{auth()->user()->post_code}}">
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" wire:model="city" class="form-control" value="{{auth()->user()->city}}">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" wire:model="country" class="form-control" value="{{auth()->user()->country}}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                  </form>
                                </div>
                            </div>
    
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Password</h6>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password Repeat</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <h5 class="mb-3">Activity Notifications</h5>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" checked
                                                       id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Someone assigns
                                                    me
                                                    to a task</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" checked
                                                       id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">Someone mentions
                                                    me
                                                    in a conversation</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" checked
                                                       id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">Someone adds me
                                                    to a
                                                    project</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch41">
                                                <label class="custom-control-label" for="customSwitch41">Activity on a
                                                    project I am a member of</label>
                                            </div>
                                        </div>
                                        <h5 class="mb-3 mt-5">Service Notifications</h5>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch51">
                                                <label class="custom-control-label" for="customSwitch51">Monthly
                                                    newsletter</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" checked
                                                       id="customSwitch6">
                                                <label class="custom-control-label" for="customSwitch6">Major feature
                                                    enhancements</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                                <label class="custom-control-label" for="customSwitch7">Minor updates
                                                    and
                                                    bug fixes</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <figure class="mb-0 mr-3">
                                            <img
                                                src="https://pipeline.mediumra.re/assets/img/logo-integration-slack.svg"
                                                alt="...">
                                        </figure>
                                        <div>
                                            <h6 class="card-title mb-1">Slack</h6>
                                            <div class="text-muted">Permissions: Read, Write, Comment</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <figure class="mb-0 mr-3">
                                            <img
                                                src="https://pipeline.mediumra.re/assets/img/logo-integration-drive.svg"
                                                alt="...">
                                        </figure>
                                        <div>
                                            <h6 class="card-title mb-1">Google Drive</h6>
                                            <div class="text-muted">Permissions: Read, Write</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <figure class="mb-0 mr-3">
                                            <img
                                                src="https://pipeline.mediumra.re/assets/img/logo-integration-dropbox.svg"
                                                alt="...">
                                        </figure>
                                        <div>
                                            <h6 class="card-title mb-1">Dropbox</h6>
                                            <div class="text-muted">Permissions: Read, Write, Upload</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>