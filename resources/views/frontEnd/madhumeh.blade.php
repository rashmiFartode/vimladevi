@extends('frontEnd.layouts.mainlayouts')
@section('title','Rashtriy Madhumeh')
@section('customcss')
<link href="{{ asset('frontAssets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<style>
.gallery-block.grid-gallery a:hover{
  opacity: 0.8;
}

.gallery-block.grid-gallery .item img{
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
  transition: 0.4s;
  width: 100%;
  height:170px;
}

.gallery-block.grid-gallery .item{
  margin-bottom: 20px;
}


@media (min-width: 576px) {

  .gallery-block.grid-gallery .scale-on-hover:hover{
    transform: scale(1.05);
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
  }
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
    <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title-heading1 text-center"><b>Gallery</b></h2>
        </div>
      </div>
    </div>
  </section>
     <!--==========================
      content Section
    ============================-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="quick main-box">
                <h4 class="title-heading1 text-center">Quick Links</h4><hr>
                <ul class="quick-link-ul list p-0">
                  <li class="quick-link-li p-2"><a href="president_message"  class="a1">Message from President</a></li>
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
             <div class="col-md-9  main-box gallery-block grid-gallery">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                 <h4 class="title-heading1 text-center">Rashtriy Madhumeh</h4><hr>
                 </div>
                    @foreach ($madhumeh as $item)
                        <div class="col-md-4 col-lg-4 item">
                            <a class="lightbox" href="{{ asset('storage/'.$item->file) }}">
                                <img class="img-fluid image scale-on-hover" src="{{ asset('storage/'.$item->file) }}">
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/1.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/1.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/2.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/2.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/3.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/3.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/4.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/4.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/5.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/5.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/6.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/6.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/5.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/5.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/6.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/6.jpg') }}">
                        </a>
                    </div>
                     <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/7.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/7.jpg') }}">
                        </a>
                    </div>
                     <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/8.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/8.jpg') }}">
                        </a>
                    </div>
                     <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/9.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/9.jpg') }}">
                        </a>
                    </div>
                     <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/10.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/10.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/11.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/11.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/12.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/12.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/13.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/13.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/14.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/14.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/15.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/15.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/16.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/16.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/17.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/17.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/18.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/18.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/19.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/19.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('frontAssets/images/madhumeh/20.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('frontAssets/images/madhumeh/20.jpg') }}">
                        </a>
                    </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </main>
  @endsection
@section('customjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
</script>
@endsection
