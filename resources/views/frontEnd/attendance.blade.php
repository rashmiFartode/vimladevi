@extends('frontEnd.layouts.mainlayouts')
@section('title','Attendance')
@section('content-wrapper')
<!--========================== Intro Section ============================-->
<section> 
  <div class="banner">
  </div>
</section>
<!-- #intro -->
<main id="main">
  <!--========================== Welcome Section ============================-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title-heading1 text-center"><b>Attendance</b></h2><hr>
        </div>
      </div>
    </div>
  </section>
  <!--========================== content Section ============================-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="quick  main-box">
            <h4 class="title-heading1 text-center">Quick Links</h4><hr>
            <ul class="quick-link-ul list p-0">
              <li class="quick-link-li p-2"><a href="president_message" class="a1">Message from President</a></li>
              <li class="quick-link-li p-2"><a href="principal_message" class="a1">Message from Principal</a></li>
              <li class="quick-link-li p-2"><a href="#" class="a1">Papers and Publications</a></li>
              <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1jePDdXI1pQOs_4QashMsJ3QNhpJS5Gpy" target="_blank" class="a1">College Council</a></li>
              <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=18uQnLZj992LFiLlutMELbxYcFRqkGogj" target="_blank" class="a1">Internal Assessment Grievances Committee</a></li>
              <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1-mlngZWTGolmyHWKVBGFUVzJ-CdKfvZL" target="_blank" class="a1">Women's Complaints Committee</a></li>
              <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1kE4_k-qX8PR_dTqPyOywVk8lpOJN3ai_" target="_blank" class="a1">Anti Ragging Committee</a></li>
              <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=11YfA33fQ5pnpstcjFQWOeXEdZzLCanb_" target="_blank" class="a1">Collaboration with NGOs</a></li>
            </ul>
          </div>
          <div class="quick mt-5 mb-5 main-box">
            <h4 class="title-heading1 text-center">Official Government Sites</h4><hr>
            <ul class="quick-link-ul list p-0">
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
        <div class="col-md-9  mb-5 main-box">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h4 class="title-heading1 text-center">Attendances</h4><hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="accordion overflow-table" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0"><button class="btn btn-link1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      IPD & OPD
                      </button>
                      </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-light">
                          <tbody>
                            <tr>
                              <td>Aug 2019</td>
                              <td><a href="https://drive.google.com/file/d/1GzImrzDcbcCrowfv9ZZ_s1rV10t04Tbe/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2019</td>
                              <td><a href="https://drive.google.com/file/d/1uhqy88As5OV0NMxJhENoW8fyH6U8WEdq/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2019</td>
                              <td><a href="https://drive.google.com/file/d/1kavQ4NxBekepTzOfhx5WR2406vtPlE9Q/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>May 2019</td>
                              <td><a href="https://drive.google.com/file/d/1C2L587xshYL9XC2g9ymKVgPe5U8Bq7tO/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2019</td>
                              <td><a href="https://drive.google.com/file/d/1R_BrgMJqmMfKFdbiv4yqZdWlUkj-V6dy/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2019</td>
                              <td><a href="https://drive.google.com/file/d/1S9Za0WqLfVqqIiYPJ7OEsxyEyPHMZPEe/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2019</td>
                              <td><a href="https://drive.google.com/file/d/1SkEhPeFdkGTmTH61MuG6nJUGlX8LRd6N/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2019</td>
                              <td><a href="https://drive.google.com/file/d/1vugbtSToUnW2WfSk_3M8ChF0fLcRmK-W/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Dec 2018</td>
                              <td><a href="https://drive.google.com/file/d/1keQxbo06RrwRZs4srHgqv1OAfi7vm9po/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Nov 2018</td>
                              <td><a href="https://drive.google.com/file/d/1oOIYNJJ3dm2tuqJdTd_65XHAPaHDDKcU/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Oct 2018</td>
                              <td><a href="https://drive.google.com/file/d/1jKZ_v0gNUvOG8RqRpb83naXSJ4YNqKWM/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Sep 2018</td>
                              <td><a href="https://drive.google.com/file/d/1vwuAYhRBUquy54eW3JZOuo-oc7gdps5t/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Aug 2018</td>
                              <td><a href="https://drive.google.com/file/d/1TJ3cJt1M_u4-LeAGllLEpo3RbkXT1EVm/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2018</td>
                              <td><a href="#" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2018</td>
                              <td><a href="https://drive.google.com/file/d/1ZEGeIY2FUu1IKD_qcoRAG2T3ef4Ay3yg/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>May 2018</td>
                              <td><a href="https://drive.google.com/file/d/1lKiKftWHMZijcMbVDmeiseddkCI3ZLiW/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2018</td>
                              <td><a href="https://drive.google.com/file/d/1pXGUUEER1T3DCiGWSqesmunjmpTBPqZl/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2018</td>
                              <td><a href="https://drive.google.com/file/d/1Uj3qZN4QNhtjlWyCKctrxCI4FLZG3vBo/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2018</td>
                              <td><a href="https://drive.google.com/file/d/1kM9hvkzs1_ApkGKPZjI-n3-3grjEcEjQ/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2018</td>
                              <td><a href="https://drive.google.com/file/d/1JpcB1292VrQ77b2pM2RJu7piZ3Ay1km3/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Dec 2017</td>
                              <td><a href="https://drive.google.com/file/d/1HPdbVbZQnAwMFXV7gftBIyrNuKJpcTv4/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Nov 2017</td>
                              <td><a href="https://drive.google.com/file/d/1Z9sOS51G57LIptsEg08sK1OmXeS9hSGa/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Oct 2017</td>
                              <td><a href="https://drive.google.com/file/d/1WjgNsNA4uYlnvCYMXGo1omtlYlbMcxOA/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Sep 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmR0g3UFdrOTV6dTA/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Aug 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmcFhDWEVuOGpfQ2s/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmam9LX2t6aFVVSTg/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmQTJ3Z3hKZGdZT0E/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>May 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmTXhKcEczZUFjaUE/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmZC1WVGNFN21vV2s/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmWFB1c09ucWxLem8/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmeWp5d2RXN0ZhWHM/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2017</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmUEpkYlN3Tm1JVmc/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>2016</td>
                              <td><a href="https://drive.google.com/file/d/0BxXkhBKGpQrmTW1VbHZCSmExQ1E/view" target="_blank"></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div> 
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0"><button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Teaching Staff Attendance</button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-light">
                          <tbody>
                            <tr>
                              <td>Aug 2019</td>
                              <td><a href="https://drive.google.com/file/d/1DYbaK9zsQSUYC-1lCRYmy2X8n8fJKCKr/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2019</td>
                              <td><a href="https://drive.google.com/file/d/1doezI3-VdO8g8Cy-FP2dJLQIG7xxT8rO/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2019</td>
                              <td><a href="https://drive.google.com/file/d/1n7rBPARCkf8OlXq1Y8eEIodwiEcXi2Mu/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>May 2019</td>
                              <td><a href="https://drive.google.com/file/d/1yCL2_hiQhYzT7eLA7A9AjBT3Paikqvp-/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2019</td>
                              <td><a href="https://drive.google.com/file/d/1LMeJBwwD9t2uAK_ChaXsNKszH154v1Sj/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2019</td>
                              <td><a href="https://drive.google.com/file/d/16KQNQ7fD1OcXzNxdt0qMpkt4qEUBZPDi/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2019</td>
                              <td><a href="https://drive.google.com/file/d/1QCZKpuF7gw5yXHU54WeOwubG7z0fN0f7/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2019</td>
                              <td><a href="https://drive.google.com/file/d/1RtLcAUXLlhoHD1lefSp7IZqPBGmM73ZK/view" target="_blank">Click Here</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0"><button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Non-Teaching Staff Attendance</button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-light">
                          <tbody>
                            <tr>
                              <td>Aug 2019</td>
                              <td><a href="https://drive.google.com/file/d/14vwzvbxlabJ55AalGbXeum4hLtFpKsbu/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2019</td>
                              <td><a href="https://drive.google.com/file/d/1fzO3TTiZO4jD0gRRKs0z9DfsvwcDhohN/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2019</td>
                              <td><a href="https://drive.google.com/file/d/1vM0f7EWuIYkeRERv5luSkRzNNWkCI75w/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>May 2019</td>
                              <td><a href="https://drive.google.com/file/d/16NiT33lj7LamvZbjUiB1Rm7Wm66hSbQ3/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2019</td>
                              <td><a href="https://drive.google.com/file/d/1INx7uatTM8jTaDLJ68WSiL89oH5LFDYP/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2019</td>
                              <td><a href="https://drive.google.com/file/d/188ClXvf4H8x5NV6saQGpUnghLWrkI3SR/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2019</td>
                              <td><a href="https://drive.google.com/file/d/17SrBPxSMb__uEz0Qw3l1i53LOiNdSKHo/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2019</td>
                              <td><a href="https://drive.google.com/file/d/1qG4wOoF_PltG6b13Sdt4yRqvYkeSP_fT/view" target="_blank">Click Here</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0"><button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Hospital Staff Attendance</button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-light">
                          <tbody>
                            <tr>
                              <td>Aug 2019</td>
                              <td><a href="https://drive.google.com/file/d/1Pn5G8erQVPe0YnkwtH_5sB_LDlQCm5e8/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2019</td>
                              <td><a href="https://drive.google.com/file/d/1f45Rhhpwk8bwAM4dRW7H-vgIIIU6EPXe/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2019</td>
                              <td><a href="https://drive.google.com/file/d/1cnJZBXGXSny5Uz2cOjU05RxTmOieCZxQ/view" target="_blank">Click Here</i></a></td>
                            </tr>
                            <tr>
                              <td>May 2019</td>
                              <td><a href="https://drive.google.com/file/d/1gktXKQuCstT5cNLZwUU6q-L7eq9gzlyC/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2019</td>
                              <td><a href="https://drive.google.com/file/d/1eDeJ046HdTnjDvC6Xm2skR6GhfJWIgH9/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2019</td>
                              <td><a href="https://drive.google.com/file/d/1MnUzXA2snE-x8tPqeCQlfXwG_J_H-7m4/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2019</td>
                              <td><a href="https://drive.google.com/file/d/1b_hxCHiXzn4iEVekr47Sfj_wuTpXrWyc/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2019</td>
                              <td><a href="https://drive.google.com/file/d/1beGFLZ1xckbdwrKZl4JN6UDKBZtb3Rsg/view" target="_blank">Click Here</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Students' Attendance
                       </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-light">
                          <tbody>
                            <tr>
                              <td>Aug 2019</td>
                              <td><a href="https://drive.google.com/file/d/1l_CosFrbShzro0cRMkDKYnTjznnsokEp/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jul 2019</td>
                              <td><a href="https://drive.google.com/file/d/1fbNhtOXTeIyLNX3EfTfquznv68JIzPVB/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jun 2019</td>
                              <td><a href="https://drive.google.com/file/d/1GxX941UUHzfxx5DmmHZVZbBpM93TcOf0/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>May 2019</td>
                              <td><a href="https://drive.google.com/file/d/1R6NhJvkN2yxpMWjnwHASGdSqivGkJMwt/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Apr 2019</td>
                              <td><a href="https://drive.google.com/file/d/1m0Kcs0NHacnJWhkfy-PWmJLArFFaCwbS/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Mar 2019</td>
                              <td><a href="https://drive.google.com/file/d/1UH_T1LhrvAFCYO51x4p-GGYxABDN_lzo/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Feb 2019</td>
                              <td><a href="https://drive.google.com/file/d/1p2UuRbW0DI1_SJS4q5_WD8PnGeHqOxsw/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Jan 2019</td>
                              <td><a href="https://drive.google.com/file/d/1I8scKpOb2tundc8FOtJX8nkvytmOzm8c/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Dec 2018</td>
                              <td><a href="https://drive.google.com/file/d/1PCTsIdsR_iA-P7M7BTc4J3dr0s6woI8u/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Nov 2018</td>
                              <td><a href="https://drive.google.com/file/d/1v__hOB6S7bV4Vygi2sBl2p42mka9jGj7/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Oct 2018</td>
                              <td><a href="https://drive.google.com/file/d/1vO5frI9jti67772OGAjjhKZefhZytXlv/view" target="_blank">Click Here</a></td>
                            </tr>
                            <tr>
                              <td>Sep 2018</td>
                              <td><a href="https://drive.google.com/file/d/1HsG5T51ME_BaRg9FbiCfLqe5S0bvczNu/view" target="_blank">Click Here</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--container-fluid row closed -->
            </div>
            <!--container-fluid closed -->
          </div>
          <!-- col-md-12 closed-->
        </div>
        <!--col-md-6 closed -->
      </div>
      <!--row closed -->
    </div>
    <!--container closed -->
  </section>
  <!-- #about -->
</main>
@endsection
@section('customjs')
@endsection