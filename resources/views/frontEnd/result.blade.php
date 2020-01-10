@extends('frontEnd.layouts.mainlayouts')
@section('title','Result')
@section('customcss')
<style type="text/css">
   .box {
    padding: 40px;
    margin-bottom: 40px;
    box-shadow: 10px 10px 15px rgba(73, 78, 92, 0.1);
    background: #fff;
    transition: 0.4s;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #69406a;
    border-color: #69406a;
}
 </style>
@endsection
@section('content-wrapper')
<!-- </section> -->
<section>
   <div class="banner">
    </div>
  </section>
  <!-- #intro -->

  <main id="main">

    <!--==========================
      Welcome Section
    ============================-->
    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title-heading1 text-center mb-4"><b>Result</b></h2>
            </div>
          </div>
        </div>
      </section>
    <!--==========================
      end welcome Section
    ============================-->

     <!--==========================
      content Section
    ============================-->
    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="quick  main-box">
                <h4 class="title-heading1 text-center">Quick Links</h4><hr>
                <ul class="quick-link-ul list p-0">
                  <li class="quick-link-li p-2"><a href="president_message"  class="a1">Message from President</a></li>
                  <li class="quick-link-li p-2"><a href="principal_message"  class="a1">Message from Principal</a></li>
                  <li class="quick-link-li p-2"><a href="#">Papers and Publications</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1jePDdXI1pQOs_4QashMsJ3QNhpJS5Gpy" target="_blank"  class="a1">College Council</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=18uQnLZj992LFiLlutMELbxYcFRqkGogj" target="_blank"  class="a1">Internal Assessment Grievances Committee</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1-mlngZWTGolmyHWKVBGFUVzJ-CdKfvZL" target="_blank"  class="a1">Women's Complaints Committee</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1kE4_k-qX8PR_dTqPyOywVk8lpOJN3ai_" target="_blank"  class="a1">Anti Ragging Committee</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=11YfA33fQ5pnpstcjFQWOeXEdZzLCanb_" target="_blank"  class="a1">Collaboration with NGOs</a></li>

                </ul>
              </div>

              <div class="quick mt-5 main-box">
                <h4 class="title-heading1 text-center">Official Government Sites</h4><hr>
                <ul class="quick-link-ul list p-0">
                  <li class="quick-link-li p-2"><a href="http://ayush.gov.in/" target="_blank"  class="a1">AYUSH Department, New Delhi</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.ccimindia.org/" target="_blank"  class="a1">Central Council of Indian Medicine</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.muhs.ac.in/" target="_blank"  class="a1">MUHS, Department of AYUSH</a></li>
                  <li class="quick-link-li p-2"><a href="http://mahayush.gov.in/" target="_blank"  class="a1">Directorate of Ayurveda</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.sssamiti.org/" target="_blank"  class="a1">Fees Regulating Authority or Shikshan Shulka Samiti</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.pnsamiti.com/" target="_blank"  class="a1">Admissions Regulating Authority or Pravesh Niyantran Samiti</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.dmer.org/" target="_blank"  class="a1">Directorate of Medical Education & Reasearch</a></li>
                </ul>
              </div>
            </div>
            <!--col-md-3 closed -->
            <div class="col-md-9 main-box">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                   <h4 class="title-heading1 text-center">Result</h4>
                  <table class="table table-borderless">
                    <tbody>
                        @if (count($results)>0)
                        <tr>
                            @foreach ($results as $result)
                                <td><h5 class="text-center"><b>{{ $result->title }}</b></h5></td>
                                <td><a href="{{ asset('storage/' . $result->file) }}" target="_blank">Click Here</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td><h5 class="text-center"><b>No entry yet!</b></h5></td>
                            </tr>
                        @endif
                     {{--  <tr>
                        <td><h5 class="text-center"><b>SUMMER 2019</b></h5></td>
                        <td><a href="https://drive.google.com/file/d/1fCrhqd5zYsLOntx40D8yLvWP06pyO7LQ/view" target="_blank">Click Here</a></td>
                      </tr>
                      <tr>
                        <td><h5 class="text-center"><b>WINTER 2018</b></h5></td>
                        <td><a href="https://drive.google.com/file/d/1NEmCOdAFAo-kkHs3SzAzuXIWvCHwgm-v/view" target="_blank">Click Here</a></td>
                      </tr>
                      <tr>
                        <td><h5 class="text-center"><b>SUMMER 2018</b></h5></td>
                        <td><a href="https://drive.google.com/file/d/1KA1ugow_TT_QLaOq3TzIboGW8kysGxrg/view" target="_blank">Click Here</a>
                        </td>
                      </tr>
                      <tr>
                        <td><h5 class="text-center"><b>WINTER 2017</b></h5></td>
                        <td>
                          <a href="https://drive.google.com/file/d/16j2hWg6_3SkU6RWKscadIMOIbAYzC2UO/view" target="_blank">Click Here</a></td>
                        </tr>
                        <tr>
                          <td><h5 class="text-center"><b>SUMMER 2017</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/1nugv-PpqUciCwgtPcuFRxbmiIujNbx5t/view" target="_blank">Click Here</a></td>
                        </tr>
                        <tr>
                          <td><h5 class="text-center"><b>WINTER 2016</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/1g1mSwub8usXlYTsp3Jkc6SNvTPg5FkYr/view" target="_blank">Click Here</a></td>
                        </tr>
                        <tr>
                          <td><h5 class="text-center"><b>SUMMER 2016</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/16Yht46k6NBafYKteHj2oLi25Wyv3OgB3/view" target="_blank">Click Here</a></td>
                        </tr>
                        <tr>
                          <td><h5 class="text-center"><b>WINTER 2015</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/18pS7IsBsb3EGQHIZv536hp9AtqVOpz31/view" target="_blank">Click Here</a></td>
                        </tr>
                         <tr>
                          <td><h5 class="text-center"><b>SUMMER 2015</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/1n_c6jYD1F3cs3kU-vLvhShUJLFj4Vo4w/view" target="_blank">Click Here</a></td>
                        </tr>
                         <tr>
                          <td> <h5 class="text-center"><b>WINTER 2014</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/1Mqp2DxzgfKo6eXVXR1N3EQayIEKA2mWR/view" target="_blank">Click Here</a></td>
                        </tr>
                         <tr>
                          <td><h5 class="text-center"><b>SUMMER 2014</b></h5></td>
                          <td><a href="https://drive.google.com/file/d/1vQpAOXGRa02jEbLkBhXo-zEupw8MpZVL/view" target="_blank">Click Here</a></td>
                        </tr>--}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <!--==========================
      end content Section
    ============================-->



  </main>
  @endsection
@section('customjs')
@endsection
