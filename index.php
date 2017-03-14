<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Saloni Shah</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo|Berkshire+Swash|Merienda+One" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            $(document).ready(function () {
                // Enable Carousel Indicators
                $(".item1").click(function () {
                    $("#myCarousel").carousel(0);
                });
                $(".item2").click(function () {
                    $("#myCarousel").carousel(1);
                });
                $(".item3").click(function () {
                    $("#myCarousel").carousel(2);
                });
                $(".item4").click(function () {
                    $("#myCarousel").carousel(3);
                });

                // Enable Carousel Controls
                $(".left").click(function () {
                    $("#myCarousel").carousel("prev");
                });
                $(".right").click(function () {
                    $("#myCarousel").carousel("next");
                });
                progressBar($(".html").width(), "html");
                progressBar($(".css").width(), "css");
                progressBar($(".js").width(), "js");
                progressBar($(".jquery").width(), "jquery");
                progressBar($(".ajax").width(), "ajax");
                progressBar($(".php").width(), "php");
                progressBar($(".python").width(), "python");
                progressBar($(".java").width(), "java");
                progressBar($(".git").width(), "git");
                function progressBar(targetwidth, element) {
                    var elm = document.getElementsByClassName(element);
                    var width = 0;
                    var id = setInterval(frame, 60);
                    function frame() {
                        if (width >= targetwidth) {
                            clearInterval(id);
                        } else {
                            width++;
                            elm[0].style.width = width + '%';
                        }
                    }
                }
            });
        </script>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Saloni Shah</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="item1 active">Home</li>
                        <li class="item2">About me</li>
                        <li class="item3">Experience</li>
                        <li class="item4">Education</li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div id="myCarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <section id="section1" class="no-padding-bottom active" style='padding-top:0px;'>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>
                                        <strong id="hi">Hi,</strong> I’m a Front End Developer.
                                        I love to create interactive, responsive and easy to use web UI.
                                    </h2>
                                    <br>
                                    <div class="button">
                                        <button class="item2 btneffect" style="vertical-align:middle"><span>More About me</span></button>
                                    </div>
                                    <div class="warning">
                                        <b><p align="left">Note: I am actively improving this site and using it as my project to improve my UI Skills.</p></b>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image">
                                        <img src="/img/saloni_shah.jpeg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="item">
                    <section id="section2" class="no-padding-bottom active" style='padding-top:0px;'>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>My Skills</h3>
                                    <div class="skill-headings">
                                        <span>Beginner </span>
                                        <span>Intermediate</span>
                                        <span>Master </span>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills html" id="htmlabc">HTML5</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills css">CSS3+Bootstrap</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills js">Javascript</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills jquery">jQuery</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills ajax">AJAX</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills php">Php</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills python">Python</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills java">Java</div>
                                    </div>
                                    <div class="box-container">
                                        <div class="skills git">Git</div>
                                    </div>
                                    <div class="skillmsg">
                                        <span>*This list is not Exhaustive*</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>My Story</h3>
                                    <p><b>Seeking a front-end development opportunity</b></p>
                                    <p>I am a performance driven and skilled engineer with good academic record looking for a challenging front end development opportunity to advance the career.
                                        With a Master’s degree in Computer Science, and 3 years of hands-on experience in using web development technologies, I am confident that I will be an asset to any organization.
                                    </p>
                                    <p>
                                        I enjoy being challenged and working on projects that require me to work outside my comfort and knowledge set. Problem solving is a challenge that I have always loved. During this journey I have acquired some front end development skills and I 
                                        always look forward to learn more things.
                                    </p>
                                    <p>
                                        Currently I am teaching myself, React and other advanced JavaScript Concepts through online courses like Udacity and Safari Books Online. When I am not in front of my computer, I love to dance, travel and do some community work.
                                    </p>
                                    <p>
                                        Please checkout my linkedin profile and Github account for all my project work.
                                    </p>
                                    <br>
                                    <div class="button">
                                        <a class="btneffect resume" href="/img/Saloni Shah Resume.pdf" download="Saloni Shah Resume" role="button"><span>Download Resume</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class='item'>
                    <section id="section3" style='padding-top:30px;'>
                        <div class="container">
                            <h2>3 Years of Experience</h2>
                            <div class="experience">
                                <div class="experience clearfix">
                                    <div class="block">
                                        <span class="year">June 2016 - Dec 2016</span>
                                        <span class="company">Calix Inc</span>
                                    </div> 
                                    <div class="content">
                                        <h5>Software Engineer Intern</h5>
                                        <p align="justify">
                                            I joined Calix as an intern for a team responsible for maintaining company’s internal automation framework. 
                                            I developed an interactive UI for the framework to help my team members to easily choose from different configurations to run the tests and compare different test results.
                                        </p>
                                        <p align="justify">
                                            I also contributed to the data migration project using python which will parse the legacy test data from files and store into Mysql. This will allow my team to build different performance reports for different hardware.
                                        </p>
                                        <p align="justify" style="color: orangered;">
                                            PYTHON,  PHP, JavaScript, jQuery, AJAX, HTML, CSS, Bootstrap, Mysql, Vmware, Git
                                        </p>
                                    </div>
                                    <div class="line"></div>
                                </div> 

                                <div class="experience clearfix">
                                    <div class="block">
                                        <span class="year">Sept 2015 - Dec 2016</span>
                                        <span class="company">NorthWestern PolyTechnic University</span>
                                    </div> 
                                    <div class="content">
                                        <h5>Masters in Computer Science</h5>
                                        <p align="justify">
                                            I joined NPU in 2015 and I learned some new Technologies. I did some small projects using those technogies during my various courses.
                                        </p>
                                        <p align="justify">
                                            <b>Invitar:</b>
                                        </p>
                                        <p align="justify">
                                            • Designed event invitation templates and their preview screen using AngularJS, HTML5 and Bootstrap
                                        </p>
                                        <p align="justify">
                                            • Implemented REST APIs for event management using Spring MVC 
                                        </p>
                                        <p align="justify">
                                            • Enabled users to send invitations to their google contacts through Social Auth and Google+ API
                                        </p>
                                        <p>
                                            <b>Key Outcomes:</b> AngularJS, HTML5, Bootstrap, Spring, MySQL, Tomcat, Git
                                        </p>
                                        <p align="justify">
                                            <b><a href="http://cs557b-chat-application.herokuapp.com/">Chat Application</a></b>
                                        </p>
                                        <p align="justify">
                                            • Socket.IO with Node.js and Javascript
                                        </p>
                                        <p align="justify">
                                            <b><a href="http://cs557b-canvas-bouncingball-app.herokuapp.com/">Bouncing Ball</a></b>
                                        </p>
                                        <p align="justify">									
                                            • HTML5 Canvas and Javascript
                                        </p>
                                        <p align="justify" style="color: orangered;">
                                            Java, Spring, REST Services, Jsp, Servlet, Design Pattern, JDBC, MySql, AngularJS, Node.js, jQuery, Bootstrap, HTML5, CSS,
                                        </p>
                                    </div> 
                                    <div class="line"></div>
                                </div> 

                                <div class="experience clearfix">
                                    <div class="block">
                                        <span class="year">Apr 2012 - Oct 2014</span>
                                        <span class="company">Tailored Solutionts Pvt. Ltd.</span>
                                    </div> 
                                    <div class="content">
                                        <h5>PHP Software Developer</h5>
                                        <p align="justify">
                                            I started as a PHP Software Engineer for a backend team building client’s websites,  custom modules and plugins in php/joomla.
                                            Initially I worked on small tasks in core php  and  then I joined  joomla team and made various custom modules i.e.  search,authentication etc.
                                        </p>
                                        <p align="justify">
                                            After completing one year I was moved to company’s core product team to build custom jomsocial,k2,sobipro,jbolo extensions for joomla based mobile apps.
                                        </p>
                                        <p align="justify" style="color: orangered;">
                                            Joomla CMS, PHP, JavaScript, jQuery, AJAX, HTML, CSS, Bootstrap, Mysql, Svn
                                        </p>
                                    </div>
                                    <div class="line"></div>
                                </div>
                            </div> <!-- end .experience-timeline -->
                        </div> <!-- end .container -->
                    </section> <!-- end #section3 -->
                </div>
                <div class='item'>
                    <section id="section4" style='padding-top:30px;'>
                        <div class="container">
                            <h2>Education</h2>
                            <div class="education clearfix">
                                <div class="item">
                                    <div class="marker"></div>
                                    <div class="content" style='bottom:3px; height: 150px;'>
                                        <span>Charotar Institute Of Technology, Changa</span>
                                        <h4>Bachelor of Engineering in Information Technology </h4>
                                    </div>
                                    <div class="year">2007 - 2011</div>
                                </div> 

                                <div class="item">
                                    <div class="marker"></div>
                                    <div class="content" style='top:1px; height: 150px;'>
                                        <span>Online Courses</span>
                                        <h4>Udacity/Safari Online Courses</h4>
                                    </div>
                                    <div class="year">2016 - Present</div>
                                </div> 

                                <div class="item">
                                    <div class="marker"></div>
                                    <div class="content" style='bottom:1px; height: 150px;'>
                                        <span>Northwestern Polytechnic University, CA</span>
                                        <h4>Master of Science in Computer Science</h4>
                                    </div>
                                    <div class="year">2015 - 2016</div>
                                </div>
                                <div class="line"></div>
                            </div>
                            <h2>Course-work</h2>
                            <div class="experience clearfix">
                                <div class="block">
                                    <span class="year">Northwestern Polytechnic University</span>
                                </div> 
                                <div class="content">
                                    <h5></h5>
                                    <ul style="list-style-type:disc">
                                        <li>Advanced Structured Programming and Algorithms</li>
                                        <li>Web Front-end Programming for Mobile Devices
                                        <li>Data Modeling and Implementation Techniques</li>
                                        <li>Advanced Internet Programming and Design</li>
                                    </ul>
                                    <ul style="list-style-type:disc">
                                        <li>Mobile Applications on iPhone Platform</li>
                                        <li>Big Data Processing - MapReduce Programming</li>
                                        <li>Web Services Techniques and REST Technologies</li>
                                        <li>Software Quality Assurance and Test Automation</li>
                                    </ul>
                                </div>
                                <div class="line"></div>
                            </div> 

                            <div class="experience clearfix">
                                <div class="block">
                                    <span class="year">Udacity/Safari</span>
                                </div> 
                                <div class="content">
                                    <h5></h5>
                                    <ul style="list-style-type:disc">
                                        <li>Object Oriented Javascript</li>
										<li>Mastering CSS</li>
                                        <li>React.js</li>	
                                    </ul>
                                </div>
                                <div class="line"></div>
                            </div> 
                        </div> <!-- end .experience-timeline -->
                    </section> <!-- end #section4 -->
                </div>
            </div>	
            <div class="section-arrow">
                <div class="container">
                    <div class="row">
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <div class="row">
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Address</h4>
                                <p>San Rafael, CA-USA</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Connect</h4>
                                <p>
                                <div class="social-icon">
                                    <a href="https://www.linkedin.com/in/saloni-shah-0b9011111" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://github.com/saloni-shah" class="social-icon"><i class="fa fa-github fa-2x"></i></a>
                                </div>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4>Contact</h4>
                                <p>Mail:saloni.shah281@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </body>
</html>

