@extends('frontEnd.layouts.mainlayouts')
@section('title','Staff')
@section('customcss')
<style type="text/css">
   .overflow-table{
    height: 774px;
    overflow: auto;
  }
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
.card {
    position: relative;
   
    display: flex;
   
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    box-shadow: 0px 1px 3px rgba(101, 67,102,1);
   /* height: 260px;*/
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
              <h2 class="title-heading1 text-center mb-4"><b>Staff</b></h2>
             
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
            </div><!--col-md-3 closed -->
            <div class="col-md-9">
              <div class="row" >
                <div class="col-md-12">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-agro" role="tabpanel" aria-labelledby="list-agro-list">
                      <div class="row ">
                        <div class="col-md-12 main-box">
                        <h4 class="title-heading1 text-center">Teaching Staff</h4><hr>
                        <div class="row overflow-table">
                        <div class="col-md-6"> 
                          <div class="card">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/3.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div>
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                                <!-- <p class="card-text"> -->
                                  <ul class="list-none">
                                    <li><b>Name:</b></li>
                                    <li>Raju Tatewar</li> 
                                            
                               <!--  DOB: 05/03/1968<br> -->
                               <!--  UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Samhita Siddhant)<br> -->
                               <li> <b>Designation:</b> Reader</li>
                                <li><b>Department:</b> Ayurved Samhita & Siddhant</li>
                              </ul>
                              </div>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/4.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                               <ul class="list-none">
                                  <li><b>Name:</b></li>
                                  <li>Pranita Bhakare</li>
                                               
                             <!--    DOB: 19/12/1976<br> -->
                              <!--   UG Qualification: BA (Sanskrit)<br>
                                PG Qualificaton: MA (Sanskrit)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer (Sanskrit)</li>
                                <li><b>Department:</b></li>
                                 <li>Ayurved Samhita & Siddhant</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/5.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                                <ul class="list-none">
                                <li><b>Name:</b></li>
                                  <li>Anju Thaware</li>
                                            
                               <!--  DOB: 16/06/1986<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Samhita)<br> -->
                               <li><b>Designation:</b></li>
                               <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Ayurved Samhita & Siddhant</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/1.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <h5 class="card-title"></h5>
                                <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Jayshri Damke</li>
                                            
                                <!-- DOB:07/02/1984<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Ayurved Samhita)<br> -->
                                <li><b>Designation:</b></li>
                                <li>Lecture</li>
                                <li><b>Department:</b></li>
                                 <li>Ayurved Samhita & Siddhant</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/6.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                               <ul class="list-none">
                               <b>Name:</b>
                               <li>Swati Kulkarni</li>
                                            
                               <!--  DOB: 15/01/1976<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Rachana Sharir)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                 <li>Rachana Sharir</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/7.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <ul class="list-none">
                                <li><b>Name:</b></li>
                                  <li>Vineet Bharne</li>
                                              
                               <!--  DOB: 06/06/1985<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Rachana Sharir)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Lecturer</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/8.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <ul class="list-none">
                                  <li><b>Name:</b></li>
                                  <li>Ashish Agarwal</li>             
                                <!-- DOB: 05/06/1976<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Kriya Sharir)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                 <li>Kriya Sharir</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/12.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                               <ul class="list-none">
                                <li><b>Name:</b></li>
                                  <li>Prashant Chandekar</li>
                                             
                               <!--  DOB: 16/08/1983<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton: MD (Kriya Sharir)<br> -->
                                <li><b>Designation:</b></li>
                                <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                 <li>Kriya Sharir</li>
                               </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/13.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Prerana Uikey</li>
                                 <!-- DOB: 23/12/1982<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Swasthavritta & Yoga</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/9.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Jyoti Varthi</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Swasthavritta & Yoga</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/10.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Gunja Dahikar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Rasa Shashtra & Bhaisajya Kalpana</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/11.jpg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Kushal Dahule</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Rasa Shashtra & Bhaisajya Kalpana</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/11.png') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Sandip Kamble</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Dravyaguna Vigyana</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/14.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Vinodkumar Ganure</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Dravyaguna</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/15.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Sanjay Kosankar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Rog Nidan & Vikriti Vigyan</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/16.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Sneha Wakade</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Rog Nidan & Vikriti Vigyan</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/17.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Ramesh Waghaye</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Professor</li>
                                <li><b>Department:</b></li>
                                <li>Agad Tantra & Vidhi Vaidyaka</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/18.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Yogesh Dahegaonkar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Agad Tantra & Vidhi Vaidyaka</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/19.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Akhilesh Deshmukh</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Agad Tantra & Vidhi Vaidyaka</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/20.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Dipali Sabale</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Prasuti & Stri Roga</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/21.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Namrata Nandankar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Prasuti & Stri Roga</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/22.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Priti Shende</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Prasuti & Stri Roga</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/23.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Nitin Biswas</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Shalyatantra +(Ksharsutra Lab.)</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/24.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Pranali Manthanwar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Shalyatantra +(Ksharsutra Lab.)</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/25.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Lalaji Watti</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Shalakya Tantra</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/26.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Prashant Nagpure</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Shalakya Tantra</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/27.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Sanjay Zanzad</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Professor</li>
                                <li><b>Department:</b></li>
                                <li>Kayachikitsa</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/28.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Nandali Zade</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Kayachikitsa</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/29.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Shital Kolpyakwar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Kayachikitsa<</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/30.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Sandesh Goje</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Kayachikitsa</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/31.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Arvind Talaha</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Panchkarma</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/32.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Pramod Gongale</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Panchkarma</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/33.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Susmita Borkar</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Panchkarma</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/34.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Nitin Bansode</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Reader</li>
                                <li><b>Department:</b></li>
                                <li>Kaumarbhritya - Bala Rog</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/35.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li> Nilesh Dhumne</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Kaumarbhritya - Bala Rog</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="col-md-6"> 
                          <div class="card mb-3">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="{{ asset('frontAssets/images/staff/36.jpeg') }}" class="card-img img-thumbnail m-3" alt="Teachers">
                              
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                              <ul class="list-none">
                                <li><b>Name:</b></li>
                                 <li>Jyotitai Vasant Zodes</li>
                                <!-- br>  DOB: 15/11/1987<br>
                                UG Qualification: BAMS<br>
                                PG Qualificaton:  MD (Swasthavritta)<br> -->
                                <li><b>Designation:</b></li>
                                 <li>Lecturer</li>
                                <li><b>Department:</b></li>
                                <li>Kaumarbhritya - Bala Rog</li>
                              </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                          <div class="main-box mt-2 mb-3">
                         <table class="table table-light">
                            <tbody>
                             <tr>
                                <td class="title-heading1">Non Teaching Staff</td>
                                <td><a href="https://drive.google.com/file/d/1o4sc7HMfl16xU0fY_LxuRVJrsJAHLreY/view" target="_blank">Click Here</a></td>
                              </tr>
                               <tr>
                                <td class="title-heading1">Recruitment Policy for Teachers</td>
                                <td><a href="https://drive.google.com/file/d/16ehEGuIlF1N6HUm2Fd9SaSpORwKYxrH7/view" target="_blank">Click Here</a></td>
                              </tr>
                               <tr>
                                <td class="title-heading1">Hospital Staff</td>
                                <td><a href="https://drive.google.com/file/d/1yLSmC9qnQ0HKvT_sg9Sn7lckhi1s7Zr5/view" target="_blank">Click Here</a></td>
                              </tr>
                            </tbody>
                           </table>
                        </div>
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