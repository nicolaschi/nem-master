@include('admin.aheader')

                

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add Admins</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row gy-4">
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                <form method="POST" action="{{ route('add_user') }}" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label class="form-label" for="first-name">Name</label>
                                                        <input type="text" class="form-control" id="first-name" placeholder="Name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                                    </div>
                                                </div>

                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="last-name">Address</label>
                                                        <input type="text" class="form-control" id="last-name" placeholder="Address">
                                                    </div>
                                                </div>
                                                <!--col-->
             

                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Phone No</label>
                                                        <input type="text" class="form-control" id="address" placeholder="Phone Number">
                                                    </div>
                                                </div>


                                      <div class="form-group">
                                        <label class="form-label" for="email">State:</label>
                                        <div class="form-control-wrap">
                                        
                                        <select id="role" name="role" class="form-control @error('role') is-invalid @enderror">
                                        <option value="Abia">Abia</option>
                                         <option value="Lagos">Lagos</option>
                                        <option value="Delta">Delta</option>
                                        </select>

                                                      @error('role')
                                                            <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                     @enderror
                                        </div>
                                    </div>
                                                
                                   
                                                <div class="col-md-6 col-lg-4 col-xxl-3">

                                                <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                               @error('password')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                        </div>
                                    </div>
</div>

                                                

                                               
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Add User</button>
                                                    </div>
                                                </div>

</form>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
@include('admin.afooter')