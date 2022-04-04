@include('manufacturer.mheader')


<div class="nk-content ">

                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add Productss</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row gy-4">
                                                <div class="col-md-6 col-lg-4 col-xxl-3">

                                                @if (Session()->has('success'))

                                                   <div class="valid-feedback" role="alert">
                                                       <strong>{{ Session::get('success') }}</strong>
                                                   </div>

                                                @endif
            
              <div class="form-group">
                 <form method="POST" action="{{ route('save_product') }}" enctype="multipart/form-data">
                        
                     @csrf
                                            
                           
                    <label class="form-label" for="name">Name</label>
                     <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required>

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
                       <label class="form-label">Category</label>
                       <div class="form-control-wrap @error('category') is-invalid @enderror">

             <select name="category_id" class="form-select" data-placeholder="Select multiple options">
           
                           @foreach ($data as $data)
                               <option value='{{$data->id}}'>{{$data->name}}</option>
                               @endforeach
                               
                           </select>

                                    @error('category')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!--col-->

                   
                                                 <!--col-->
                                                 <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Image (Max 5MB)</label>
                                                        <div class="form-control-wrap  @error('image') is-invalid @enderror">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input"  name="image" id="customFile">
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


                                                <!--col-->
                        <div class="col-md-12 col-lg-12 col-xxl-3">
                          <div class="form-group">
                             <label class="form-label" for="address">Serial No(s) </label>
                        
                        <textarea class="form-control no-resize @error('serial') is-invalid @enderror"  name="serial"id="default-textarea" value="{{ old('serial')}}"> </textarea>
                                                       
                                          @error('serial')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Model No.</label>
                                                        <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" id="address" value="{{ old('model') }}">

                                                        @error('model')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>

                    <div class="col-md-6 col-lg-4 col-xxl-3">
                     <div class="form-group">
                    <label class="form-label" for="address">Model Name</label>
                    <input type="text" name="model_name" class="form-control @error('model_name') is-invalid @enderror" id="address" value="{{ old('model_name') }}">

                                @error('model')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                                 @enderror
                                                    </div>
                                                </div>

                 <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="form-group">
                       <label class="form-label">Certification Request Type</label>
                       <div class="form-control-wrap @error('certification') is-invalid @enderror">
                          <select name="certification" class="form-select" data-placeholder="Select multiple options">
                               <option value="normal">Normal Certification</option>
                               <option value="provisional">Provisional Certification</option>
                             
                           </select>

                                    @error('certification')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                                        </div>
                                                    </div>
                                                </div>

                    <div class="col-md-12 col-lg-12 col-xxl-3">
                          <div class="form-group">
                             <label class="form-label" for="address">Description </label>
                        
                        <textarea class="form-control resize @error('description') is-invalid @enderror"  name="description"id="default-textarea" value="{{ old('description')}}"> </textarea>
                                                       
                                          @error('description')
                                             <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    </div>
                                                </div>                                  
                                               
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-primary col-md-12">Add Product</button>
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

@include('manufacturer.mfooter')
