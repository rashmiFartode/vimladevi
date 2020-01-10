@extends('frontEnd.layouts.mainlayouts')
@section('title','News')
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
              <h2 class="title-heading1 text-center mb-4"><b>News</b></h2>
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
                <h4 class="title-heading1 text-center">Quick Links</h4>
                <ul class="quick-link-ul list p-0 mb-0">
                  <li class="quick-link-li p-2"><a href="president_message" class="a1">Message from President</a></li>
                  <li class="quick-link-li p-2"><a href="principal_message"  class="a1">Message from Principal</a></li>
                  <li class="quick-link-li p-2"><a href="#"  class="a1">Papers and Publications</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1jePDdXI1pQOs_4QashMsJ3QNhpJS5Gpy" target="_blank"  class="a1">College Council</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=18uQnLZj992LFiLlutMELbxYcFRqkGogj" target="_blank"  class="a1">Internal Assessment Grievances Committee</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1-mlngZWTGolmyHWKVBGFUVzJ-CdKfvZL" target="_blank"  class="a1">Women's Complaints Committee</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1kE4_k-qX8PR_dTqPyOywVk8lpOJN3ai_" target="_blank"  class="a1">Anti Ragging Committee</a></li>
                  <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=11YfA33fQ5pnpstcjFQWOeXEdZzLCanb_" target="_blank"  class="a1">Collaboration with NGOs</a></li>

                </ul>
              </div>

              <div class="quick mt-5 main-box">
                <h4 class="title-heading1 text-center">Official Government Sites</h4>
                <ul class="quick-link-ul list p-0 mb-0">
                  <li class="quick-link-li p-2"><a href="http://ayush.gov.in/" target="_blank"  class="a1">AYUSH Department, New Delhi</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.ccimindia.org/" target="_blank"  class="a1">Central Council of Indian Medicine</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.muhs.ac.in/" target="_blank"  class="a1">MUHS, Department of AYUSH</a></li>
                  <li class="quick-link-li p-2"><a href="http://mahayush.gov.in/" target="_blank"  class="a1">Directorate of Ayurveda</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.sssamiti.org/" target="_blank"  class="a1">Fees Regulating Authority or Shikshan Shulka Samiti</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.pnsamiti.com/" target="_blank"  class="a1">Admissions Regulating Authority or Pravesh Niyantran Samiti</a></li>
                  <li class="quick-link-li p-2"><a href="http://www.dmer.org/" target="_blank"  class="a1">Directorate of Medical Education & Reasearch</a></li>
                </ul>
              </div>
            </div><!--col-md-3 closed -->
            <div class="col-md-9 d-flex">
              <div class="row" >
                <div class="col-md-12">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-agro" role="tabpanel" aria-labelledby="list-agro-list">
                      <div class="row ">
                        <div class="col-md-12 main-box">
                            <?php
                                $string = $news->news_file;
                                $stringexplode = explode(".", $string);
                                $last = end($stringexplode);
                             if($last == "png"|| $last == "gif"|| $last == "jpg"||$last == "jpeg"){
                            ?>
                                <img src='{{ asset('storage/'.$news->news_file) }}' class='img-fluid' style='height: 300px; width:100%'>
                                <h4 class="title-heading1 text-center">{{ $news->title }}</h4>
                                <p>{{ $news->description }}</p>
                            <?php } else{
                               ?>
                                <h4 class="title-heading1 text-center">{{ $news->title }}</h4>
                                <p>{{ $news->description }}</p>
                                <a href='{{ asset('storage/'.$news->news_file) }}' class='color-primary'>click here</a>
                            <?php  }?>
                         </div>
                      </div>
                    </div>
                  </div>
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
