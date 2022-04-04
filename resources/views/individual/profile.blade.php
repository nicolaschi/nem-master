@include('individual.header')


                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Update Company Details</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        
                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                           {{ session()->get('message') }}
                                        </div>
                                     @endif
                                        <div class="card-inner">
                                            <div class="row gy-4">

                                             

                                                <div class="col-md-6 col-lg-4 col-xxl-3">

                                                  

                <div class="form-group">
                 <form method="POST" action="{{ route('update_profile') }}" enctype="multipart/form-data">
                        
                     @csrf
                                            
                           
                                <label class="form-label" for="first-name">Company Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="first-name" value="{{ old('name') ?? auth()->user()->name }}" required>

                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                    </div>
                                                </div>
                                                <!--col-->


                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Company Address</label>
                                        <input type="text" class="form-control  @error('address') is-invalid @enderror" name="address" id="last-name" value="{{ old('address') ?? auth()->user()->address }}">
                                       
                                        @error('address')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>
                                                <!--col-->

                        <div class="col-md-6 col-lg-4 col-xxl-3">
                             <div class="form-group">
                            <label class="form-label" for="last-name">CAC Number</label>
                    <input type="text" class="form-control  @error('cac') is-invalid @enderror" name="cac" id="last-name" value="{{ old('cac') ?? auth()->user()->cac }}">
                                       
                                        @error('cac')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>
                                                <!--col-->
       
                                            

                                                 <!--col-->
                                                 <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">CAC Scan Upload (Max 5MB)</label>
                                                        <div class="form-control-wrap  @error('image') is-invalid @enderror">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input" name="image" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>

                                                                @error('image')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <!-- <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="title">Title</label>
                                                        <input type="text" name="title" class="form-control" id="title" value="{{ old('name') ?? auth()->user()->title }}">
                                                    </div>
                                                </div> -->

                                                <!--col-->
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Contact Person Name</label>
                                                        <input type="text" name="contact_person" class="form-control  @error('contact_person') is-invalid @enderror" id="address" value="{{ old('contact_person') ?? auth()->user()->contact_person }}">

                                                        @error('contact_person')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Contact Person Phone No</label>
                                                        <input type="text" name="contact_phone" class="form-control @error('image') is-invalid @enderror" id="address" value="{{ old('contact_phone') ?? auth()->user()->contact_phone }}">

                                                        @error('contact_phone')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Contact Person Email</label>
                                                        <input type="email" name="contact_email" class="form-control @error('image') is-invalid @enderror" id="email" value="{{ old('contact_email') ?? auth()->user()->contact_email }}">

                                                        @error('contact_email')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>
     
                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">No. permanent Manpower *</label>
                                                        <div class="form-control-wrap @error('manpower') is-invalid @enderror">
                                                            <select name="manpower" class="form-select" data-placeholder="Select multiple options">
                                                                <option value="1-5">1 - 5</option>
                                                                <option value="6-10">6 - 10</option>
                                                                <option value="11-20">11- 20</option>
                                                                <option value=">20">  >20 </option>
                                                            </select>

                                                            @error('manpower')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                               

                                               
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-primary col-md-12">Update Profile</button>
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
@include('individual.footer')