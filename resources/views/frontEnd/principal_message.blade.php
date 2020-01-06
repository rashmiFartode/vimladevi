@extends('frontEnd.layouts.mainlayouts')
@section('title','Principal Message')
@section('content-wrapper')
<!-- #intro -->

<main id="main">

<!--==========================
  About Section
============================-->
<section id="about" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 content">
        <h4 class="title-heading1 text-center">From Principal's Desk</h4><hr>
        <div class="float-left d-inline-block mr-3">
          <img src="{{ asset('frontAssets/img/vimladeviCollege/Dr.-Zanzad-234x300-portrait.jpg') }}" alt="principal"  class="img-fluid img-thumbnail">
          <p class="text-center"><b>Dr. Sonal Zanzad<br>Principal</b></p>
        </div>
        <p class="text-justify"><i class="fa fa-quote-left size"></i> &nbsp;It is an immense pleasure in forwarding the information of our institute on website. It is one of the best medical institute & changing as an established & proven leader in the field of medical education by maintaining high standard & values. The website has created a right atmosphere to learn, study & help the society to maintain positive health. The website will help the students to select their career & for the patient for correct remedy.</p>
        <p class="text-justify">The website gives detailed information of institute, various departments, extra curricular activities, hospital & of its facilities. Students aspiring for admission in the prestigious institute are most welcome..</p>
        <p class="text-justify">We also conduct various medical camps. We will continously update & revise this website in order to fit your present & future needs. Providing relevant & useful information to the society is our main objective. We plan to have pertinent about the various aspects of the Institute & the hospital to the public.&nbsp;<i class="fa fa-quote-right size"></i></p>

      </div>
      <div class="col-lg-4 about-img">
        
        <div class="content">
           <h4 class="title-heading1">Detail's of the Principal</h4><hr>
           <ul>
            <li><i class="ion-android-checkmark-circle"></i><b>DOB :</b>25/06/1963</li>
            <li><i class="ion-android-checkmark-circle"></i><b>UG :</b>BAMS, Nagpur (1985)</li>
            <li><i class="ion-android-checkmark-circle"></i><b>PG :</b>MD in Rasashastra Bhaisajya Kalpana, Nagpur (1990)</li>
            <li><i class="ion-android-checkmark-circle"></i><b>Regd No.  :</b>I-16988</li>
            <li><i class="ion-android-checkmark-circle"></i><b>Teaching Exp :</b>19 years</li>
            <li><i class="ion-android-checkmark-circle"></i><b>Date of Joining :</b>August 1,2011</li>
            <li><i class="ion-android-checkmark-circle"></i><b>Address :</b>C/o Abhay Lokhande, Behind Nehru High School Ghutkala, Chandrapur</li>
            <li><i class="ion-android-checkmark-circle"></i><b>Contact No. :</b>+91-9011255376</li>
            <li><i class="ion-android-checkmark-circle"></i><b>Email ID :</b>vimladeviayurved@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section><!-- #about -->



</main>
@endsection
@section('customjs')
@endsection