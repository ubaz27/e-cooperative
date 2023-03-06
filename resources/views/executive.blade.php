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
            <h3>Management Committee of NASCS NICS</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/President.png') }}" alt="John" style="width:100%">
                        <h1>Mohammed Kabir</h1>
                        <p class="title">President</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/VP.png') }}" alt="John" style="width:100%">
                        <h1>Adamu Mohammed Aliyu</h1>
                        <p class="title">Vice President</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                      
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/Sec Gen.png') }}" alt="John" style="width:100%">
                        <h1>Almustapha Sulaiman</h1>
                        <p class="title">Secretary General</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/Fin Sec.png') }}" alt="John" style="width:100%">
                        <h1>Aisha Idris Goji</h1>
                        <p class="title">Financial Secretary</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/Treasurer.png') }}" alt="John" style="width:100%">
                        <h1>Lawan Zubair Lawan</h1>
                        <p class="title">Tresurer</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/Internal Auditor.png') }}" alt="John" style="width:100%">
                        <h1>Falalu Usman Alto</h1>
                        <p class="title">Internal Auditor</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                      
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/Asst Sec Gen.png') }}" alt="John" style="width:100%">
                        <h1>Alhassan Idris</h1>
                        <p class="title">Assistant Secretary General</p>
                        {{-- <p>Harvard University</p> --}}
                        
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="{{ asset('dist/images/PRO.png') }}" alt="John" style="width:100%">
                        <h1>Ishaq Ismail Kumo</h1>
                        <p class="title"> Publicity Secretary.</p>
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
    