<?php
function redirect($url)
{
    header('location: ' . $url);
}

$links = [
    'fb' => 'www.facebook.com/iazshakil',
    'facebook' => 'www.facebook.com/iazshakil',
    'youtube' => 'www.youtube.com/channel/UCbIXxIzn7GD9BNJHyWis4Wg_as=subscriber',
    'twitter' => 'www.x.com/iazshakil',
    'linkedin' => 'www.linkedin.com/in/iazshakil',
];
$model = explode('/', $_SERVER['REQUEST_URI'])[1];
if (isset($links[$model])) {
    redirect('https://' . $links[$model]);
}

$images = ['img-profile-1.jpg', 'img-profile-2.jpg'];

$image = $images[rand(0, 1)];
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property='og:image' content='https://azshakil.com/img/<?= $image ?>' />
      <link rel="image_src" href="https://azshakil.com/img/<?= $image ?>" />
      <title>AZ Shakil | Civil Engineer</title>
      <!-- favicon -->
      <link href="favicon.png" rel=icon>
      <!-- web-fonts -->
      <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
      <!-- font-awesome -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
      <!-- Style CSS -->
      <link href="css/style.css" rel="stylesheet">
      <style>
         .header .profile-img {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-image: url(img/<?= $image ?>);
         background-size: cover;
         background-position: center top;
         }
      </style>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar">
      <div id="main-wrapper">
      <!-- Page Preloader -->
      <div id="preloader">
         <div id="status">
            <div class="status-mes"></div>
         </div>
      </div>
      <div class="columns-block">
         <div class="left-col-block blocks">
            <header class="header">
               <div class="content text-center">
                   <h1>Hi, I'm AZ Shakil</h1>
                  <p class="lead">Civil Engineer & Architectural Visualizer</p>
                  <ul class="social-icon">
                     <li>
                        <a title="AZShakil On Linkedin" class="animate" target="_blank"
                           href="https://www.linkedin.com/in/iazshakil/">
                           <i class="fa fa-linkedin"
                              aria-hidden="true">
                              <p>AZShakil On Linkedin</p>
                           </i>
                        </a>
                     </li>
                     <li>
                        <a title="AZShakil On Facebook" class="animate" target="_blank"
                           href="https://fb.com/iazshakil">
                           <i class="fa fa-facebook" aria-hidden="true">
                              <p>AZShakil On Facebook</p>
                           </i>
                        </a>
                     </li>
					 <li>
                        <a title="AZShakil On Twitter" class="animate" href="https://x.com/iazshakil">
                           <i class="fa fa-twitter" aria-hidden="true">
                              <p>AZShakil On twitter</p>
                           </i>
                        </a>
                     </li>
                     <li>
                        <a title="AZShakil On Telegram" class="animate" target="_blank"
                           href="https://t.me/iazshakil">
                           <i class="fa fa-paper-plane" aria-hidden="true">
                              <p>AZShakil On Telegram</p>
                           </i>
                        </a>
                     </li>
                     <li>
                        <a title="AZShakil On Whatsapp" class="animate" target="_blank"
                           href="https://api.whatsapp.com/send?phone=+8801757333731">
                           <i class="fa fa-whatsapp"
                              aria-hidden="true">
                              <p>AZShakil On Whatsapp</p>
                           </i>
                        </a>
                     </li>
                     <li>
                        <a title="AZShakil On YouTube" class="animate" target="_blank"
                           href="http://youtube.com/AZShakilYT">
                           <i class="fa fa-youtube" aria-hidden="true">
                              <p>AZShakil On Youtube</p>
                           </i>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="screen"></div>
               <div class="profile-img"></div>
            </header>
            <!-- .header-->
         </div>
         <div class="right-col-block blocks">
            <div class="style">
               <div class="arrow_bottom"></div>
            </div>
            <div class="content-main">
               <section class="intro section-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2 style="float:left;">What I am all about.</h2>
                           </div>
                        </div>
						<div class="col-md-12">
						    <p>
                              I'm <strong>MD ASHADUZZAMAN SHAKIL</strong> well known as <strong>AZ Shakil,</strong> a highly qualified individual with a <strong>Diploma and Bachelor's degree in Civil Engineering.</strong>
							  also working as a professional <strong>Graphics designer and Architectural Visualizer</strong> more than 8 years as of now.
                              <br>
                              My biggest strength is, I am a <strong>quick self-learner</strong>. i loved to design, and structures supervision. I started as a Graphics Designer when I was at 10th grade,
							  moving towards 3d Design and Animation. I've achieved awards for Professional Architectural Visualizer in 2017, early bird from adobe in 2019 for UI/UX. I've completed courses on Construction 
							  Project Management and Cost Estimation form USA. 
                            </p>
                           <p>
                              I have been designing from 2012, multiple brand collaboration for different local & international businesses. Also working as a Civil Engineer couple years.</p>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="section-wrapper dark-bg mmbl">
                  <div class="container-fluid">
                     <div class="row v-center">
                        <div class="Iam">
                           <b>
                                <!-- ANIMATION LOGO -->
                              <ul class="innerIam">
                                 <li style="color:#0077b5;">
                                    <i class="fa fa-linkedin"></i>
                                 </li>
                                 <li style="color:#628c4c;">
                                    <i class="fa fa-wechat"></i>
                                 </li>
                                 <li style="color:#e6edf4;">
                                    <i class="fa fa-paper-plane"></i>
                                 </li>
                                 <li style="color:#316FF6;">
                                    <i class="fa fa-facebook"></i>
                                 </li>
                                 <li style="color:#1b7fcd">
                                    <i class="fa fa-skype"></i>
                                 </li>
                              </ul>
                              <!-- ANIMATION LOGO -->
                           </b>
                           <span style="margin-left:8px;">/iAZShakil</span>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="expertise-wrapper section-wrapper mt-60">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2>Expertise</h2>
                           </div>
                        </div>
                     </div>
                     <!-- .row -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="expertise-item">
                              <h3>Software Proficiency</h3>
                              <p>
                                 Proficient in AutoCAD, SketchUP, Lumion. I have accumulated over 9 years of experience 
								 2D Cad Drawing, and more than 8 years for 3D designs.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="expertise-item">
                              <h3>Project Management Skills</h3>
                              <p>
                                 Expert in using MS Project and Primavera for project scheduling and management. Proven ability to manage multiple projects concurrently, ensuring timely completion
								 and adherence to budgets and legal requirements.
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- .row -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="expertise-item">
                              <h3>Architectural Visualization</h3>
                              <p>
                                 I'm Proficient in Revit, Twinmotion and Lumion. I have expertice to create large scale landscape and animation with Lumion and Twinmotion since 2016. I've completed 
								 multiple projects inside Bangladesh and two projects in China (for thesis).
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- .row -->
                  </div>
                  <!--.container-fluid-->
               </section>
               <!-- .expertise-wrapper -->
               <section class="expertise-wrapper section-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12 custom_tab">
                           <nav>
                              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                 <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Certifications</a>
                                 <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Softwares</a>
                                 <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab"
                                    href="#nav-about" role="tab" aria-controls="nav-about"
                                    aria-selected="false">Others</a>
                              </div>
                           </nav>
                           <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                 <!-- Programming -->
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Construction Project management</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 95%;" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100">95%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Cost Estimation and control</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 80%;" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">80%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Adobe Logo design</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 70%;" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100">70%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Architectural Visualization</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 80%;" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">80%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>PMP</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 40%;" aria-valuenow="40"
                                                aria-valuemin="0" aria-valuemax="100">💡 Learning...
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                 <!-- Frameworks -->
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>AutoCAD</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 85%;" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100">80%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Sketch UP</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 95%;" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100">90%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Illustrator</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 90%;" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">unidentified 🤐</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Photoshop</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 85%;" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100">85%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Premiere Pro</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 85%;" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100">85%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Davinci Resolve</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 70%;" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100">70%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Revit</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 60%;" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100">60%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>ETABS</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 60%;" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100">60%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>SAFE Pro</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 60%;" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">👨‍🎓Learning..</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Primavera</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 60%;" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100">👨‍🎓Learning..</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  <div class="tab-pane fade" id="nav-about" role="tabpanel"
                                 aria-labelledby="nav-about-tab">
                                 <!-- Tools -->
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Thesis/ Essay Writings</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 95%;" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100">95%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Visa Proceesing</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 80%;" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">80%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Study Abroad Guidence</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 90%;" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">90%</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="skill-block">
                                          <span>Immigration Laws</span>
                                          <div class="progress">
                                             <div class="progress-bar bg-focus" role="progressbar"
                                                style="width: 80%;" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100">80%</div>
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
               <section class="section-wrapper section-experience gray-bg">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2>Work Experience</h2>
                           </div>
                        </div>
                     </div>
                     <!--.row-->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="content-item">
                              <small>Aug 2021 - Present</small>
                              <h3>Consultant</h3>
                              <h4>apprent</h4>
                              <p>China</p>
                           </div>
                           <div class="content-item">
                              <small>May 2012 - Present</small>
                              <h3>Graphics Designer and Architectural Visualizer</h3>
                              <h4>Freelance</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                           <div class="content-item">
                              <small>Dec 2023 - June 2024</small>
                              <h3> Deputy Civil Engineer</h3>
                              <h4>Amin Construction</h4>
                              <p>Dhaka, Baangladesh</p>
                           </div>
                           <div class="content-item">
                              <small>Sep 2017 - May 2019</small>
                              <h3>Assistant Engineer</h3>
                              <h4>Northern Steel and Fabrication</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                           <!-- .experience-item -->
                           <div class="content-item">
                              <small>May 2016- Sep 2017</small>
                              <h3>Sub Assistant Engineer</h3>
                              <h4>Northern Steel and Fabrication</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                           <!-- .experience-item -->
                           <div class="content-item">
                              <small>Dec 2016- May 2017</small>
                              <h3>Architectural Visualizer</h3>
                              <h4>Creative It Institute</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                           <!-- .experience-item -->
                           <div class="content-item">
                              <small>Aug 2016-Jan 2017</small>
                              <h3>Civil Engineering Intern</h3>
                              <h4>Avila Housing Ltd.</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                           <!-- .experience-item -->
                        </div>
                     </div>
                     <!--.row-->
                  </div>
                  <!-- .container-fluid -->
               </section>
               <!-- .section-experience -->
               <section class="section-wrapper section-education">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2>Education</h2>
                           </div>
                        </div>
                     </div>
                     <!--.row-->
                     <div class="row">
                        <div class="col-md-12">
							<div class="content-item">
                              <small>2024 - 2027</small>
                              <h3>M.Sc in Civil Engineering</h3>
                              <h4>South China University of Technology</h4>
                              <p>Guangzhou, China</p>
                           </div>
                           <!-- .experience-item -->
                           <div class="content-item">
                              <small>2019 - 2023</small>
                              <h3>B.Sc in Civil Engineering</h3>
                              <h4>Hebei University of Technology</h4>
                              <p>Tianjin, China</p>
                           </div>
                           <!-- .experience-item -->
                           <!-- .experience-item -->
                           <div class="content-item">
                              <small>2017 - 2019</small>
                              <h3>B.Sc in Civil Engineering</h3>
                              <h4>Stamford University of Bangladesh</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                           <!-- .experience-item -->
						   <div class="content-item">
                              <small>2012 - 2016</small>
                              <h3>Diploma in Civil Engineering</h3>
                              <h4>National Institute of Engineering & Technology</h4>
                              <p>Dhaka, Bangladesh</p>
                           </div>
                        </div>
                     </div>
                     <!--.row-->
                  </div>
                  <!-- .container-fluid -->
               </section>
               <!-- .section-education -->
               <section class="section-wrapper section-interest gray-bg">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2>Interest</h2>
                           </div>
                        </div>
                     </div>
                     <!-- .row -->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="content-item">
                              <h3>Traveling</h3>
                              <p>
                                 I love to ride bike and traveling, although I am a rare introvert, who is shy to meet new people first time but after couple of times that new people will found me as an extrovert.
								 meeting new people, new place knowing about their cultures ignite me.
                              </p>
                              <p>
                                 This are the flags I've seen so far: 🇨🇳 🇲🇾 🇮🇳
                              </p>
                           </div>
                           <div class="content-item">
                              <h3>Design Games</h3>
                              <p>
                               I loved to play Simcity and City Iceland to understand traffic, road management, and the formation of a city (simulation). Although Illustrator and SketchUP are my playground. 
							   Most of my time I spend on these two applications to explore more and enhance my skills.  </p>
                           </div>
                           <div class="content-item">
                              <h3>Explore more</h3>
                              <p>
                                 I love to spend my time researching history, geopolitics, and international politics. Along with that, I'm trying to learn every sort
								 of research paper related to steel, RCC structures, and project management. 
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- .row -->
                  </div>
               </section>
               <!-- .section-publications -->
               <section class="section-wrapper portfolio-section">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2>Portfolio</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <a target="_blank" class="portfolio-item" href="https://www.behance.net/gallery/112749205/Urban-City-Design-AZ-Shakil">
                              <div class="portfolio-thumb" style="background:url('img/portfolio-1.jpg');">
                              </div>
                              <div class="portfolio-info">
                                 <h3>landscape Design</h3>
                                 <small>behance.net</small>
                              </div>
                              <!-- portfolio-info -->
                           </a>
                           <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                           <a target="_blank" class="portfolio-item" href="https://be.net/iazshakil">
                              <div class="portfolio-thumb" style="background:url('img/portfolio-2.jpg');">
                              </div>
                              <div class="portfolio-info">
                                 <h3>House Renders</h3>
                                 <small>D K Shaha Residential</small>
                              </div>
                              <!-- portfolio-info -->
                           </a>
                           <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                           <a target="_blank" class="portfolio-item" href="https://www.behance.net/gallery/99266111/Express-Courier-Branding">
                              <div class="portfolio-thumb" style="background:url('img/portfolio-4.jpg');">
                              </div>
                              <div class="portfolio-info">
                                 <h3>Express Courier</h3>
                                 <small>expcourier.com.bd</small>
                              </div>
                              <!-- portfolio-info -->
                           </a>
                           <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                           <a target="_blank" class="portfolio-item" href="https://www.behance.net/gallery/118930005/Safiyya-Logo-Branding">
                              <div class="portfolio-thumb" style="background:url('img/portfolio-5.jpg');">
                              </div>
                              <div class="portfolio-info">
                                 <h3>Safiyya-Organic</h3>
                                 <small>safiyya.com.bd</small>
                              </div>
                              <!-- portfolio-info -->
                           </a>
                           <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-6">
                           <a target="_blank" class="portfolio-item" href="https://www.behance.net/gallery/176449539/Polo-T-shirt-Design">
                              <div class="portfolio-thumb" style="background:url('img/portfolio-3.jpg');"> </div>
                              <div class="portfolio-info">
                                 <h3>stdio.h</h3>
                                 <small>stdioh.edu.bd</small>
							  </div>
                              <!-- portfolio-info -->
                           </a>
                           <!-- .portfolio-item -->
                        </div>
                        <div class="col-md-12">
                           <a class="portfolio-item-all" href="#">
                           And many more...
                           </a>
                        </div>
                     </div>
                     <!-- /.row -->
                  </div>
               </section>
               <!-- .portfolio -->
               <section class="section-contact section-wrapper gray-bg">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title">
                              <h2>Contact</h2>
                           </div>
                        </div>
                     </div>
                     <!--.row-->
                     <div class="row">
                        <div class="col-md-12">
                           <address>
                              <strong style="font-weight:600;">Location</strong><br>
                              <strong>From 🇧🇩 living in 🇨🇳 </strong><br>
                           </address>
                           <address>
                              <strong style="font-weight:600;">Email</strong><br>
                              <a href="mailto:hi@azshakil.com">hi@azshakil.com</a>
                           </address>
                        </div>
                     </div>
                     <!--.row-->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="feedback-form">
                              <h2>hey! you can use this also 😉</h2>
                              <form id="contactForm" action="https://azshakil.com/sendemail.php"
                                 method="POST">
                                 <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input type="text" name="name" required=""
                                       class="form-control" id="InputName" placeholder="Full Name">
                                 </div>
                                 <div class="form-group">
                                    <label for="InputEmail">Email address</label>
                                    <input type="email" name="email" required=""
                                       class="form-control" id="InputEmail" placeholder="Email">
                                 </div>
                                 <div class="form-group">
                                    <label for="message-text" class="control-label">Message</label>
                                    <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                       placeholder="Write message"></textarea>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                           <!-- .feedback-form -->
                        </div>
                     </div>
                  </div>
                  <!--.container-fluid-->
               </section>
               <!--.section-contact-->
               <footer class="footer">
                  <div class="copyright-section">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="copytext">&copy; 2024. All rights reserved | Design By: <a href="https://abtanjir.com">ABTanjir</a>
                              </div>
                           </div>
                           <!--.row-->
                        </div>
                        <!-- .container-fluid -->
                     </div>
                     <!-- .copyright-section -->
               </footer>
               </div>
               <!-- .footer -->
            </div>
            <!-- .right-col-block -->
         </div>
         <!-- .columns-block -->
      </div>
      <!-- #main-wrapper -->
      <!-- jquery -->
      <script src="js/jquery-2.1.4.min.js"></script>
      <!-- Bootstrap -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <script src="js/scripts.js"></script>
   </body>
</html>