<?php 
    require_once './controller/messageController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" type="image/png" href="resources/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" href="vendors/css/simplelightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">





    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





    <title>Team Interplanetar</title>

</head>

<body>

    <header id="home">
        <nav>
            <div class="row">
                <img src="resources/img/logo-white.png" alt="BUET Interplanetar logo" class="logo">
                <img src="resources/img/logo-2.png" alt="BUET Interplanetar logo" class="logo-color">

                <ul class="main-nav js--main-nav">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#all-member-section">MEMBERS</a></li>
                    <!-- <li><a href="#member-section">MENTORS</a></li> -->
                    <li><a href="#achievements-section">ACHIEVEMENTS</a></li>
                    <li><a href="#experience-section">EXPERIENCE</a></li>
                    <li><a href="#section-message">CONTACT</a></li>
                    <li><a href="#section-sponsors">SPONSORS</a></li>

                </ul>
                <a class="mobile-nav-icon js--nav-icon">
                    <ion-icon name="menu" id="menu-burger"></ion-icon>
                </a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1 class="main-name animated slideInDown">BUET MARS ROVER TEAM</h1>
            <a class="btn btn-full js--scroll-to-achievements" href="#">Our Achievements</a>
            <a class="btn btn-ghost js--scroll-to-message" href="#">Contact Us</a>
        </div>
    </header>

    <section class="section-features js--section-features" id="about">
        <div class="row">

            <h2 id="about-us">Team Interplanetar &mdash; Who we are</h2>

            <p class="long-copy">
                A team from Bangladesh University of Engineering and Technology which participates in International
                Space Related Robotic Competition each year.
            </p>
        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-2 box ">
                <ion-icon name="flash" class="icon-big"></ion-icon>
                <h3>MOTIVATION</h3>
                <p>
                    Our motivation is our predecessors who achieved 5th position in Phobos Group at University Rover
                    Challenge (URC) – 2016 on Mars Desert Research Station at Hanksville of Utah state in USA.
                </p>
            </div>

            <div class="col span-1-of-2 box">
                <ion-icon name="eye" class="icon-big"></ion-icon>
                <h3>VISION</h3>
                <p>
                    Our vision is to participate for winning Rover Challenges across the globe in order to make BUET as
                    well as Bangladesh proud.

                </p>
            </div>





            <!-- <div class="col span-1-of-3 box">
                <ion-icon name="globe" class="icon-big"></ion-icon>
                <h3>MISSION</h3>
                <p>
                    Our Mission is to build a rover (Mongol-E v 3.0) which can perform all tasks according to the rule
                    book of ERC – 2019.

                </p>
            </div> -->

        </div>

        <div class="row">
            <div class="col span-1-of-2 box ">
                <div class="iframe-container">
                    <<iframe width="560" height="315" src="https://www.youtube.com/embed/dBPkO6nYWxQ" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                </div>
            </div>


            <div class="col span-1-of-2 box">
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/61lXAQMWtgU" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>


        </div>




        <!-- <div class="row js--wp-1">
            <div class="col span-1-of-2 box">
                <ion-icon name="settings" class="icon-big"></ion-icon>
                <h3>FACILITIES</h3>
                <p>
                    We avail the best Lab facility of Bangladesh here in BUET like Robotics Lab, ME Machine Shop, CSE AI
                    Lab, BME Signal Processing Lab, NAME Structure Lab etc.
                </p>
            </div>

            <div class="col span-1-of-2 box">
                <ion-icon name="hand" class="icon-big"></ion-icon>
                <h3>SPONSORS</h3>
                <p>
                    Our sponsors are our partners and we give priorities to their branding and outreach. For further
                    information, Donation or Sponsorship, click here .

                </p>
            </div>



        </div> -->



    </section>




    <section class="grey-section" id="all-member-section">
        <div class="row">
            <h2 style="margin-bottom: 5px;" id="member-header">Team members</h2>
        </div>

        <div class="row" style="text-align: center;margin-bottom: 10px;">

            <span class="select-box">
                <select name="yearpicker" id="yearpicker" onchange="fadeAnimation(this.value)">
            </span>

            <!-- <option selected="selected" value="2016">2016 - Founding Members</option> -->
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020" selected="selected">2020</option>
            </select>


        </div>



        <div id="2020">
            <div id="member-images">

                <div class="row" style="text-align: center; ">

                    <div class="team-member">
                        <figure>
                            <img src="resources/img/members/2020/lead.png" alt="" class="img-responsive">

                        </figure>
                        <a target="_blank" href="https://www.facebook.com/fa.irfan">
                            <h4>Fahim Ahmed Irfan</h4>
                        </a>
                        <p>Team Leader</p>
                    </div>

                </div>

                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
    #e67e22; border-top: 35px;">Communication and Software</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2020/Communication-Software/parvej.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/misujurrahman.parvez">
                                    <h4>Mishuzur Rahman Parvez</h4>
                                </a>
                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Communication-Software/utshaw.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/uttshaw">
                                    <h4>Farhan Tanvir Utshaw</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Communication-Software/com-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/abrar.istiakakib">
                                    <h4>Md. Abrar Istiak</h4>
                                </a>
                            </div>


                        </div>


                    </div>

                </div>



                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">Mechanical Group</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2020/Mechanical/mech-lead.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/fa.irfan">
                                    <h4>Mamun Al Hasan</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Mechanical/mech-1.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/waheduzzaman.nouman">
                                    <h4>Md. Waheduzzaman Nouman</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Mechanical/mech-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/AtomBuetME">
                                    <h4>Anutam Bairagi</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Mechanical/mech-3.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/ishat.raihan">
                                    <h4>Ishat Raihan Jamil</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Mechanical/mech-4.jpg" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/de.cruxader">
                                    <h4>Xavier hebol D Cruze</h4>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>















                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">Electrical Group</h3>

                    </div>





                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2020/electrical/lead.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/shakil7531">
                                    <h4>Shakil Anwar</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/electrical/elec-1.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/mushfiqur.rahman.3333">
                                    <h4>Mushfiqur Rahman</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/electrical/elec-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/nzb.k.chowdhury">
                                    <h4>Nayeeb Rashid</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/electrical/elec-3.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/azadrahman.sajib">
                                    <h4>Azad Rahman Sajib</h4>
                                </a>
                            </div>


                        </div>

                    </div>
                </div>


                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
            #e67e22; border-top: 35px;">Science Group</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2020/science/science-lead.jpg" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/profile.php?id=100015697725287">
                                    <h4>Anirban Chakraborty</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/science/science-2.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/alfajuddin.ahmed">
                                    <h4>Alfaj Uddin Ahmed</h4>
                                </a>
                            </div>


                        </div>

                    </div>

                </div>

            </div>










            <div class="member-group-container">

                <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                    <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">Non technical Group</h3>

                </div>

                <div class="row" style="text-align: center;">
                    <div class="" style="display: inline-block;">
                        <div class="team-member">
                            <figure>
                                <img src="resources/img/members/2020/non-tech/lead.png" alt="" class="img-responsive">

                            </figure>
                            <a href="https://www.facebook.com/sumayaoishee111">
                                <h4>Sumaya Oishee</h4>
                            </a>

                            <p>Group Leader</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-6 box member-img">
                        <div style="text-align: center;">
                            <figure>
                                <img src="resources/img/members/2020/non-tech/non-1.png" alt="" class="img-responsive">

                            </figure>

                            <a href="https://www.facebook.com/profile.php?id=100009237050469">
                                <h4>Tamanna Mahzabin Moumita</h4>
                            </a>
                        </div>


                    </div>

                    <div class="col span-1-of-6 box member-img">
                        <div style="text-align: center;">
                            <figure>
                                <img src="resources/img/members/2020/non-tech/non-2.png" alt="" class="img-responsive">

                            </figure>
                            <a href="https://www.facebook.com/sakib.ahmed.0710">
                                <h4>Sk Sakib Ahmed</h4>
                            </a>
                        </div>


                    </div>


                    <div class="col span-1-of-6 box member-img">
                        <div style="text-align: center;">
                            <figure>
                                <img src="resources/img/members/2020/non-tech/non-3.png" alt="" class="img-responsive">

                            </figure>

                            <a href="https://www.facebook.com/nzb.k.chowdhury">
                                <h4>Nazib Chowdhury</h4>
                            </a>
                        </div>


                    </div>

                </div>

            </div>




        </div>

        </div>












        <div id="2019" style="display: none;">
            <div id="member-images">

                <div class="row" style="text-align: center; ">

                    <div class="team-member">
                        <figure>
                            <img src="resources/img/members/2019/lead.png" alt="" class="img-responsive">

                        </figure>
                        <a target="_blank" href="https://www.facebook.com/misujurrahman.parvez">
                            <h4>Mishuzur Rahman</h4>
                        </a>
                        <p>Team Leader</p>
                    </div>

                </div>

                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
    #e67e22; border-top: 35px;">Mechanical Group</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-lead.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/ham.purush">
                                    <h4>Mamun Al Hasan</h4>
                                </a>
                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-1.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/mahmudurrashid.shourov">
                                    <h4>Mahmudur Rashid</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/reaz.shafqat">
                                    <h4>Reaz Shafqat</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-3.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/ishat.raihan">
                                    <h4>Ishat Raihan</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-4.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/xxNxZxB.KhaN.ChowdhurYxx">
                                    <h4>Nazib Chowdhury</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-5.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/sadib.fardin">
                                    <h4>Sadib Fardin</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-6.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/Reivaxlobehezurcd">
                                    <h4>Xavier Hebol</h4>
                                </a>

                            </div>


                        </div>

                    </div>


                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-7.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/fuad.jarif">
                                    <h4>Fuad Jarif</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-8.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/sakib.ahmed.0710">
                                    <h4>Sakib Ahmed</h4>
                                </a>

                            </div>


                        </div>

                    </div>

                </div>



                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">Electrical Group</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electrical-leader.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/fa.irfan">
                                    <h4>Fahim Ahmed</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electrical-1.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/nayeeb.rashid">
                                    <h4>Nayeeb Rashid</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electrical-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/azadrahman.sajib">
                                    <h4>Azad Rahman</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electrical-3.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/ridwan.abrar.3">
                                    <h4>Ridwan Abrar</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electircal-4.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/i.am.not.your.baby.unicorn">
                                    <h4>Saadman Yasar</h4>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">Software Group</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-lead.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/arghyachatterjee.jony">
                                    <h4>Arghya Chatterjee</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-1.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/joler.kona">
                                    <h4>Ayesha Siddiqua</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/azadrahman.sajib">
                                    <h4>Tamanna Mahzabin</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-3.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/profile.php?id=100009237050469&ref=br_rs">
                                    <h4>Md. Abrar Istiak</h4>
                                </a>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
            #e67e22; border-top: 35px;">Science Group</h3>

                    </div>

                    <div class="row" style="text-align: center;">
                        <div class="" style="display: inline-block;">
                            <div class="team-member">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-lead.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/asrafulhasan.opu.5">
                                    <h4>Asraful Hasan Opu</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-1.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/profile.php?id=100015697725287">
                                    <h4>Anirban Chakraborty</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-2.png" alt=""
                                        class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/tahmid.hossain.75">
                                    <h4> Tahmeed Hossain</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-3.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/homira.soheny">
                                    <h4>Homira Soheny</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-4.png" alt=""
                                        class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/alfajuddin.ahmed">
                                    <h4>Alfaj Uddin Ahmed</h4>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        </div>





        <div id="2018" style="display: none;">
            <div id="member-images">


                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">

                    </div>

                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-1.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/munim11528">
                                    <h4>Muntasir Muhammad</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-2.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/MuhammadTasnimulHasan">
                                    <h4>Tasnimul Hasan</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-3.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/shuvroprokash.majumder">
                                    <h4>Shuvro Prokash</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-4.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/rahatmahmud.khan">
                                    <h4>Rahat Mahmud</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-5.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/goutam.biswas.735">
                                    <h4>Goutam Kumar</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-6.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/auddin721">
                                    <h4>Azim Uddin</h4>
                                </a>

                            </div>


                        </div>

                    </div>


                    <div class="row">


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-7.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/shahruk1O">
                                    <h4>Shahruk Hossain</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-8.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/farhan.s.khan.18">
                                    <h4>Farhan Khan</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-9.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/rudro1995">
                                    <h4>Shabbir Rudro</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-10.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/shahad.ishraq">
                                    <h4>Shahad Ishraq</h4>
                                </a>

                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-11.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/qmbtameem">
                                    <h4>Mutasim Billah</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-12.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/sakhawat.hossen.790">
                                    <h4>Sakhawat Hossen</h4>
                                </a>
                            </div>

                        </div>
                    </div>









                    <div class="row">


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-13.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/Shantanu.Dutta.Nitun">
                                    <h4>Shantanu Datta</h4>
                                </a>
                            </div>


                        </div>

                        <div class=" col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-14.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/mujtahid.hasan">
                                    <h4>Mujtahid Hasan</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-15.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/sumayaoishee111">
                                    <h4>Sumaiya Oishee</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2018/2018-16.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/tipusultan.tipusultan.125">
                                    <h4>Tipu Sultan</h4>
                                </a>

                            </div>


                        </div>


                    </div>

                </div>

            </div>
        </div>

        </div>


    </section>



    <!-- <section class="section-meals">

        <div class="row">

            <h2>Some moments</h2>


        </div>


        <ul class="meals-showcase">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/1.jpg" alt="Working with the rover">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/img/2.jpg" alt="Working with the rover">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/img/3.jpg" alt="Working with the rover">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/img/4.jpg" alt="Working with the rover">
                </figure>
            </li>
        </ul>


        <ul class="meals-showcase">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/5.jpg" alt="Working with the rover">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/img/6.jpg" alt="Working with the rover">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/img/7.jpg" alt="Working with the rover">
                </figure>
            </li>

            <li>
                <figure class="meal-photo">
                    <img src="resources/img/8.jpg" alt="Working with the rover">
                </figure>
            </li>
        </ul>

    </section> -->



    <section class="grey-section" id="moments-section">
        <div class="row">

            <h2 id="moments-header">Some moments</h2>


        </div>

        <div class="container">

            <div class="grid">




                <div class="grid-col grid-col--1">

                </div>

                <div class="grid-col grid-col--2">

                </div>

                <div class="grid-col grid-col--3">

                </div>

                <div class="grid-col grid-col--4">

                </div>

                <div class="grid-item moments moments-hidden">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/1.jpg" alt="Working with the rover">
                </div>


                <div class="grid-item moments moments-hidden">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>

                    </div>
                    <img src="resources/img/8.jpg" alt="Working with the rover">
                </div>


                <div class="grid-item moments moments-hidden">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/1.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments moments-hidden">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/2.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/3.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/4.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/5.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/6.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/7.jpg" alt="Working with the rover">
                </div>

                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/8.jpg" alt="Working with the rover">
                </div>


                <div class="grid-item">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/9.jpg" alt="Working with the rover">
                </div>


                <div class="grid-item moments">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/polland/10.jpg" alt="Working with the rover">
                </div>








            </div>


        </div>

    </section>


    <section id="achievements-section">


        <div class="row">

            <h2 id="achievements-header">Recognition from Media</h2>


        </div>


        <div class="container">

            <div class="grid">




                <div class="grid-col grid-col--1">

                </div>

                <div class="grid-col grid-col--2">

                </div>

                <div class="grid-col grid-col--3">

                </div>


                <div class="grid-item media">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/news/1.png" alt="Working with the rover" title="Polland Competiton">
                </div>


                <div class="grid-item media">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/news/2.png" alt="Working with the rover" title="Media News">

                </div>


                <div class="grid-item media">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/news/3.png" alt="Working with the rover" title="Media news">

                </div>


            </div>


        </div>
    </section>










    <!-- Experience -->

    <section id="experience-section">


        <div class="row">

            <h2 id="experience-header">Experience</h2>


        </div>


        <div class="container">

            <div class="grid">




                <div class="grid-col grid-col--1">

                </div>

                <div class="grid-col grid-col--2">

                </div>

                <div class="grid-col grid-col--3">

                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>
                    <img src="resources/img/experience/ex-1.jpg"
                        alt="Successfully passed Preliminary Design Review submission round in URC – 2018, USA"
                        title="Successfully passed Preliminary Design Review submission round in URC – 2018, USA">
                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/experience/ex-2.jpg"
                        alt="Achieved 5th position in Phobos group in University Rover Challenge – 2016, USA"
                        title="Achieved 5th position in Phobos group in University Rover Challenge – 2016, USA">

                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/experience/ex-3.png"
                        alt="Successful participation in International Mars Rover Contest, ERC – 2015, Poland "
                        title="Successful participation in International Mars Rover Contest, ERC – 2015, Poland ">

                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/experience/ex-4.jpg"
                        alt="Successful participation in International Mars Rover Contest, ERC – 2015, Poland "
                        title="Successful participation in International Mars Rover Contest, ERC – 2015, Poland ">

                </div>


            </div>


        </div>
    </section>

    <section class="grey-section" id="all-member-section">
        <div class="row">
            <h2 style="margin-bottom: 5px;" id="member-header">Mentors</h2>
        </div>

        <dv id="mentors">
            <div id="member-images">

                <div class="row" style="text-align: center; margin-top: 40px;">

                    <div class="team-member">
                        <figure>
                            <img src="resources/img/mentors/supervisor.png" alt="" class="img-responsive">

                        </figure>

                        <h4>Dr. Md. Ashiqur Rahman</h4>

                        <p>TEAM SUPERVISOR</p>
                        <p>Professor</p>
                        <p>Department of Mechanical Engineering</p>
                        <p>Bangladesh University of Engineering and Technology</p>
                        <p>Dhaka, Bangladesh.</p>
                    </div>

                </div>

                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">TEAM ADVISORS</h3>

                    </div>



                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/ment-1.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Al Arabi</h4>
                                <p>Lecturer,</p>
                                <p>Dept. of Computer Science & Eng., </p>
                                <p>Northern University</p>
                            </div>
                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/ment-2.png" alt="" class="img-responsive">

                                </figure>

                                <h4>Khaled Bin Moinuddin</h4>
                                <p>Engineer</p>
                                <p>Embedded Systems</p>
                                <p>Techshopbd</p>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/ment-3.png" alt="" class="img-responsive">

                                </figure>

                                <h4>Md. Aminul Haq</h4>
                                <p>CEO</p>
                                <p>Involute Tech bd, Dhaka</p>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/ment-4.png" alt="" class="img-responsive">

                                </figure>

                                <h4>Kowshik Parvej</h4>
                                <p>MSc. Student</p>
                                <p>Mechanical Engineering</p>
                                <p>NDSU, North Dakota, USA.</p>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/ment-5.png" alt="" class="img-responsive">

                                </figure>

                                <h4>Md. Al Hasib Irfan</h4>
                                <p>Engineer</p>
                                <p>Research and Development</p>
                                <p>PI Labs Ltd</p>
                            </div>


                        </div>


                    </div>

                </div>









                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">
                        <h3 style=" text-align: center; display: inline-block; padding-bottom: 1px; border-bottom: 1px solid
        #e67e22; border-top: 35px;">Special Thanks To</h3>

                    </div>



                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/thank-1.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Gazi Abdur Rakib</h4>
                                <p>Content Designer</p>
                                <p>URCIS Production</p>
                            </div>
                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/thank-2.png" alt="" class="img-responsive">

                                </figure>

                                <h4>Jubaer Talukder</h4>
                                <p>Freelance Cinematographer</p>
                                <p>Lumiere Studios</p>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/mentors/thank-3.png" alt="" class="img-responsive">

                                </figure>

                                <h4>Tanzir Ahmed Sami</h4>
                                <p>Head of Videography</p>
                                <p>GyanJam</p>
                            </div>


                        </div>





                    </div>

                </div>


            </div>





            </div>

    </section>



    <section class="grey-section" id="member-section">
        <div class="row">
            <h2 style="margin-bottom: 5px;" id="member-header"> Founding Members </h2>
        </div>


        <div id="2016">
            <div>


                <div class="member-group-container">

                    <div style="text-align: center;margin-top: 20px; padding-top: 15px;">

                    </div>

                    <div class="row">
                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-1.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/khaled.b.moinuddin">
                                    <h4>Khaled Bin Moinuddin</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-2.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/alarabiridoy">
                                    <h4>Al Arabi</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-3.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/nmahaq">
                                    <h4>Md. Aminul Haq</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-4.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/per.kowshikohacker">
                                    <h4>Kowshik Parvej</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-5.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/fozlealahi.shanu">
                                    <h4>Fozle Alahi</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-6.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/Shayakovich.Faruquinwozki">
                                    <h4>Shayak Ibna Faruqui</h4>
                                </a>

                            </div>


                        </div>

                    </div>


                    <div class="row">


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-7.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/sonkolonbarua">
                                    <h4>Sonkolon Barua</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-8.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/irfan.hasib.7">
                                    <h4>Md. Al Hasib</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-9.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/shakhaout.sifat">
                                    <h4>Shakhaout Hossain</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-10.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/A.jimmim">
                                    <h4>Ashraful Alam</h4>
                                </a>

                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-11.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/10arrogantmonster">
                                    <h4>Nabil Bin Hossain</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-12.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/pagla00">
                                    <h4>Deepayan Turja</h4>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>





    <section class="section-cities js--wp-2" id="section-sponsors">
        <div class="row">
            <h2>Our Honorable Sponsors</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/1r.jpg" alt="Sponsor image" class="sponsor-img">
                <!-- <h3>Blue Ribbon Associates</h3> -->
            </div>

            <div class="col span-1-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/midea.png" alt="Sponsor image" class="sponsor-img">
            </div>

            <div class="col span-1-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/noor.png" alt="Sponsor image" class="sponsor-img">
            </div>

            <div class="col span-2-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/forum86_updated.png" alt="Sponsor image" class="sponsor-img">
            </div>



            <div class="col span-1-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/involute.png" alt="Sponsor image" class="sponsor-img">
            </div>
        </div>

    </section>

    <section class="section-form" id="section-message">

        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form action="#" method="post" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>

                    <div class="col span-2-of-3">
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>

                    </div>

                    <div class="col span-2-of-3">
                        <input type="email" id="email" name="email" placeholder="Your email address" required>
                    </div>

                </div>


                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>

                    </div>

                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="1">Friends</option>
                            <option value="2" selected>Facebook</option>
                            <option value="3">Search Engine</option>
                            <option value="4">Other</option>
                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="message">Drop us a line</label>

                    </div>

                    <div class="col span-2-of-3">
                        <textarea id="message" name="message" placeholder="Your message"></textarea>
                    </div>

                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="">&nbsp;</label>

                    </div>

                    <div class="col span-2-of-3">
                        <input type="submit" value="Send it!" >
                    </div>

                </div>


            </form>
        </div>

    </section>


    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About Us</a></li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>

            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a target="_blank" href="https://www.facebook.com/interplanetar.buet/">
                            <ion-icon name="logo-facebook" id="ion-facebook"></ion-icon>
                        </a></li>

                    <li><a target="_blank" href="https://www.youtube.com/channel/UC3vWdyQz4cwRYQTXSmeE0Xw">
                            <ion-icon name="logo-youtube" id="ion-youtube"></ion-icon>
                        </a></li>
                </ul>
            </div>


        </div>

        <div class="row">
            <p>
                Copyright &copy; 2019 by BUET Interplanetar. All rights reserved
            </p>


            <p>
                Build with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> by <a target="_blank"
                    href="https://github.com/Utshaw">Utshaw</a>
            </p>


        </div>
    </footer>

    <!-- 
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div> -->




    <script src="https://unpkg.com/colcade@0/colcade.js"></script>
    <script>
        // selector string as first argument
        var colc = new Colcade('.grid', {
            columns: '.grid-col',
            items: '.grid-item'
        });
    </script>


    <script src="https://unpkg.com/ionicons@4.6.3/dist/ionicons.js"></script>
    <script src="/vendors/js/jquery-3.4.1.min.js"></script>
    <script src="/vendors/js/simple-lightbox.min.js"></script>
    <script src="/vendors/js/anime.min.js"></script>
    <script src="/vendors/js/jquery.waypoints.min.js"></script>

    <script src="resources/js/script.js"></script>


    <script>

        // $('body').addClass('stop-scrolling');
        // $('body').bind('touchmove', function (e) { e.preventDefault() })

        // $(window).on("load", function () {
        //     $(".loader-wrapper").fadeOut("slow");
        //     $('body').unbind('touchmove');
        //     $('body').removeClass('stop-scrolling');
        // });
        function nestImageInsideAnchorForLightBox(tagNameWithClass) {

            let momentImages = document.querySelectorAll(tagNameWithClass + " img");
            for (let i = 0; i < momentImages.length; i++) {
                let momentImage = momentImages[i];

                let mImageWrapper = document.createElement('a');
                mImageWrapper.href = momentImage.src;


                let parentOfMomentImage = momentImage.parentElement;
                parentOfMomentImage.appendChild(mImageWrapper);
                mImageWrapper.appendChild(momentImage);

            }

        }

        function fadeAnimation(value) {
            console.log(value);

            addAnimation('member-images', 'fadeOut');
            $('#2018').css('display', 'none');
            $('#2019').css('display', 'none');
            $('#2020').css('display', 'none');
            $('#' + value).css('display', 'block');
            addAnimation(value, 'fadeIn');
        }

        function populateMemberSelection() {
            $('#yearpicker').append($('<option />').val('2016').html('2016-Founding member'));

            for (i = 2017; i <= new Date().getFullYear(); i++) {
                $('#yearpicker').append($('<option />').val(i).html(i));
            }
        }



        $(document).ready(function () {
            nestImageInsideAnchorForLightBox("div.moments");
            nestImageInsideAnchorForLightBox("div.media");
            nestImageInsideAnchorForLightBox("div.exp");
            let mediaGallery = $('.media a').simpleLightbox();
            let expGallery = $('.exp a').simpleLightbox();
            let momentsGallery = $('.moments a').simpleLightbox();

            // populateMemberSelection();


        });


        $.fn.isInViewport = function () {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();

            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        };

        function addAnimation(id, animationName) {

            $('#' + id).each(function () {
                var activeColor = $(this).attr('id');

                if ($(this).isInViewport()) {
                    // $('#fixed-' + activeColor).addClass(activeColor + '-active');
                    $('#' + id).addClass('animated ' + animationName);
                } else {
                    // $('#fixed-' + activeColor).removeClass(activeColor + '-active');
                    $('#' + id).removeClass('animated ' + animationName);
                }
            });

        }

        // $(window).on('resize scroll', function () {

        //     addAnimation('about-us', 'slideInDown');
        //     addAnimation('moments-header', 'flash');
        //     addAnimation('moments-header', 'zoomIn');
        //     addAnimation('achievements-header', 'zoomIn');
        //     addAnimation('member-header', 'zoomIn');

        // });
    </script>

</body>

</html>