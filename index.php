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

        <div class="row">
            <div class="col span-1-of-2 box ">
                <ion-icon name="flash" class="icon-big"></ion-icon>
                <h3>OUR MOTIVATION</h3>
                <p>
                What does it take to build a perfect Mars Rover ? We believe the motivation from our teachers, seniors and the people of the country is taking us towards building the perfect mars rover. Our people believe in us. They have hopes. And this motivates us every second. Our teachers always support us and show the right path. Our motivation is our predecessors who achieved 5th position in Phobos Group at University Rover Challenge (URC) – 2016 on Mars Desert Research Station at Hanksville of Utah state in USA. 
                </p>
            </div>

            <div class="col span-1-of-2 box">
                <ion-icon name="eye" class="icon-big"></ion-icon>
                <h3>OUR VISION</h3>
                <p>
                We want to build and design a world class Mars Rover which will be perfect for the Martian environment and will help mankind and the nation  to know & research the use of space technology for technological advancement. Our vision is to participate in international rover challenges across the globe for winning in order to make our country proud. We have hope to be one of the renowned and the best Mars Rover Team in the world. 

                </p>
            </div>
        </div>

        <div class="row">

            <h2>Our Team Subgroups</h2>

            <img src="resources/img/erc-20.jpeg" class="rover-image">

            <div class="row">
                <div class="col span-1-of-2 box ">
                    <img src="./resources/img/electrical.jpg" style="width: 80px;">
                    <h3 style="font-weight: bold">Electrical & communication Group</h3>
                    <p>
                        The electrical and communication group is responsible for powering various segments of the rover and ensure a stable communication with the parts of the rover from the base station. This group is in charge of providing power to the rover and managing the electronic parts. They design and develop the best power distribution system for the mechanical parts of the rover. The group is also responsible for controlling of the rover and hauling the camera feeds from various points back to the base station for better movement and maximum view of the environment. The group design custom printed circuit boards for the sensor interface and motor control. They ensure a strong, wireless RF communication link between the base station and the rover.
                    </p>
                </div>

                <div class="col span-1-of-2 box">
                    <img src="./resources/img/mechanical.jpg" style="width: 80px;">
                    <h3 style="font-weight: bold">Mechanical group</h3>
                    <p>
                        The mechanical group is responsible for the design and manufacture of the rover body, arm, wheels, suspension, robot manipulator, soil collection mechanism, chassis, mounts and other mechanical parts. The mechanical group designs and builds a multiple degree of freedom robotic arm for completing the tasks of the competition. The group provides the basic skeleton of the rover. The group also performs various analysis of the rover components for better strength and mobility. The group develops the drive and suspension system to drive through the hard, inconsistent surface of the martial terrain while protecting sensitive equipment and scientific samples from vibration.

                    </p>
                </div>
            </div>



            <div class="row">
                <div class="col span-1-of-2 box ">
                    <img src="./resources/img/software.png" style="width: 80px;">
                    <h3 style="font-weight: bold">Software Group</h3>
                    <p>
                        The software group is responsible for autonomy, perception, teleportation and the embedded software of the rover. The group is in charge of the autonomous tasks using artificial intelligence. The group develops the code to process the information about the environment around the rover which helps the rover to effectively traverse the course. The autonomous system developed by the group creates a closed loop scenario where various sensors communicate with each other to control the rover. The group maintain the GUI used by human drivers to control the rover and develop control solutions for complex systems (such as robotic arm) to improve accuracy and usability.
                    </p>
                </div>

                <div class="col span-1-of-2 box">
                    <img src="./resources/img/science.png" style="width: 80px;">
                    <h3 style="font-weight: bold">Science group</h3>
                    <p>
                        The science group is responsible for performing tests to analyze collected and off-board samples and developing in suit life detection hardware for the rover. The group performs comprehensive analysis of the biological, geological and chemical aspects of a given area. The group performs scientific tasks using the methods like chemical assays, spectroscopy, microscopy or any other method that can collect several independent samples and determine their habitability without contaminating the samples.

                    </p>
                </div>
            </div>




            <div class="row">
                <div class="col span-2-of-2 box ">
                    <img src="./resources/img/non-tech.png" style="width: 80px;">
                    <h3 style="font-weight: bold">Non-technical Group</h3>
                    <p>
                        The non-technical team is in charge of organizing corporate sponsorships, grants and other fundraising opportunities. The group is responsible for all non-technical work of the team such as- finance, public relations, community outreach events, sponsorship letters, videos for advertisement & sponsors, videography, branding, rover reports and other non-technical tasks of the team. The group is also responsible for the smooth functioning of the team’s work and managing of all events.
                    </p>
                </div>


            </div>

        </div>




        <div class="row" style="margin-bottom: 15px;">

            <h2>Our Rovers</h2>
            <h3 class="rover-name">M o n g o l- E v 4</h3>

            <!-- <img src="resources/img/rovers/Mongol_E_v4_ERC-2020.jpeg" class="rover-image"> -->


            <h3 style="font-weight: bold;">ERC 2019</h1>
            <p  style="letter-spacing: 1px;">
            Our Mongol-E v 4.0, for the ERC-2019, was designed by the lesson learnt from our previous University Rover Challenges experience. We modified many parts of the rover to perform better in ERC-2019. This year We implemented a counter-link mechanism for proper balancing and strength of chassis and suspension system. We upgraded the drill design so that it can reach up to 30cm deep down the soil. We also changed the previous structure of wheel for proper traction and strength of the wheel. We located the arm in the middle of the rover so that the arm can operate smoothly without any major vibration. The total weight of our rover was 40 kg after mounting all components. To power our rover, we used 4 Lithium Polymer Batteries of 12-volt, 22 Ah each. We used total 5 cameras (4 analog cameras each of 1.3 MP resolution & 1 digital camera of 20MP resolution). We have designed separate custom made PCB for serving different purposes. To give life to our rover we used low cost gas sensors, temperature sensors, UV sensors and humidity sensors which are mounted on the rover for atmospheric and soil property measurement. The working time of our rover was 55 minutes. 
We placed 16Th position with total score of 181,5 in the ERC-2019 competing different rover teams from different universities around the globe. 

            </p>
        </div>


        <div class="row">
        <h3 class="rover-name">Mongol-E v2</h3>
        <img src="resources/img/rovers/Mongol E v2 URC-2016.jpg" class="rover-image">
        <h3 style="font-weight: bold;">URC 2016</h1>

        <p  style="letter-spacing: 1px;">
        We, Team Interplanetar designed Mongol-E v42.1 rover for the University rover challenge 2016. Our Mongol-E v2.1 has custom-designed wheels which were made with the help of CNC technology. We have used aluminum alloy for our rover structure. We have implemented counter-link mechanism for our suspension to run smoothly and overcome any kind of obstacle. The main chassis were made of square ss channels to coupled with the suspension. Our arm has 6 degree of freedom with infinite rotation of end effector. Our rover can carry weight up to 7kg with great stability. Inverse kinematics were used to control the manipulator to perform various tasks.  For the rover eyes we used total 4 cameras. 2 of were mounted at the end of the manipulator for better viewing angle while performing the tasks. In the electrical section we designed & build individual custom-designed PCB for wheel motors, communication devices, manipulator and on-board science tasks. In the communication sector we used different frequency band for data transmitting and video transmitting. The rover is capable of finding out the shortest path between 2-way points with the help of on-board GPS module. We have used convolutional neural network algorithm for detecting an object and find that out. A cluster of raspberry pi were used to process the deep learning algorithms. Our rover can avoid any obstacles and autonomously navigate itself to the destination. It can detect obstacles with close range 3D mapping ability and overall 2D mapping of the environment. For science task we automated the scientific chambers and two specially designed reaction chamber for on-board testing of the samples. An auger drill tool is used for collecting the soil samples. Various sensors are mounted with the auger tool for analyze soil characteristics. Our rover can determine the availability of various nutrients and micro-organisms in the soil.   
Our team secured 5th position in the Phobos group and 1st position in Bangladesh at University Rover Challenge- 2016 with the total score of 213 among 14 teams in the group and 42 teams in total from different universities around the world.

            </p>
        </div>


        <div class="row">
        <h3 class="rover-name">Anweshan v2.0</h3>
        <img src="resources/img/rovers/Anweshan-v2-IRDC-2020.jpg" class="rover-image">
        <h3 style="font-weight: bold;">IRDC 2020</h1>
        <p  style="letter-spacing: 1px;">
        We designed our Anweshan v2.0 rover for the Indian Rover Design Challenge -2020. This year IRDC took the whole competition online because of the worldwide COVID-19 pandemic situation. Team Interplanetar designed a fully functional rover that can survive & operate in the Martian terrain. Past experience of Mars rovers has proved that Martian surfaces are a combination of rocky and sandy terrain. Therefore, we have chosen the rocker-bogie suspension system with a bar differential mechanism to allow our rover to traverse in rocky terrain with ease. We also upgraded our wheel design. We are using Nitinol wire mesh spring tires which provide superior traction on such terrain while sustaining large loads. To power up our rover, we have two 24V, 8Ah on board batteries. Solar panels are used to recharge the batteries when the rover is in sunlight. The total mass of the rover, with all its peripherals mounted, amounts to 42kg. Via SolidWorks simulations, it is seen that the rover can sustain a total load of 50kg while maintaining its normal speed. The end effector of our arm is a two-claw gripper with a wide surface area which allows it to lift objects of a variety of shapes. The arm of our rover has 6 degrees of freedom. For the scientific analysis we have mounted external sensors that are used to take readings such as temperature and pressure of the air and also concentrations of gases such as CO2, CH4 and O2. Our newly designed auger drill is used to collect soil samples from a depth of 10cm. There are three digital cameras and one depth camera to give vision to our rover. We have introduced a thermal control system for our batteries to keep them within their allowable temperature limits in the environment of mars.

In the IRDC-2020 Team Interplanater proudly secured 11th position with a total score of 655.5 among 28 teams from different universities. And stood 2nd in Bangladesh.
            </p>
        </div>


        <div class="row">
        <h3 class="rover-name">Mongol-E v1</h3>
        <img src="resources/img/rovers/Mongol_E_v1_ERC-2015.jpg" class="rover-image">
        <h3 style="font-weight: bold;">ERC-2015</h1>

        
        <p  style="letter-spacing: 1px;">
        ERC-2015 was the first international rover challenge that our team, Team Interplanetar participated. The ERC-2015 was a whole new experience for the team. The team worked day and night to design & build our Mongol-E v2.0 rover. We build a fully functional rover that can traverse in the Martian terrain. Our mechanical sub-team designed the body, manipulator and the wheels of the rover. The team also introduced counter-link mechanism for the suspension. The chassis was built with the aluminium alloy. We made custom-designed wheels for our rover. In the electrical department we made individual custom PCB for our different components. For the communication we separated the bands for image and data transmission. Our software team has developed the algorithm for the autonomous task and navigation for the rover. With the cameras and sensors on board the rover can observe the environment and make a 3D map of the environment. In the scientific analysis task, we mounted a auger drill to collect the soil samples. We designed a reaction chamber and mounted sensors to analyze the samples. 
In the ERC-2015 our Team Interplanetar stood 19th worldwide with the total score of 135.

            </p>
        </div>




        <div class="row">
        <h3 class="rover-name">Anweshan v 1.0</h3>
        <img src="resources/img/rovers/Anweshan_V1_ERC-2020.JPG" class="rover-image">
        <h3 style="font-weight: bold;">European Rover Challenge 2020</h1>

        
        <p  style="letter-spacing: 1px;">
        Our Anweshan v 1 Rover   is   controlled   via Wi-Fi communication   system.   Basic Components of our rover are -Wheel,  Suspension  and  Damper,  Chassis,  Manipulator,  End  Effectors. We choose our Rover  material  to  be lightweight  preferably  aluminum,  stainless  steel  alloy  sheet  or  nylon  and  the  structure  design is optimized  and compact to keep it within the weight limit. The wheels have enough traction to travel through the Martian sandy and rocky terrain while carrying the load, and the suspension system enables the rover to pass through the slopes,  turns  and  rocky  terrain  while  maintaining  balance,   our rover  body  is  able  to  hold  and  protect  all  the integral  parts.  An  arm  with  6  degrees  of  freedom  is  attached  at  the  front  of  the  chassis.  The  6  DOF  is achievable by  combining  the  motion  of  3  actuators  in  the  vertical  plane,  one  base  stepper  motor  to  control  the position +in the horizontal plane. The rover is equipped with easily accessible red emergency stop button. It will disrupt power to all motors and actuators and PCB’s. Also, industrial indicator lamp which remains active for 5 seconds to inform its readiness to receive commands before each task.
            </p>
        </div>



        <div class="row">
            <div class="col span-1-of-2 box ">
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/i0aBEcISIXM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                </div>
            </div>


            <div class="col span-1-of-2 box">
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wPJTPhpdQgE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>


        </div>
        


        <div class="row">
            <div class="col span-1-of-2 box ">
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dBPkO6nYWxQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                </div>
            </div>


            <div class="col span-1-of-2 box">
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/61lXAQMWtgU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>


        </div>



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
                            <img src="resources/img/members/2020/science/science-lead.jpg" alt="" class="img-responsive">

                        </figure>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100015697725287">
                            <h4>Anirban Chakraborty</h4>
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
                                    <img src="resources/img/members/2020/Communication-Software/utshaw150.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/misujurrahman.parvez">
                                    <h4>Farhan Tanvir Utshaw</h4>
                                </a>
                                <p>Group Leader</p>
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
                                    <img src="resources/img/members/2020/Mechanical/mech-1_150.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/waheduzzaman.nouman">
                                    <h4>Md. Waheduzzaman Nouman</h4>
                                </a>

                                <p>Group Leader</p>
                            </div>
                        </div>
                    </div>


                    <div class="row">



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Mechanical/mech-3.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/ishat.raihan">
                                    <h4>Ishat Raihan Jamil</h4>
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
                                    <img src="resources/img/members/2020/electrical/lead.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2020/electrical/elec-1.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/mushfiqur.rahman.3333">
                                    <h4>Mushfiqur Rahman</h4>
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
                                    <img src="resources/img/members/2020/science/science-lead.jpg" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/profile.php?id=100015697725287">
                                    <h4>Anirban Chakraborty</h4>
                                </a>

                                <p>Group Leader</p>
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



                    <div class="col span-1-of-6 box member-img">
                        <div style="text-align: center;">
                            <figure>
                                <img src="resources/img/members/2020/non-tech/non-4.png" alt="" class="img-responsive">

                            </figure>

                            <a href="https://www.facebook.com/shakib.mahmud.ayon002">
                                <h4>Shakib Mahmud Ayon</h4>
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
                                    <img src="resources/img/members/2019/mechanical/mech-lead.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/mechanical/mech-1.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/mahmudurrashid.shourov">
                                    <h4>Mahmudur Rashid</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-2.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/reaz.shafqat">
                                    <h4>Reaz Shafqat</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-3.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/ishat.raihan">
                                    <h4>Ishat Raihan</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-4.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/xxNxZxB.KhaN.ChowdhurYxx">
                                    <h4>Nazib Chowdhury</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-5.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/sadib.fardin">
                                    <h4>Sadib Fardin</h4>
                                </a>

                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-6.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/mechanical/mech-7.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/fuad.jarif">
                                    <h4>Fuad Jarif</h4>
                                </a>
                            </div>


                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/mechanical/mech-8.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/electrical/electrical-leader.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/electrical/electrical-1.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/nayeeb.rashid">
                                    <h4>Nayeeb Rashid</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electrical-2.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/azadrahman.sajib">
                                    <h4>Azad Rahman</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electrical-3.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/ridwan.abrar.3">
                                    <h4>Ridwan Abrar</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/electrical/electircal-4.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/software/software-lead.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/software/software-1.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/joler.kona">
                                    <h4>Ayesha Siddiqua</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-2.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/azadrahman.sajib">
                                    <h4>Tamanna Mahzabin</h4>
                                </a>
                            </div>


                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-3.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/science/science-lead.png" alt="" class="img-responsive">

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
                                    <img src="resources/img/members/2019/science/science-1.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/profile.php?id=100015697725287">
                                    <h4>Anirban Chakraborty</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-2.png" alt="" class="img-responsive">

                                </figure>
                                <a href="https://www.facebook.com/tahmid.hossain.75">
                                    <h4> Tahmeed Hossain</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-3.png" alt="" class="img-responsive">

                                </figure>

                                <a href="https://www.facebook.com/homira.soheny">
                                    <h4>Homira Soheny</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/science/science-4.png" alt="" class="img-responsive">

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
                    <img src="resources/img/experience/ex-1.jpg" alt="Successfully passed Preliminary Design Review submission round in URC – 2018, USA" title="Successfully passed Preliminary Design Review submission round in URC – 2018, USA">
                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/experience/ex-2.jpg" alt="Achieved 5th position in Phobos group in University Rover Challenge – 2016, USA" title="Achieved 5th position in Phobos group in University Rover Challenge – 2016, USA">

                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/experience/ex-3.png" alt="Successful participation in International Mars Rover Contest, ERC – 2015, Poland " title="Successful participation in International Mars Rover Contest, ERC – 2015, Poland ">

                </div>


                <div class="grid-item exp">
                    <div class="content">
                        <h3 class="funny-text">
                            <ion-icon name="search"></ion-icon>
                        </h3>
                    </div>

                    <img src="resources/img/experience/ex-4.jpg" alt="Successful participation in International Mars Rover Contest, ERC – 2015, Poland " title="Successful participation in International Mars Rover Contest, ERC – 2015, Poland ">

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
                        <p>Associate Professor</p>
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
                                    <img src="resources/img/members/2020/Mechanical/mech-lead.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Mamun Al Hasan</h4>
                                <p>Product Design & Development</p>
                                <p> Involute Tech BD</p>
                            </div>
                        </div>


                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2019/software/software-lead.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Arghya Chatterjee</h4>
                                <p>Research Assistant</p>
                                <p>Model & Project Lab, BUET</p>
                            </div>
                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/Communication-Software/parvej.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Mishuzur Rahman Parvez</h4>
                                <p>Engineer</p>
                                <p>Product Design & Development</p>
                                <p> Involute Tech BD</p>
                            </div>
                        </div>



                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2020/lead.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Fahim Ahmed Irfan</h4>
                                <p>Junior Software Developer</p>
                                <p>Nextgen Digitech V.O.F</p>
                            </div>
                        </div>

                        <div class="col span-1-of-6 box member-img">
                            <div style="text-align: center;">
                                <figure>
                                    <img src="resources/img/members/2016/2016-13.png" alt="" class="img-responsive">

                                </figure>
                                <h4>Asraful Hasan Apu</h4>
                                <p> Assistant Engineer R&D division</p>
                                <p>Energypac Engineering Ltd </p>
                            </div>
                        </div>


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





                    </div>


                    <div class="row">



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

        <div class="row" style="text-align: center;">
            <div class="col span-2-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/ict.jpg" alt="Sponsor image" class="sponsor-img">
            </div>

            <div class="col span-2-of-6 box sponsor-img-div">
                <img src="resources/img/sponsors/ankur.png" alt="Sponsor image" class="sponsor-img">
            </div>

        </div>


        <div class="row">
            <h2>Support</h2>
        </div>

        <p class="long-copy">
        Thanks to all for believing and supporting us. We are thankful to Ankur International for their support. You can support us from <a target="_blank" href="https://ankurintl.org/project/buet-project/">Ankur International</a>  through PayPal. You small help will give us hope and encourage us to do better in future.
            </p>



    </section>

    <section class="section-form" id="section-message">

        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>

        <div class="row" style="text-align: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.602055470808!2d90.39079895067684!3d23.72590089555276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8dd436bf19b%3A0x1ebdf28957cc329b!2sFaculty%20of%20Mechanical%20Engineering!5e0!3m2!1sen!2sbd!4v1594371020413!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            <p class="long-copy" style="font-weight: bold">
                Model and Project Lab, Department of Mechanical Engineering, BUET, Dhaka-1000 <br />
                Contact number: +8801757148635 <br />
                Email: interplanetar.buet@gmail.com <br />

            </p>

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
                        <input type="submit" value="Send it!">
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
                Copyright &copy; 2020 by BUET Interplanetar. All rights reserved
            </p>


            <p>
                Build with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> by <a target="_blank" href="https://github.com/Utshaw">Utshaw</a>
            </p>


        </div>
    </footer>






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

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />


    <script>
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



        $(document).ready(function() {
            nestImageInsideAnchorForLightBox("div.moments");
            nestImageInsideAnchorForLightBox("div.media");
            nestImageInsideAnchorForLightBox("div.exp");
            let mediaGallery = $('.media a').simpleLightbox();
            let expGallery = $('.exp a').simpleLightbox();
            let momentsGallery = $('.moments a').simpleLightbox();



        });


        $.fn.isInViewport = function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();

            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        };

        function addAnimation(id, animationName) {

            $('#' + id).each(function() {
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
    </script>

</body>

</html>