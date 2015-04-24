<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>IEEE: Bangalore</title>
  <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"  /> 
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"  />
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
<div id="overlay"></div>
   <div id="header"> 
      <img src="../img/ieeelogo.jpg"> 
      <div id="headerText"> 
        <h1 id="head"> Bangalore Section </h1>
        <h2 id="subhead"> SAC Collaboration Platform </h2>
      </div>
      <?php 
        session_start();

        $username = $_SESSION["username"];

        if(isset($_SESSION["id"])){
          echo "<p id='status'>Logged in as $username (<a href='../php/logout.php'>Log Out</a>) </p>";
        }
      ?>
    </div>
		
     <div class="header">
      <a class="menu-icon" href="#" style="text-indent:.5em">  Menu  <i class="fa fa-bars"></i></a>
        <div id="sideBarOverlay"></div>
        <ul class="side-menu">
          <h2 class="title"><b></b></h2> 
          <li class="row" >
            <ul>
              <li class="metro white half"><a href="../html/index.php"><i class="fa fa-home" > <div class="font1"><b> Home </b></div></i></a></li>
              <li class="metro white half"><a href="../html/gini.php"><i class="fa fa-institution"><div class="font1">GINI Banglore</div></i></a></li>
            </ul>
          </li>
          <li class="row">
            <ul>
              <li class="metro white half"><a href="../html/report.php"><i class="fa fa-pencil-square-o"><div class="font1">Report</div></i></a></li>
              <li class="metro white half"><a id="resources"><i class="fa fa-inbox"><div class="font1">Resources</div></i></a></li>
              <div id="resourceList" class="menuList"><ul><li id="member">Members</li><li id="execom">EXECOM</li><a href="resources.php?section=web"><li id="webmaster">Webmaster</li></a></ul></div>
              <div id="memberOptions" class="menuList subList"><ul><a href="resources.php?section=members&subs=mail"><li>IEEE Email Alias</li></a><a href="resources.php?section=members&subs=dell"><li>IEEE Dell ERP</li></a><a href="resources.php?section=members&subs=microsoft"><li>IEEE Microsoft Alliance</li></a><a href="http://www.ieee.org/membership_services/membership/rupee_join_option.html"><li>Rupee Payment</li></a><!--<li>Conferences</li>--></ul></div>
              <div id="execomOptions" class="menuList subList"><ul><a href="resources.php?section=exec&subs=news"><li>News Letters</li></a><a href="resources.php?section=exec&subs=annualReport"><li>Annual Report Submission</li></a><a href="http://www.ieee.org/societies_communities/geo_activities/required_reporting/officer_forms.html"><li>Reporting new EXECOM</li></a><a href="resources.php?section=exec&subs=md"><li>MD Kit</li></a><a href="http://www.ieee.org/about/toolkit/tools/index.html#sect3"><li>IEEE Toolkit - Website</li></a></ul></div> 
            </ul>
          </li>
          <li class="row">
            <ul>
              <!-- <li class="metro white half"><a href="#"><i class="fa fa-calendar"><div class="font1">Events</div></i></a></li> -->
              <li class="metro white half"><a href="../html/register.php"><i class="fa fa-plus"><div class="font1">Register</div></i></a></li>
			 
    <!--  </ul>
          </li>
          <li class="row">
            <ul>
              <li class="metro white half"><a href="#"><i class="fa fa-phone"><div class="font1">Contact</div></i></a></li> -->
             
              <li class="metro white half"><a id="links"><i class="fa fa-bookmark"><div class="font1">Links</div></i></a></li>
              <div id="linksList" class="menuList"><ul><a href="http://www.ieee.org/"><li>IEEE</li></a><a href="http://www.r10sac.org/"><li>R10 SAC</li></a><a href="http://delhi.r10sac.org/"><li>GINI Delhi</li></a><a href="http://hyderabad.r10sac.org/"><li>GINI Hyderabad</li></a><a href="http://pakistan.r10sac.org/"><li>GINI Pakistan</li></a></ul></div>
            </ul>
          </li>
	    
        </ul>
      </div>
      
      
