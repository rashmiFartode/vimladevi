@extends('frontEnd.layouts.mainlayouts')
@section('title','President Message')
@section('content-wrapper')
<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 content">
            <h4 class="title-heading1 text-center">From President's Desk</h4><hr>
            <div class="float-left d-inline-block mr-3">
              <img src="{{ asset('frontAssets/img/vimladeviCollege/president.jpg') }}" alt="principal"  class="img-fluid img-thumbnail">
              <p class="text-center"><b>Indersen Singh<br>Founder & President</b><p>
            </div>
            <p class="text-justify"><i class="fa fa-quote-left size"></i> &nbsp;Quest for health has been a basic attempt of mankind through the ages. Several medical systems have been in the process of ensuring better health for the society. Ayurveda stands apart from all the other systems owing to its unique holistic approach.</p>
            <p class="text-justify">Ayurveda speaks of preventive as well as curative medicines in the same volume. There has been general awareness among the people about this science leading people to Ayurveda. This calls for a much greater responsibility of academic institutions and practitioners catering to the increased demands from the society.</p>
            <p class="text-justify">Ayurveda speaks of preventive as well as curative medicines in the same volume. There has been general awareness among the people about this science leading people to Ayurveda. This calls for a much greater responsibility of academic institutions and practitioners catering to the increased demands from the society.</p>
            <p class="text-justify">In our institution, we are propelled by a continous urge to improve in all aspects and contribute better Ayurveda doctors to the society. The results of our effort further motivates us to contribute the best to the society. I take this opportunity to appeal to the youngsters to take up this as a career opportunity to learn, practice and propogate the science with greater enthusiasm and interest.&nbsp;<i class="fa fa-quote-right size"></i></p>

          </div>
        </div>

      </div>
    </section><!-- #about -->

   

  </main>
  @endsection
@section('customjs')
@endsection