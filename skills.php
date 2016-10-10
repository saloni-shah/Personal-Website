<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Saloni Shah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
   
        </script>
        <style>
            .main{
                position: relative;
            }
         .container-fluid {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: orangered;
            
        }

        li {
            float: center;
        }

        li a {
            
            color: white !important;
            text-align: center;
            font-size: 18px;
            margin-right: 15px !important;
           
            
        }
        .navbar-inverse .navbar-brand{
            color: white !important;
            font-size: 25px !important;
            margin-left: 15px !important;
        }
        .navbar-contact{
            color: white; 
            font-size: 15px;
            margin-left: 395px;
            display:inline-block;
            text-align: center;
        }
        .navbar-connect{
            color: white; 
            font-size: 15px;
            margin-right: 395px;
            float: right;
            display:inline-block;
            text-align: center;
        }

        li a:hover:not(.active) {
            background-color: grey !important;
        }
        li a:active {
            background-color: grey !important;
        }

      
        .nav navbar-nav{
            width: 100% !important;
        }
        h2{
            font-size: 44px;
            
            
        }
        .row{
            
            width: 100% !important;
            float: center;
            
        }
        .cvbuttons{
             text-align: center;
        }
        .row p{
             text-align: justify;
        }
        img{
            float: right;
           
            width: 480px !important;
            height: 580px !important;
        }
        ul {
           
            display: inline-block;
            *display: inline;
            zoom: 1;
        }
        ul.anotherList li{
             margin-left: 50px;
            
        }
        ul, li{
         margin:0px;
         
         padding:0 0 0 15px;    
        }

        .lower{
            float: left;
            margin: 0 20px 0 0;
        }
        .lower p,ul{
            margin: 0 20px 0 0;
            margin-left: 30px;
            padding:0 0 0 15px;
        }
        
       
        </style>
    </head>
    <body>
        <?php

        ?>
        <div class ="main">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#"> Saloni Shah</a>
                </div>
        
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                  <li><a href="about.html#section2" class="smoothScroll">ABOUT</a></li>
                  <li><a href="skills.php">SKILLS</a></li>
                  <li><a href="#">EXPERIENCE</a></li>
                  <li><a href="#">EDUCATION</a></li>
                  <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
         </nav>
      <div class="sections">
        <section id="section1" class="no-padding-bottom active" style='padding-top:5px;'>
            <div class="container">
                <div class="row">
                    <p><b>MY EXPERTISE AND SKILLS</b></p>
                    <div class="upper">
                    
                    <p><b>AREAS OF EXPERTISE</b></p>
                    <ul style="list-style-type:disc">
                        <li>WEB DEVELOPMENT</li>
                        <li>DATABASE</li>
                        <li>UI</li>
                    </ul>
                    
                    <ul class="anotherList" style="list-style-type:disc">
                        <li>IPHONE APP DEVELOPMENT</li>
                        <li>BIG DATA</li>
                        <li>PUBLIK SPEAKING,PRESENTATION</li>
                    </ul>
                    </div>
                    <br>
                    <p><b>TECHNICAL SKILLS</b></p>
                    <div class="lower">
                    
                    <p><b>PROGRAMMING</b></p>  
                        <ul style="list-style-type:disc">
                            <li>PYTHON</li>
                            <li>PHP</li>
                            <li>JAVA</li>
                            <li>SWIFT</li>
                            <li>MAPREDUCE</li>
                            <li>REST WEB SERVICES</li>
                            <li>SERVLETS</li>
                            <li>JSP</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVASCRIPT</li> 
                            <li>JQUERY</li>                       
                        </ul>
                    </div>
                    
                   <div class="lower">
                       <p><b>FRAMEWORKS</b></p>
                        <ul style="list-style-type:disc">
                            <li>JUNIT</li>
                            <li>BOOTSTRAP</li>
                            <li>SPRING IOC</li>
                            <li>SPRING AOP</li>
                            <li>SPRING JDBC</li>
                            <li>JOOMLA</li>
                        </ul>
                   </div>
                   <div class="lower">
                       <p><b>DATABASES & ENVIRONMENTS</b></p>
                        <ul style="list-style-type:disc">
                            <li>MYSQL</li>
                            <li>ORACLE</li>
                            <li>GIT</li>
                            <li>MAVEN</li>
                            <li>ECLIPSE</li>
                            <li>NETBEANS</li>
                            <li>SUBLIME</li>
                        </ul>
                    
                    </div>
                  
                </div>
                
            </div>
        </section>
      </div>
         <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container-fluid">
                <div class="navbar-contact">
                  <p>CONTACT</p>
                  <p>Mail: saloni.shah281@gmail.com</p>
                </div>
        
                <div class="navbar-connect">
                    <p>CONNECT</p>
                    <p>
                    <a class="btn btn-primary" href="https://www.linkedin.com/in/saloni-shah-0b9011111" role="button">Linkedin</a>
                    </p>
                </div>
            </div>
         </nav>
        
        </div>
    </body>
</html>
