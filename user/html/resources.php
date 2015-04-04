<?php

include 'header.php';

?>

<link rel="stylesheet" type="text/css" href="../css/style_resources.css">

<div class="container">

<?php

if($_GET["section"] == "members" && $_GET["subs"] == "mail"){

?>

	<section id="para">

		<h1> IEEE Email Alias </h1>

		<p>Being a member of IEEE entitles you to have a FREE IEEE Email Alias. This exclusive member benefit identifies you as an IEEE member with an @ieee.org email address while forwarding all incoming mail to your mentioned personal email account.</p>

		<p>You can manage your IEEE email alias by following the below links :</p>

		<ul>

		    <li> Register for an IEEE Alias ><a href="https://eleccomm.ieee.org/aliases/register.shtml">Click Here</a> </li>
    		<li> Lookup your IEEE Alias  ><a href="https://eleccomm.ieee.org/aliases/lookup.shtml">Click Here</a> </li>
    		<li> Update your IEEE Alias  ><a href="https://eleccomm.ieee.org/aliases/update.shtml">Click Here</a> </li>
    		<li> Delete your IEEE Alias  ><a href="https://eleccomm.ieee.org/aliases/delete-alias.shtml">Click Here</a> </li>
 
     	</ul>

     	<p> To Send E mails Through IEEE E mail ALIAS  > <a href="http://bit.ly/send_using_ieee_mail_alias">Click Here</a> </p>
	</section>


<?php

} else if($_GET["section"] == "members" && $_GET["subs"] == "microsoft"){

?>
	
	<section id="para">

		<h1> IEEE Microsoft Alliance </h1>

		<h3>IEEE, in conjunction with Microsoft, is pleased to offer a wide selection of development software to IEEE Student members and Graduate Student members.</h3>

		<h4>Software highlights include:</h4>

		<ul>
			<li>Vista Business Edition</li>
    		<li>Visual Studio Team System - "Top of the line" professional development tool</li>
    		<li>Expression Web Designer</li>
    		<li>Project Professional 2007</li>
    		<li>Visio 2007</li>
    		<li>Windows OS</li>
    	</ul>

    	<p>A complete list of the software currently available is provided <a href="http://www.ieee.org/documents/software_list_4.22.08.xls">here</a>.</p>

    	<p>Members who have not yet availed this offer are requested to contact the member service at member-services@ieee.org</p>

	</section>

<?php

} else if($_GET["section"] == "members" && $_GET["subs"] == "dell"){

?>
	
	<section id="para">

		<h1> IEEE DELL ERP </h1>

		<p>The Dell Employee Purchase Program (EPP) enables IEEE members to purchase Dell Home products at great discounts off regular pricing. On top of the discounted price, members can get additional savings from special values and promotions that can include electronics, accessories and customization. Check the EPP discounts against Dell's publicly advertised prices and you will qualify for whichever price is less at that time.</p>

		<h3> For more details : <a href="http://www.ieee.org/secure/documents/epp_india_promo.pdf">CLICK HERE</a> (Log in Required) </h3>

	</section>

<?php

} else if($_GET["section"] == "exec" && $_GET["subs"] == "news"){

?>

	<section id="para">

		<h1> News Letters </h1>

		<p>An event is incompete without being told about its success and the extent of its outreach. IEEE News letters play an important role by giving a platform to showcase the branch events on national and global scale.</p>

		<p>Following are the email IDs for which Branch event details have to be mailed as and when it happens.</p>

		<p>All Photographs should be in JPEG format</p>

		<h2>R10 Newsletter : <a href="mailto:r10-ecn@ieee.org">r10-ecn@ieee.org</a></h2>

		<h2>India Council News Letters : <a href="mailto:hmehta@ieee.org">hmehta@ieee.org</a></h2>

	</section>

<?php	
} else if($_GET["section"] == "exec" && $_GET["subs"] == "annualReport"){

?>
	
	<section id="para">

		<h1>Branch Activity Report</h1>

		<p>Activities have to be reported online. These are considered for funding a student branch by the IEEE HQ. The Web Form to report student branch activity is provided below. You will need your IEEE web account username and password to log in.</p>

		<p>URL : <a href="http://sbr.vtools.ieee.org">http://sbr.vtools.ieee.org</a></p>

		<h3>Send a copy to:</h3>
		
		<ol>
			<li>Takao Onoye   : <a href="mailto:rsac-r10@ieee.org">rsac-r10@ieee.org</a></li>
			<li>Om Perkash Batra : <a href="mailto:rsr-r10@ieee.org">rsr-r10@ieee.org</a></li>
			<li>Bangalore section  :  <a href="mailto:ddas@iiitb.ac.in">ddas@iiitb.ac.in</a></li>
		</ol>

	</section>
<?php

} else if($_GET["section"] == "exec" && $_GET["subs"] == "md"){

?>
	
	<section id="para">

		<h1>Membership Development Kit</h1>

		<p>IEEE has introduced a new process to order the Membership Development Kit. The MD kits can be ordered as required and can be used during the annual, fest, conferences, symposium, etc.. Only a Student branch Counselor or the chairman can place the MD Kit order.</p>

		<p>The kit contains Membership recruitment brochure, information sheets, posters, flypers, IEEE pens, etc.</p>

		<p>To order the MD Kit : <a href="http://ewh.ieee.org/forms/md/supplies.php">CLICK HERE</a></p>

		<h3 class="kit"> Event Kit (e.g., Conferences, Congresses, Tradeshows, etc)</h3>

		<table>
			<tr><th></th><th>Small</th><th>Large</th></tr>
			<tr><td>Page Membership Flyer</td><td>0</td><td>200</td></tr>
			<tr><td>Professional Grade Membership Application Pad</td><td>1</td><td>2</td></tr>
			<tr><td>Promotional Poster for IEEE Membership</td><td>5</td><td>5</td></tr>
			<tr><td>MGM Flyer</td><td>10</td><td>15</td></tr>
			<tr><td>MGM Business Card</td><td>50</td><td>75</td></tr>
			<tr><th colspan="3">Assorted IEEE Give-Aways</th></tr>
			<tr><td>Bumper Stickers</td><td>20</td><td>50</td></tr>
			<tr><td>Assorted Bookmarks</td><td>25</td><td>50</td></tr>
			<tr><td>IEEE Magnets</td><td>10</td><td>25</td></tr>
			<tr><td>IEEE Cup Cozie</td><td>10</td><td>25</td></tr>
			<tr><td>IEEE Flag for Table Top Display</td><td>1</td><td>2</td></tr>
		</table>

		<h3 class="kit"> Meeting Kit (e.g, Section, Regional, Society or Leadership meetings) </h3>

		<table>
			<tr><th></th><th>Small</th><th>Large</th></tr>
			<tr><td>Membership Recruitment Brochure</td><td>10</td><td>20</td></tr>
			<tr><td>Higers Grade Membership Application Pad</td><td>1</td><td>1</td></tr>
			<tr><td>Promotional Poster for IEEE Membership</td><td>2</td><td>5</td></tr>
			<tr><td>MGM Flyer</td><td>5</td><td>10</td></tr>
			<tr><td>MGM Business Card</td><td>25</td><td>50</td></tr>
			<tr><th colspan="3">Assorted IEEE Promotional Items</th></tr>
			<tr><td>Bumper Stickers</td><td>15</td><td>25</td></tr>
			<tr><td>Foam Puzzles</td><td>5</td><td>10</td></tr>
			<tr><td>Assorted Bookmarks</td><td>10</td><td>15</td></tr>
			<tr><td>First Year Member Cards and Envelope</td><td>1 set</td><td>1 set</td></tr>
			<tr><td>First Year Member Flyer</td><td>1</td><td>1</td></tr>
			<tr><td>myIEEE Information Sheet</td><td>5</td><td>10</td></tr>
			<tr><td>IEEE.tv Information Sheet</td><td>5</td><td>10</td></tr>
		</table>

	</section>

<?php

} else if($_GET["section"] == "web"){

?>
	<section id="para">

		<h1>Website (EWH)</h1>

		<p>Entity Web Hosting (EWH) service is intended to meet the needs of the IEEE Student Branches/Entities who want to develop, create and maintain their own web site on an IEEE host, EWH will provide the webspace abd many other resources for FREE to be used by the Studet Branches.</p>

		<p>Student Branches are expected to choose a single webmaster who is skilled in managing web content. This webmaster will be the entity contact and the only one authorized to post content to the web site. The webmaster will be expected to work with IEEE staff to insure that site security measures are effective.</p>

		<h3>Note:</h3>

		<ul>
			<li>This service can be requested ONLY by the IEEE Student Branch Chair or Counselor</li>
    		<li>EWH supports only WordPress Installation ( Recommended )</li>
    	</ul>

    	<p>So student branches are advised to make use of this service by migrating from a private host to EWH and save on their annual expenses.</p>

    	<ul>
    		<li>To request a hosting account ><a href="http://ewh.ieee.org/index.php?option=com_content&task=view&id=31&Itemid=58">Click Here</a></li>
    		<li>To request a URL Redirect ><a href="http://www.ieee.org/go/redirects">Click Here</a></li>

	</section>

<?php

}

?>

</div>

<?php

include 'footer.php';

?>