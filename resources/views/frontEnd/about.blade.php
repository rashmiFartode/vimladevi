@extends('frontEnd.layouts.mainlayouts')
@section('title','About')
@section('customcss')
<style>
.back{
 background-image: linear-gradient(to right, #1c0d27, #a005a0);
     padding:22px;
    
 }
@media (max-width: 575.98px) { 
    .back
    {
        font-size:12px;
    }
}
</style>
@endsection
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
                    <h2 class="title-heading1 text-center"><b>About Us</b></h2><hr>
                    <p class="text-center back text-warning">” शंखंचक्रंजलौकांदधतममृतघटंचारुदोर्भिश्चतुर्भिः।<br>
                    <span class="text-warning">सूक्ष्मस्वच्छातिह्र्द्यांशुकपरिविलसन मौलिमम्भोजनेत्रम॥</span><br>
                    <span class="text-warning">कालाम्भोदोज्वलांगंकटितटविलसच्चारूपीताम्बराढयं।</span><br>
                    <span class="text-warning">वन्दे धन्वन्तरिं तं निखिल गदवन प्रौढदावाग्निलीलम॥</span> ”</p>
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
                    <li class="quick-link-li p-2"><a href="principal_message"  class="a1">Message from Principal</a></li>
                    <li class="quick-link-li p-2"><a href="#"  class="a1">Papers and Publications</a></li>
                    <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1jePDdXI1pQOs_4QashMsJ3QNhpJS5Gpy" target="_blank"  class="a1">College Council</a></li>
                    <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=18uQnLZj992LFiLlutMELbxYcFRqkGogj" target="_blank"  class="a1">Internal Assessment Grievances Committee</a></li>
                    <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1-mlngZWTGolmyHWKVBGFUVzJ-CdKfvZL" target="_blank"  class="a1">Women's Complaints Committee</a></li>
                    <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=1kE4_k-qX8PR_dTqPyOywVk8lpOJN3ai_" target="_blank"  class="a1">Anti Ragging Committee</a></li>
                    <li class="quick-link-li p-2"><a href="https://drive.google.com/open?id=11YfA33fQ5pnpstcjFQWOeXEdZzLCanb_" target="_blank"  class="a1">Collaboration with NGOs</a></li>
                    <li class="quick-link-li p-2"><a href="#"  class="a1"">Message from President</a></li>
                    <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                    <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                    <li class="quick-link-li p-2"><a href="#"  class="a1">Message from President</a></li>
                </ul>
            </div>
            <div class="quick mt-5 mb-5 main-box">
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
        <div class="col-md-9 mb-3 main-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title-heading1 text-center">Governing Bodies</h4><hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Our Mission
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Shri Gurukrupa Shikshan Prasarak Mandal established Smt. Vimladevi Ayurvedic Medical College and Hospital in 2010 with a vision to impart the knowledge of Ayurveda, traditional healing modality, which emphasizes on balancing the body, mind and spirit to treat and prevent diseases.<br>
                                        <br>
                                        The main motto of SGSPM is to bridge the ever increasing gap between  demands of Ayurveda personnel in rural areas and wide spread chronicle diseases and problems. The college intends to train the students in Ayurveda and impart knowledge of modern medicine using scientific ways. Adequate laboratory facilities are provided for training of undergraduate course. College also provides OPD services to nearby villages, which are also attended by the Medical Officers and Interns under supervision of Senior Staff. Routine and specialized diagnostic and curative procedures are undertaken to provide special care to underdeveloped as well as developing areas of the locality with the aim of raising the health standards of people in such areas to a substantial level.<br>
                                        <br>
                                        The college has all the specialized Ayurveda departments as stipulated by ministry of AYUSH, New Delhi and Central Council of Indian Medicine, New Delhi (CCIM) . The College is affiliated to Maharashtra University of Health Sciences, Nashik .
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Our Story
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                    SGSPM is successfully managing the Smt. Vimladevi Ayurvedic Medical College and Hospital, conducting B.A.M.S. Degree course, since October 2010. The College has an intake capacity of 60 students per session. This college provides all facilities to its students that help them in developing their skills and enhancing their knowledge in the field of Ayurveda with the tools of conceptual study along with practical implementation. We continuously train generations of students and mould them into outstanding Ayurveda practitioners and excellent teachers in the field of Ayurveda.
                                    We organize workshops, guest lectures, seminars, clinical meetings designed to educate Ayurveda students & general public regarding the effectiveness of Ayurveda. We have highly qualified & experienced faculty.<br><br>
                                        Our college has 13.75 Acres of land where in more than 1800 Ayurvedic plants of more than 275 species are planted. College has well equipped departments of Ayurved Samhita & Siddhant, Rachana Sharir, Kriya Sharir, Dravyaguna Vigyana, Rasa Shastra & Bhaisajya Kalpana, Rog Nidan & Vikriti Vigyan, Swasthvritta & Yoga, Agad Tantra & Vidhi Vaidyaka, Kayachikitsa, Panchkarma, Shalyatantra + (Ksharsutra Lab.), Shalakya Tantra, Prasuti & Stri Rog and Kamarbhritya - Bala Rog. These departments fulfill all essential requirements and facilities. Rasa Shastra & Bhaishajya Kalpana department prepare Ayurveda Medicines in the pharmacy of our institute.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <p class="mb-0">
                                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Institutional Values Best Practises</button>
                                    </p>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Just like one starts their prayers by remembering the God Ganesh, likewise in Ayurveda before starting our day we pray to God Dhanvantari. Related to any work of Ayurveda, whether it may be the beginning of seminar or class, we pray to God Dhanvantari. This way of praising God helps us to increase our self-confidence & concentration. By recalling Dhanvantari one can increase their will power, concentration, and make mind fresh and clam. Keeping all these benefits of Dhanvantari Prayer in mind, we cite the Prayer before beginning of any work everyday.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Interactive Innovative Teaching</button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Education is a light that shows the mankind the right direction to surge. The purpose of education is not just making a student literate but adds rationale thinking, knowledgeability and self-sufficiency. When there is a willingness to change, there is hope for progress in any field. Creativity can be developed and innovation benefits both students and teachers.<br><br>
                                        In the pre-technology era, the teacher used to be the sender or the source, the educational material used to be the information or message, and the student used to be the receiver of the information. In terms of the delivery medium, the educator delivered the message via the “chalk-and- talk” method. But now that the technology has advanced to such an extent and everything is being upgraded, it is time to bring in some modifications in the traditional methods of teaching too.<br><br>
                                        The students aren’t just passive receivers in our classrooms as the College firmly believes in what the great Chinese teacher Confucius preached long back. Multiple methods are used to promote the involvement of the students in the learning process such as shlok recitation competition, model making competitions, debates, group discussions, quiz competitions, case presentations, videos related to various topics etc. By using such methods and by incorporating digital media elements, the students are able to learn better since they use multiple sensory modalities, which would make them more motivated to pay more attention to the information presented and retain the information better. The teachers not only interactively teach students using such methods, but also they increase their involvement along with the increasing the zeal and enthusiasm by introducing a simple sense of competition and all this is done by a little innovative method of teaching. The core objective of teaching is passing on the information or knowledge to the minds of the students. Any method using computers or modifying the existing conventional chalk-talk method are innovative if they ultimately serve the attainment of core objective of teaching.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Implementing Continuous Internal Evaluation
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">One of the major problems that the students are facing today is the fear of examination. The students’ fear of failing the final exam at the end of any session has made them unknowingly move towards the motto of passing examinations, instead of it being to acquire as much knowledge as possible. Examinations tend to dominate today’s education system. Also since the students’ sole motto is being shifted towards passing the final examination, the results no longer remain a reliable measure of student’s performance. Also due to such pressures of passing the final examinations, the students have been increasingly succumbing to the usage of unfair means in order to get better results.<br><br>
                                        To overcome this scenario, our Institution has implemented the system of Continuous Internal Evaluation. As the name suggests, the evaluation of a student is done internally throughout the session by the teacher. A student is de-linked from his academic excellence and their performance is evaluated over a due course of time using various activities like mentor-mentee scheme, shlok recitation competitions, case presentations, diagram practise, diagram explanation etc. in this method, the essential abilities like drive and capacity to hard work, leadership & team-work, motivation etc are taken into account while assessing a student. This not only helps the overall development of an academically sound student but also boosts the morale and confidence of a slow learner giving by them opportunities throughout the session to improve.<br><br>
                                        For the success of a continuous internal evaluation system, the most important prerequisite is the mutual trust between the teacher, the student and the system itself. The continuous evaluation provides more opportunities to the teacher to get feedback as to the progress of his students and his own performance and apply mid-course correction, if necessary. The varied nature of these evaluation instruments does provide opportunities to judge different aspects of a student’s understanding of the subject. To strengthen this interplay between the teacher, the student and the subject, a healthy practice of returning the answer books to the students has been introduced so that they can get necessary feedback on their performance from the teacher in a diagnostic manner. Also the students tend to focus on their development and hence as a result, the usage of malpractices reduces substantially.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Special Attention on Slow Learners
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Our College pays attention to the academic performance of all our students and keeps it in mind that a student improves his academic performance along with due passage of time. For this purpose, all the students are categorised as slow learners, medium-paced learners and advanced learners not just on the basis of their academic performance but also on various facts such as difficulties faced in understanding the subjects, various issues faced due to change in medium of language of teaching etc. All such issues along with other difficulties faced by them are taken into account while creating the list. All these lists are kept strictly confidential as disclosing such details may adversely impact the morale of the students and may have a degrading impact on this confidence and their performance. All the teachers are internally communicated about the list and they, as per their comfort and handling powers, try to guide all the students as per their categorisation so that it helps them improve.<br><br> All the teachers are regularly informed about the changes in the list and also they are requested to be frequently in touch with the mentors of all the students so that they can more clearly understand what the student is going through and what difficulties that student is facing as it is quite possible that a student, lacking in some field may it be confidence or academic excellence or any similar quality, may hesitate to open up or fluently describe all his problems. The main motto behind this is to help the students improve not just in their academic performance but also to make sure that this exercise has a positive impact so that there is a substantial overall improvement in the student.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link1 collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Grooming Tomorrow's Leaders
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Today’s students are going to be tomorrow’s leaders. So, in our institution, we have taken it up as a moral obligation to groom the leadership skills of the tomorrow’s leaders.<br><br>
                                        The first step of this process is to help the student recognize their stream of interest as one can’t be a successful leader if he/she doesn’t actually like what they are doing or what they are representing or who they are leading. As soon as the students realise what they want to do, they are asked to apply for that designation. If there are several candidates for the same designation then an interview is conducted by the teachers in order to select the best possible candidate. By this method, the head of the committee, be it sports or cultural, is elected and then this candidate is allowed to create his own council, under the guidance of the teaching staff.<br><br>
                                        The Head, along with the members of his Council, are given all the responsibilities of their event. Their work is continuously guided and looked after by the teachers. All the activities, right from planning various events to receiving, felicitation & departure of the guests, from Inaugural event to Felicitation ceremony, is looked after by these committees. This process not just improves their managerial experiences but also teaches them how to react and perform under various critical situations.<br><br>
                                        Various events that are conducted by the College on various days such as National Yoga Day, Swacchhata Abhiyaan Rally, NSS camps etc by conducting rally or street plays or quiz competition etc, as per the guidelines of the University, are also delegated to such candidates who are interested in  taking up the responsibility.
                                        Not just at the college level, the Institute motivates the students to participate in various district, state & national level events so that the students get the exposure to the world outside the college, that can help them in substantially boosting their confidence.
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
</section><!-- #about -->
</main>
@endsection
@section('customjs')
@endsection