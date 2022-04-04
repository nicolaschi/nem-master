@include('individual.header')

                

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add Booking</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row gy-4">
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="first-name">First Name</label>
                                                        <input type="text" class="form-control" id="first-name" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="last-name">Last Name</label>
                                                        <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Gender</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select multiple options">
                                                                <option value="default_option">Select Gender</option>
                                                                <option value="option_select_gender">Male</option>
                                                                <option value="option_select_gender">Female</option>
                                                                <option value="option_select_gender">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no">Phone</label>
                                                        <input type="number" class="form-control" id="phone-no" placeholder="Phone no">
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email Address</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Adddress</label>
                                                        <input type="text" class="form-control" id="address" placeholder="Address">
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Upload Photo</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Select an package</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" data-placeholder="Select multiple options">
                                                                <option value="default_option">Strater Package</option>
                                                                <option value="option_select_name">Honeymoon Package</option>
                                                                <option value="option_select_name">Vacation Package</option>
                                                                <option value="option_select_name">Spring Package</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Select Room Type</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select">
                                                                <option value="default_option">Select Room Type</option>
                                                                <option value="option_select_room_type">Delux</option>
                                                                <option value="option_select_room_type">Super Delux</option>
                                                                <option value="option_select_room_type">Single</option>
                                                                <option value="option_select_room_type">Double</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Arrived Date</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Depart Date</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="total-person">Total Person</label>
                                                        <input type="number" class="form-control" id="total-person" placeholder="Total Person">
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-md-12">
                                                    <div class="form-gupro">
                                                        <label class="form-label" for="default-textarea">Note</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="form-control no-resize" id="default-textarea">Large text area content</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Add Booking</button>
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