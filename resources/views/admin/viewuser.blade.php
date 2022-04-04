
@include('admin.aheader')

<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"><strong class="text-primary small"></strong></h3>
                                            <div class="nk-block-des text-soft">
                                               
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="{{ url ('/manufacturers')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="{{ url ('/manufacturers')}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="invoice">
                                        
                                        <div class="invoice-wrap">
                                            
                                            <div class="invoice-head">
                                                <div class="invoice-contact">
                                                    <span class="overline-title"></span>
                                                    <div class="invoice-contact-info">
                                                        <h4 class="title"></h4>
                                                        
                                                    </div>
                                                </div>
                                                <div class="invoice-desc">
                                                    <h3 class="title">     {!! QrCode::size(100)->generate("{{$data->unique_id}}"); !!}
 </h3>
                                                    <ul class="list-plain">
                                                        <li class="invoice-id"><span>{{$data->unique_id}}</span></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .invoice-head -->
                                            <div class="invoice-bills">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                       
                                                        <tbody>
                                                            <tr>
                                                                <td>Company Name</td>
                                                                <td>{{$data->name}}</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Company Address</td>
                                                                <td>{{$data->address}}</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>State</td>
                                                                <td>{{$data->state}}</td>    
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>{{$data->email}}</td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <td>CAC</td>
                                                                <td>{{$data->cac}}</td>    
                                                            </tr>

                                                            <tr>
                                                                <td>Cert. No</td>
                                                                <td>{{$data->cert}}</td>    
                                                            </tr>
                                                            <tr>
                                                                <td>Contact Person Name</td>
                                                                <td>{{$data->contact_person}}</td>    
                                                            </tr>
                                                            <tr>
                                                                <td>Contact Phone</td>
                                                                <td>{{$data->contact_phone}}</td>    
                                                            </tr>
                                                            <tr>
                                                                <td>Contact Email</td>
                                                                <td>{{$data->contact_email}}</td>    
                                                            </tr>
                                                        
                                                        </tbody>
                                                        
                                                    </table>
                                                    
                                                </div>
                                            </div><!-- .invoice-bills -->
                                        </div><!-- .invoice-wrap -->
                                    </div><!-- .invoice -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@include('admin.afooter')