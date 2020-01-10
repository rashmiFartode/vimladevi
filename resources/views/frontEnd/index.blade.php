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
                        <h4 class="title-heading1 text-center">Quick Links</h4>
                        <ul class="quick-link-ul list p-0 mb-0">
                            @if (count($quicklinks)>0)
                                @foreach ($quicklinks as $quicklink)
                                    <li class="quick-link-li p-2"><a href="{{ $quicklink->link }}" class="a1">{{ $quicklink->name }}</a></li>
                                @endforeach
                            @else
                                 <h4 class="m-5 text-info">No entry yet!</h4>
                            @endif
                        </ul>
                    </div>
                    <div class="quick mt-5 main-box">
                        <h4 class="title-heading1 text-center">Official Government Sites</h4>
                        <ul class="quick-link-ul list p-0 mb-0" >
                            @if (count($governmentSites))
                            @foreach ($governmentSites as $governmentSite)
                                <li class="quick-link-li p-2"><a href="{{ $governmentSite->link }}" target="_blank" class="a1">{{ $governmentSite->name }}</a></li>
                            @endforeach

                            @else
                                <h4 class="m-5 text-info">No entry yet!</h4>
                            @endif

                        </ul>
                    </div>

                    <div class="quick mt-5 main-box">
                        <h4 class="title-heading1 text-center">Awards</h4>
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
                    {{-- <div class="awards mt-5">
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
                    </div> --}}
                    <!-- End activity  -->
                </div>
                <!--col-md-6 closed -->
                <div class="col-md-3">
                    <div class="impLinks mt-5 main-box">
                        <h4 class="title-heading1 text-center">Important Links</h4>
                        @if (count($notifications)>0)
                        <marquee class="p-2" height="170" direction="up" scrollamount="1" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
                            <ul style="padding: 0px;margin-bottom:0">
                                @foreach ($notifications as $notification)
                                <li class="text-left"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black"><a target="_blank" href="{{ 'storage/'.$notification->notification_file }}" style="color:black;">{{ $notification->title }}</a></span></li>
                                @endforeach
                            </ul>
                        </marquee>
                        @else
                            <h4 class="m-5 text-info">No entry yet!</h4>
                        @endif
                    </div><!-- End important links -->

                    <div class="news mt-5 main-box">
                        <h4 class="title-heading1 text-center">News</h4>
                        <marquee class="p-2" height="170" direction="up" scrollamount="1" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
                            <ul style="padding: 0px; margin-bottom:0">
                                @if (count($news)>0)
                                @foreach ($news as $n)
                                    <li class="text-left">
                                        <img src="{{ asset('frontAssets/images/new5.gif') }}" >
                                        <span style="color:black">
                                        <a target="_blank" href="{{ route('news', $n->id ) }}" style="color:black;">{{ $n->title }}</a>
                                        </span>
                                    </li>
                                @endforeach

                                @else
                                    <h4 class="m-5 text-info">No entry yet!</h4>
                                @endif
                            </ul>
                        </marquee>
                    </div>
                    <!-- End News -->

                    <div class="activity mt-5 main-box">
                        <h4 class="title-heading1 text-center">Recent Activity</h4>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                 @php
                                    $counter = 0;
                                @endphp
                                @foreach ($activities as $activity)
                                 <li data-target="#carouselExampleIndicators" data-slide-to="0"   @if( $counter == 0 ) {{ "class= active " }}  @endif ></li>
                                 @php
                                    $counter = $counter + 1;
                                @endphp
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @php
                                    $counter = 0;
                                @endphp

                                @if (count($activities)>0)
                                    @foreach ($activities as $activity)
                                    <div class="carousel-item  @if( $counter == 0 ) {{ "active" }}  @endif">
                                        <div class="card">
                                            <img src="{{ asset('storage/' . $activity->file) }}" class="d-block w-100 card-img-top" alt="library">
                                            <div class="card-body">
                                            <h5 class="text-center">{{ $activity->title }}</h5>
                                            <p>{{ $activity->description }}</p>
                                            <a href="{{ route('recent_activity', $activity->id)}}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $counter = $counter + 1;
                                    @endphp
                                    @endforeach
                                @else
                                    <div class="corousel-item">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="text-center text-info">No entry yet!</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
