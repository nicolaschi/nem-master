@include('admin.aheader')


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
                                        <div class="card-inner">

                                        @if (Session()->has('success'))

<div class="valid-feedback" role="alert">
    <strong>{{ Session::get('success') }}</strong>
</div>

@endif
                                            <div class="row gy-4">
                                                <div class="col-md-6">


            <div class="form-group">
                 <form method="POST" action="{{ route('save_category') }}" enctype="multipart/form-data">
                        
                     @csrf
                                                    
                <label class="form-label" for="first-name">Category Name</label>
                   <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="category-name" value="{{ old('name') }}" required>
                                   
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                                    </div>
                                                </div>
                                                <!--col-->

             <div class="col-md-6">
                          
                <label class="form-label" for="fee">Category Fee</label>
                   <input type="number" class="form-control  @error('fee') is-invalid @enderror" name="fee" id="category-name" value="{{ old('fee') }}" required>
                                   
                                    @error('fee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                                    </div>
                                               
                                                <!--col-->
      
      
                                                <div class="col-sm-12 ">
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-primary col-md-12">Add category</button>
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