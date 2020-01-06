@extends('frontEnd.layouts.mainlayouts')
@section('title','Index')
@section('content-wrapper')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="400" src="{{ asset('frontAssets/images/b1.jpeg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="400" src="{{ asset('frontAssets/images/b3.jpeg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="400" src="{{ asset('frontAssets/images/b2.jpeg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- </section> -->
<!-- #intro -->
<main id="main">
    <!--========================== Welcome Section ============================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-heading1 text-center mt-3"><b>Welcome</b></h2><hr>
                    <p class="text-center">Shri Gurukrupa Shikshan Prasarak Mandal established Smt. Vimladevi Ayurvedic Medical College and Hospital in 2010. The College offers BAMS - Bachelor of Ayurvedic Medicine & Surgery course, an undergraduate course, designed and controlled by Central Council of Indian Medicine, New Delhi [CCIM] and approved by AYUSH Department of Ministry of Health and Family Welfare. The College is affiliated to Maharashtra University of Health Sciences, Nashik and is recognized by State Govt. of Maharashtra.</p>
                </div>
            </div>
        </div>
    </section>
    <!--========================== end welcome Section ============================-->
    <!--========================== content Section ============================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="quick mt-5 main-box">
                        <h4 class="title-heading1 text-center">Quick Links</h4><hr>
                        <ul class="quick-link-ul list p-0">
                            <li class="quick-link-li p-2"><a href="president_message" class="a1">Message from President</a></li>
                            <li class="quick-link-li p-2"><a href="principal_message"  class="a1">Message from Principal</a></li>
                            <li class="quick-link-li p-2"><a href="#"  class="a1">Papers and Publications</a></li>
                            <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1jePDdXI1pQOs_4QashMsJ3QNhpJS5Gpy" target="_blank"  class="a1">College Council</a></li>
                            <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=18uQnLZj992LFiLlutMELbxYcFRqkGogj" target="_blank"  class="a1">Internal Assessment Grievances Committee</a></li>
                            <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1-mlngZWTGolmyHWKVBGFUVzJ-CdKfvZL" target="_blank"  class="a1">Women's Complaints Committee</a></li>
                            <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1kE4_k-qX8PR_dTqPyOywVk8lpOJN3ai_" target="_blank"  class="a1">Anti Ragging Committee</a></li>
                            <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=11YfA33fQ5pnpstcjFQWOeXEdZzLCanb_" target="_blank"  class="a1">Collaboration with NGOs</a></li>
                            <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                            <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                            <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                            <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                        </ul>
                    </div>
                    <div class="quick mt-5 main-box">
                        <h4 class="title-heading1 text-center">Official Government Sites</h4><hr>
                        <ul class="quick-link-ul list p-0" >
                            <li class="quick-link-li p-2"><a href="http://ayush.gov.in/" target="_blank" class="a1">AYUSH Department, New Delhi</a></li>
                            <li class="quick-link-li p-2"><a href="http://www.ccimindia.org/" target="_blank" class="a1">Central Council of Indian Medicine</a></li>
                            <li class="quick-link-li p-2"><a href="http://www.muhs.ac.in/" target="_blank" class="a1">MUHS, Department of AYUSH</a></li>
                            <li class="quick-link-li p-2"><a href="http://mahayush.gov.in/" target="_blank" class="a1">Directorate of Ayurveda</a></li>
                            <li class="quick-link-li p-2"><a href="http://www.sssamiti.org/" target="_blank" class="a1">Fees Regulating Authority or Shikshan Shulka Samiti</a></li>
                            <li class="quick-link-li p-2"><a href="http://www.pnsamiti.com/" target="_blank" class="a1">Admissions Regulating Authority or Pravesh Niyantran Samiti</a></li>
                            <li class="quick-link-li p-2"><a href="http://www.dmer.org/" target="_blank" class="a1">Directorate of Medical Education & Reasearch</a></li>
                        </ul>
                    </div>
                </div>
                <!--col-md-3 closed -->
                <div class="col-md-6 mt-5 main-box">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="title-heading1 text-center">Governing Bodies</h4><hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <a href="http://www.muhs.ac.in/" target="_blank"><img src="{{ asset('frontAssets/img/vimladeviCollege/MUHS.jpg') }}" alt="muhs logo">
                                <p class="text-center"><b>MUHS</b></p></a>
                            </div><!--container-fluid col-6 closed -->
                            <div class="col-md-4">
                            <a href="https://ccimindia.org" target="_blank"><img src="{{ asset('frontAssets/img/vimladeviCollege/CCIM.png') }}" alt="CCIM logo">
                                <p class="text-center"><b>CCIM</b></p></a>
                            </div>
                            <div class="col-md-4">
                                <a href="http://ayush.gov.in/" target="_blank"><img src="{{ asset('frontAssets/img/vimladeviCollege/Ayush_logo.jpg') }}" alt="AYUSH logo">
                                <p class="text-center"><b>AYUSH</b></p></a>
                            </div>
                        </div>
                        <!--container-fluid row closed -->
                        <div class="row text-center">
                            <div class="col-md-6">
                                <h4 class="title-heading1 text-center mt-5">From President's Desk</h4><hr>
                                <img src="{{ asset('frontAssets/img/vimladeviCollege/president.jpg') }}" alt="president" class="rounded-circle" style="width:70%;">
                                <p><b>Indersen Singh<br>Founder & President</b><p>
                                <p class="text-center">Quest for health has been a basic attempt of mankind through the ages. Several medical systems have been in the process of ensuring better health for the society.</p>
                                <a href="president_message" class="btn btn-outline-primary btn-sm">Read more</a>
                            </div>
                            <!--container-fluid col-6 closed -->
                            <div class="col-md-6">
                                <h4 class="title-heading1 text-center mt-5">From Principal's Desk</h4><hr>
                                <img src="{{ asset('frontAssets/img/vimladeviCollege/principal.jpg') }}" alt="principal"  class="rounded-circle" style="width:70%;">
                                <p><b>Sonal Zanzad<br>Principal</b></p>
                                <p class="text-center">It is an immense pleasure in forwarding the information of our institute on website. It is one of the best medical institute & changing as an established...</p>
                                <a href="principal_message" class="btn btn-outline-primary btn-sm">Read more</a>
                            </div>
                            <!--container-fluid col-6 closed -->
                        </div>
                        <!--container-fluid row closed -->
                    </div>
                    <!--container-fluid closed -->
                    <div class="awards mt-5">
                        <h4 class="title-heading1 text-center">Awards</h4><hr>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontAssets/img/vimladeviCollege/awards1.jpg') }}" class="d-block w-100" alt="..." width="100%" height="200px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontAssets/img/vimladeviCollege/awards2.jpg') }}" class="d-block w-100" alt="..." width="100%" height="200px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontAssets/img/vimladeviCollege/awards3.png') }}" class="d-block w-100" alt="..." width="100%" height="200px">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- End activity  -->
                </div>
                <!--col-md-6 closed -->
                <div class="col-md-3">
                    <div class="impLinks mt-5 main-box">
                        <h4 class="title-heading1 text-center">Important Links</h4><hr>
                        <marquee class="p-2" height="170" direction="up" scrollamount="1" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
                            <ul style="padding: 0px;">
                                <li class="text-left"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                        
                                <li class="text-left"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            </ul>
                        </marquee>
                    </div><!-- End important links -->
                    <div class="news mt-5 main-box">
                        <h4 class="title-heading1 text-center">News</h4><hr>
                        <marquee class="p-2" height="170" direction="up" scrollamount="1" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
                            <ul style="padding: 0px;">
                                <li class="text-left"><img src="{{ asset('frontAssets/img/new.gif') }}" width="50px" height="50px">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><img src="{{ asset('frontAssets/img/new.gif') }}" width="50px" height="50px">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><img src="{{ asset('frontAssets/img/new.gif') }}" width="50px" height="50px">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><img src="{{ asset('frontAssets/img/new.gif') }}" width="50px" height="50px">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            
                                <li class="text-left"><img src="{{ asset('frontAssets/img/new.gif') }}" width="50px" height="50px">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="#" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></span></li>
                            </ul>
                        </marquee>
                    </div>
                    <!-- End News -->
                    <div class="activity mt-5 main-box">
                        <h4 class="title-heading1 text-center">Recent Activity</h4><hr>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card">
                                        <img src="{{ asset('frontAssets/img/vimladeviCollege/yogaday.png') }}" class="d-block w-100 card-img-top" alt="library">
                                        <div class="card-body">
                                        <h5 class="text-center">International Yoga Day</h5>
                                        <p>On the occasion of third International Day of Yoga, Smt. Vimladevi Ayurvedic Medical College & Hospital in collaboration with.......</p>
                                        <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <img src="{{ asset('frontAssets/img/vimladeviCollege/awards3.jpg') }}" class="d-block w-100 card-img-top" alt="library">
                                        <div class="card-body">
                                            <h5 class="text-center">Lorem ipsum Library</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Awards -->
                    <div class="visitor mt-5 main-box">
                        <h4 class="title-heading1 text-center">Visitor Count</h4><hr>
                        <p class="text-center">000</p>
                    </div>
                    <!-- End News -->
                </div>
                <!--col-md-3 closed -->
            </div>
            <!--row closed -->
        </div>
        <!--container closed -->
    </section>
    <!--========================== end content Section ============================-->
</main>
@endsection
@section('customjs')
@endsection