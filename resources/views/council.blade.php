@include('includes.header');
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          max-width: 300px;
          margin: auto;
          text-align: center;
          font-family: arial;
        }
        
        .title {
          color: grey;
          font-size: 18px;
        }
        
        button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
        }
        
        a {
          text-decoration: none;
          font-size: 22px;
          color: black;
        }

        h1{
          font-size: 20px;
        }
        
        button:hover, a:hover {
          opacity: 0.7;
        }
        </style> 
    <div class="notika-email-post-area">
        <div class="container">
            <h3>Members of Advisory Council AC (Shurah)</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/AC Chairman.png') }}" alt="John" style="width:100%">
                        <h1>Ahmed Binta Bala</h1>
                        <p class="title">AC Chairman </p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/Sec QC.png') }}" alt="John" style="width:100%">
                        <h1>Nasiru Haruna Aliyu.</h1>
                        <p class="title">Secretary QC</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                      
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/AC Member 1.png') }}" alt="John" style="width:100%">
                        <h1>Mohammed Kabir</h1>
                        <p class="title">AC Member</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/AC Member 2.png') }}" alt="John" style="width:100%">
                        <h1>Is Allah, Ribadu</h1>
                        <p class="title">AC Member</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/AC Member 3.png') }}" alt="John" style="width:100%">
                        <h1>Rufa'i, Abubakar Rufa'i</h1>
                        <p class="title">AC Member</p>
                        {{-- <p>Harvard University</p> --}}
                        
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
    