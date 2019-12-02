<!--
                                                                                                    
                                                                                                    
                                                                                                    
       `/shddho-   `/shddhs:   :hhhhhys:   /hhhhhhhh. -hhhhhhs/                                     
      `dMMhoodMm: `dMMhoodMMy  /MMNosdMMh  oMMm+++++` :MMNosdMMh                                    
      /MMm`  `.`  oMMd   `NMM: /MMm  `MMM- oMMNhhhhs  :MMN  `NMM:                                   
      /MMm   .+/. +MMd   `NMM- /MMm  `MMM- oMMm////:  :MMN  `NMM:                                   
      `yMMdosmMN: `hMMdosmMMs  /MMNssmMMy  oMMNsssss- :MMMssdMMy`                                   
       `:syhhyo.   `:syhhyo-   -yyyyyso-`  :yyyyyyyy: -yyyyyso-`                                    
                                                                                                    
                                                                                                    
      /mmmmmmmy- .ymmo  :dmd:                                                                       
      +MMm--yMMh  .yMMy/NMm:                                                                        
      +MMNddNMm:   `+NMMMh.                                                                         
      +MMm::+MMm.    oMMm`                                                                          
      +MMNyydMMm.    +MMd                                                                           
      -oooooo+/.     -oo+                                                                           
                                                                                                    
          `:::-     .:::    :::`     ::::       `:+o+:`   ::::::::::. `:::::::::    ./oo+-          
          oMMMm     oMMM:   NMM/    .MMMM-     -dMMMMMh`  MMMMMMMMMMs :MMMMMMMMM`  /mMMMMNs`        
          dMMMM-    oMMMd`  NMM/    +MMMMs    `mMMmmMMMs  MMMMMMMMMMs :MMMMMMMMM` .NMMmmMMM+        
         .MMMMMo    oMMMM+  NMM/    dMMMMm    -MMN.`sMMN  dmmNMMMmmmo :MMMs+++++` +MMd..hMMd        
         +MMhMMm    oMMMMN. NMM/   .MMmmMM-   /MMM/.-o+/  ```oMMM```  :MMM-       oMMN:.:o+:        
         dMM:NMM-   oMMMMMy NMM/   +MMyyMMo   .MMMMNh+.      +MMM`    :MMMsoooo/  :MMMMmh/`         
        .MMN`hMMo   oMMNMMM:NMM/   dMM//MMm    sMMMMMMm:     +MMM`    :MMMMMMMMy   hMMMMMMd-        
        +MMh +MMm   oMMdsMMdMMM/  .MMM``MMM-    /dNMMMMN`    +MMM`    :MMMNNNNNs   `omNMMMMd        
        dMMy/oMMM-  oMMd`NMMMMM/  +MMN//NMMo   ```-+mMMM/    +MMM`    :MMM/----.   ```:omMMM-       
       .MMMMMMMMMo  oMMd +MMMMM/  dMMMMMMMMm  ohds  `MMMo    +MMM`    :MMM-       yhd+  :MMM:       
       +MMMMMMMMMd  oMMd  dMMMM/ .MMMMMMMMMM- sMMN.`.MMM/    +MMM`    :MMMo/////` hMMd``/MMM.       
       dMMd+++sMMM. oMMd  -MMMM/ +MMN++++NMMo -MMMNhNMMm`    +MMM`    :MMMMMMMMM- /MMMmhNMMd        
      .MMM+   .MMMo oMMd   sMMM/ dMMh    hMMm  oMMMMMMN:     +MMM`    :MMMMMMMMM-  yMMMMMMm.        
      -sss.    oss+ :ss+   `sss- sss:    :sss`  :shdho.      :sss`    .sssssssss.   /yhdh+`         
                                                                                                    
                                                                                                    
-->
<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
// Remove Scripts
$doc = JFactory::getDocument();
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
?>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/design.css" type="text/css" />
<link rel="stylesheet" media="screen and (max-width:700px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/mobile.css" type="text/css" />
<link rel="stylesheet" media="screen and (min-device-width : 701px) and (max-device-width : 1024px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tab.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Roboto:400,700" rel="stylesheet"> 
<script src="https://use.fontawesome.com/a10c5d4576.js"></script>
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<div id="mainwrapper">
	<div id="topbar">
    	<div id="tpbar_left">
        	Follow us on: 
            <a href="https://www.facebook.com/KudumbashreeNRO/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCq8C-DWK9XY7Mhm7rFFh3LA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    	<div id="tpbar_right">
            <jdoc:include type="modules" name="topsearch" />
        </div>
    </div>
    <div id="stickymenu-anchor"></div>
    <div id="stickymenu">
    <!-- remove menu from here-->
    <!--<nav id='cssmenu'>
<div class="logo"><a href="index.php">KUDUMBASHREE NRO</a></div>
<div id="head-mobile"></div>
<div class="button"></div>
<ul>
<li class='active'><a href="index.php">Home</a></li>
<li><a href="#">About Us</a>
	<ul>
    	<li><a href="#">Why NRO</a></li>
        <li><a href="#">Our Team</a></li>
        <li><a href="#">Organizational Structure</a></li>
    </ul>
</li>
<li><a href="#">Programmes</a>
	<ul>
    	<li><a href="#">PRI-CBO Convergence</a>
        	<ul>
            	<li><a href="#">Special Projects</a></li>
            </ul>
        </li>
        <li><a href="#">Enterprise Project</a>
        	<ul>
            	<li><a href="#">MEC Project</a></li>
                <li><a href="#">SVEP</a></li>
            </ul>
        </li>
    </ul>
</li>
<li><a href="#">States</a>
	<ul>
    	<li><a href="#">Rajasthan</a></li>
        <li><a href="#">Gujarat</a></li>
        <li><a href="#">Maharashtra</a></li>
        <li><a href="#">Goa</a></li>
        <li><a href="#">Karnataka </a></li>
        <li><a href="#">Uttar Pradesh</a></li>
        <li><a href="#">Madhya Pradesh</a></li>
        <li><a href="#">Telangana</a></li>
        <li><a href="#">Andhra Pradesh</a></li>
        <li><a href="#">Chhattisgarh </a></li>
        <li><a href="#">Odisha</a></li>
        <li><a href="#">Sikkim</a></li>
        <li><a href="#">Bihar</a></li>
        <li><a href="#">Jharkhand</a></li>
        <li><a href="#">Assam</a></li>
        <li><a href="#">Tripura</a></li>
        <li><a href="#">Manipur</a></li>
        <li><a href="#">Lakshadweep </a></li>
        <li><a href="#">Kerala</a></li>
    </ul>
</li>
<li><a href="#">Resources</a>
	<ul>
    	<li><a href="#">PRI-CBO Convergence</a></li>
        <li><a href="#">Enterprise Development </a></li>
        <li><a href="#">SVEP</a></li>
        <li><a href="#">Annual Reports</a></li>
        <li><a href="#">Internship Reports</a></li>
        <li><a href="#">Others</a></li>
    </ul>
</li>
<li><a href="#">Learning Services</a></li>
<li><a href="#">Testimonials</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</nav>-->
<!-- remove menu upto here-->
    	<jdoc:include type="modules" name="mainmenu" />
    </div>
<!-- content starts -->
<jdoc:include type="component" />
<!-- content ends -->

    <!-- Footermenu section starts -->
    <div id="footermenu">
    	<ul class="footermenus">
        	<h3>About</h3>
            <li><a href="http://keralanro.org/index.php/about-us/why-nro">Why NRO</a></li>
            <li><a href="http://keralanro.org/index.php/about-us/concept">Concept</a></li>
            <li><a href="http://keralanro.org/index.php/about-us/evolution">Evolution</a></li>
            <li><a href="http://keralanro.org/index.php/about-us/organizational-structure">Organizational Structure</a></li>
            <li><a href="http://keralanro.org/index.php/about-us/our-team">Our Team</a></li>
        </ul>
    	<ul class="footermenus">
        	<h3>Programmes</h3>
            <li><a href="http://keralanro.org/index.php/programmes/pri-cbo-convergence">PRI-CBO Converegence</a></li>
            <li><a href="http://keralanro.org/index.php/programmes/special-projects">Special Projects</a></li>
            <li><a href="http://keralanro.org/index.php/programmes/enterprise-project">MEC Projects</a></li>
            <li><a href="http://keralanro.org/index.php/programmes/svep">SVEP</a></li>
            <li><a href="#">Programmes in States</a></li>
        </ul>
    	<ul class="footermenus">
        	<h3>Resources</h3>
            <li><a href="http://keralanro.org/index.php/resources/pri-cbo-convergence">PRI-CBO Converegence</a></li>
            <li><a href="http://keralanro.org/index.php/resources/enterprise-development">Enterprise Development</a></li>
            <li><a href="http://keralanro.org/index.php/resources/annual-reports">Annual Reports</a></li>
            <li><a href="http://keralanro.org/index.php/resources/internship-reports">Internship Reports</a></li>
            <li><a href="http://keralanro.org/index.php/resources/others">Others</a></li>
        </ul>
     	<ul class="footermenus">
        	<h3>What We Do</h3>
            <li><a href="#">Strengthening Participatory Governance</a></li>
            <li><a href="#">Improving Rural Livelihoods</a></li>
            <li><a href="#">Implementing Sustatinable Mechanisms</a></li>
            <li><a href="#">Sharing Knowledge</a></li>
            <li><a href="#">Providing Professional Support</a></li>
        </ul>
     	<ul class="footermenus">
        	<h3>Useful Links</h3>
            <li><a href="http://www.kudumbashree.org">Kudumbashree</a></li>
            <li><a href="http://thekudumbashreestory.info/">The Kudumbashree Story</a></li>
            <li><a href="https://kerala.gov.in">Government of Kerala</a></li>
            <li><a href="https://www.india.gov.in">Government of India</a></li>
            <li><a href="https://lsgkerala.gov.in">Dept. of Local Self Governemnt</a></li>
        </ul>
        <div class="footermenus">
        	<h3>FOLLOW US ON</h3>
            <a href="https://www.facebook.com/KudumbashreeNRO/"><i class="fa fa-facebook transit" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCq8C-DWK9XY7Mhm7rFFh3LA"><i class="fa fa-youtube-play transit" aria-hidden="true"></i></a>
            <a href="https://twitter.com/kudumbashreeNRO"><i class="fa fa-twitter transit" aria-hidden="true"></i></a>
            <h3>CONTACT US</h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i> 0471-2335714</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> keralanro@gmail.com</p>
        </div>
    </div>
    <!-- Footermenu section ends -->
    <!-- Footer section starts -->
    <div id="footer">
    	<ul id="footerlinks">
        	<li><a class="transit" href="index.php/privacy-policy">Privacy Policy</a></li>
            <li><a class="transit" href="index.php/sitemap">Sitemap</a></li>
            <li><a class="transit" href="index.php/terms-of-use">Terms of Use</a></li>
            <li><a class="transit" href="index.php/administrator">Staff Login</a></li>
        </ul>
    	<div id="copyright"><p>&copy; <?php echo date('Y') ?> Kudumbashree NRO. All Rights Reserved.</p></div>
        <div id="sitedeveloper"><a href="https://www.binalyto.com">Website Designed, Developed and Hosted by BINALYTO</a></div>
    </div>
    <!-- Footer section ends -->
</div>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/menustick.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/menu.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/font.js"></script>
</body>
</html>