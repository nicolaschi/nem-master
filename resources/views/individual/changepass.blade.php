@include('individual.header')

                
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Update Password</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row gy-4">
                                                <div class="col-md-12 col-lg-12 col-xxl-3">

                        <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                         @method('PUT')

                                                @if (session('status') == "password-updated")
                                                  <div class="alert alert-success">
                                                         Password updated successfully.
                                                  </div>
                                                @endif

                                                    <div class="form-group">
                                                        <label class="form-label" for="first-name">Current password</label>
                                                         <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password" required autofocus>

                                                    @error('current_password', 'updatePassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="first-name">New  password</label>
                                                        <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password', 'updatePassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 col-lg-12 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="first-name">confirm password</label>
                                                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                                    @error('password', 'updatePassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                    <button type="submit" class="btn btn-primary col-md-12">Update Password</button>
                                                    </div>
                                                </div>
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
@include('individual.footer')