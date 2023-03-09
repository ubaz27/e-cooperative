@include('includes.header');
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <style>
        span{
            color:red;
            font-size: 10px;
        }
    </style>
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        {{-- <div class="email-ctn-round"> --}}

                            {{-- to display error from contactController sendMessage Method --}}
                            @if ($errors->any())
                            <div class="alert alert-danger pb-0 pl-0" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                
                           <h4>Contact Us</h4>
                           {{-- this is working  --}}
                          
                            <form action="{{ url('sendMessage') }}" method="POST" name="sendMessage">
                                @csrf
                                <div class="form-group">
                                    <label for="">Full Name <span>(Required)</span></label>
                                    <input type="text" class="form-control" name='fullname'>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name='email'>
                                </div>
                                <div class="form-group">
                                    <label for="">Enquiry <span>(Required)</span></label>
                                    <textarea name="enquiry" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    
                                <input type="submit" name="submit" value="Submit" class="">
                                </div>
                            </form>
                       
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <h4>Contact Us</h4>
                        @foreach ($data as $obj )
                         <b><i>Contact Email:</i></b>   {{$obj->email}}
                         <br>
                         <b><i>Contact Phone:</i></b>   {{$obj->phone}}
                         <br>
                         <b><i>Contact Address:</i></b>   {{$obj->address}}
                        @endforeach
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@include('includes.footer')
    <!-- End Email Statistic area-->
    <!-- Start Realtime sts area-->
 
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    