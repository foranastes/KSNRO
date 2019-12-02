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
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/design.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/slide.core.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/slide.theme.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/carousel.min.css" type="text/css" />
<link rel="stylesheet" media="screen and (max-width:700px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/mobile.css" type="text/css" />
<link rel="stylesheet" media="screen and (min-device-width : 700px) and (max-device-width : 1024px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tab.css" type="text/css" />
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Roboto:400,700" rel="stylesheet"> 
<script src="https://use.fontawesome.com/a10c5d4576.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/slide.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/countercall.js"></script>
</head>
<body>
<div id="mainwrapper">
	<div id="topbar">
    	<div id="tpbar_left">
        	Follow us on: 
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    	<div id="tpbar_right">
            <jdoc:include type="modules" name="topsearch" />
        </div>
    </div>
    <div id="stickymenu-anchor"></div>
    <div id="stickymenu">
    	<jdoc:include type="modules" name="mainmenu" />
    </div>
    <div id="slide">
    <div id="slidegrade"></div>
		<div id="Glide" class="glide">
    		<div class="glide__wrapper">
        		<ul class="glide__track">
        			<?php /*?><jdoc:include type="modules" name="slide" /><?php */?>
                    <!-- slide editable code-->
<ul>
<li class="nroslide"><img src="images/slide0.jpg" />
<h3 class="slideh">Kudumbashree National Resource Organization<br><span style="font-size:20px;">Sharing experiences from Kerala with partner states</span></h3>
<div class="slidegrade2"></div>
</li>
<li class="nroslide"><img src="images/slide2.jpg" />
<h3 class="slideh">Strengthening Institutional Platforms for Participatory Governance</h3>
<div class="slidegrade2"></div>
</li>
<li class="nroslide"><img src="images/slide3.jpg" />
<h3 class="slideh">Promoting Sustainable Rural Enterprises</h3>
<div class="slidegrade2"></div>
</li>
<li class="nroslide"><img src="images/slide4.jpg" />
<h3 class="slideh">Sharing Learnings Through Exposure Visits</h3>
<div class="slidegrade2"></div>
</li>
<li class="nroslide"><img src="images/slide1a.jpg" />
<h3 class="slideh">Progressing In Partnerships</br><span style="font-size:20px;">Presence in seventeen states and one union territory</span></h3>
<div class="slidegrade2"></div>
</li>
<li class="nroslide"><img src="images/slide5.jpg" />
<h3 class="slideh">Developing Resources Based On Innovations And Practices</h3>
<div class="slidegrade2"></div>
</li>
</ul>
                    <!-- slide editable code-->
       	 		</ul>
    		</div>
   			 <div class="glide__bullets"></div>
		</div>
        <i class="fa fa-angle-double-down fa-3x" aria-hidden="true"></i>
    </div>
    <!-- About section starts -->
    <div id="aboutrow">
    	<div id="abttxt">
        	<p>Kudumbashree National Resource Organization (KS NRO) is an institution recognized by the Ministry of Rural Development (MoRD), Government of India to provide technical and implementation assistance to the State Rural Livelihood Missions (SRLMs) across India. KS-NRO has been working with partner-SRLMs on mainly two domains.</p>
            <ul>
            	<li>Convergence between Panchayat Raj Institutions (PRIs) and Community Based Organisations (CBOs)</li>
                <li>Enterprise Development</li>
            </ul>
            <p>The PRI-CBO Convergence project focuses on enabling the working together of PRI and CBO to strengthen access to entitlements and enhance community participation in local governance.
The Enterprise Development project focuses on creating community-based enterprise support systems at the local level in the form of Micro Enterprise Consultants (MECs) for helping poor people set up and run their own enterprises.</p>
        </div>
        <div id="abtlogo">
        	<img src="images/logo.png" />
        </div>
    </div>
    <!-- About section ends -->
    <!-- Whatwedo section ends -->
    <div id="whatwerow">
    	<h3 class="whatwetitles"><strong>WHAT WE</strong> DO</h3>
        <ul>
        	<div class="owl-one owl-carousel">
            	<a href="index.php/about-us/what-we-do"><li class="whatwecol">
                	<div class="whatwethumb"><img src="images/thumbs/whatwe1.jpg" /></div>
                    <p>Strengthening participatory governance</p>
                </li></a>
                <a href="index.php/about-us/what-we-do"><li class="whatwecol">
                	<div class="whatwethumb"><img src="images/thumbs/whatwe2.jpg" /></div>
                    <p>Improving rural livelihoods</p>
                </li></a>
                <a href="index.php/about-us/what-we-do"><li class="whatwecol">
                	<div class="whatwethumb"><img src="images/thumbs/whatwe3.jpg" /></div>
                    <p>Fostering innovations</p>
                </li></a>
                <a href="index.php/about-us/what-we-do"><li class="whatwecol">
                	<div class="whatwethumb"><img src="images/thumbs/whatwe4.jpg" /></div>
                    <p>Sharing knowledge</p>
                </li></a>
                <a href="index.php/about-us/what-we-do"><li class="whatwecol">
                	<div class="whatwethumb"><img src="images/thumbs/whatwe5.jpg" /></div>
                    <p>Providing professional support</p>
                </li></a>
            </div>
        </ul>
    </div>
    <!-- Whatwedo section ends -->
    <!-- Impact section starts -->
    <div id="impactrow">
    	<h3 class="sectitles">OUR IMPACT <strong>SINCE 2013</strong></h3>
    	<ul>
    	<div class="owl-two owl-carousel">
        	<li class="impactcol">
            	<i class="fa fa-map-marker" aria-hidden="true"></i>
				<span class="counter">17</span>
                <span class="impacttext">States</span>
            </li>
        	<li class="impactcol">
            	<i class="fa fa-puzzle-piece" aria-hidden="true"></i>
				<span class="counter">91</span>
                <span class="impacttext">Districts</span>
            </li>
        	<li class="impactcol">
            	<i class="fa fa-th-large" aria-hidden="true"></i>
				<span class="counter">282</span>
                <span class="impacttext">Blocks</span>
            </li>
        	<li class="impactcol">
            	<i class="fa fa-university" aria-hidden="true"></i>
				<span class="counter">8119</span>
                <span class="impacttext">Grama Panchayats</span>
            </li>
        	<li class="impactcol">
            	<i class="fa fa-users" aria-hidden="true"></i>
				<span class="counter">3766</span>
                <span class="impacttext">Community Resource Persons</span>
            </li>
        	<li class="impactcol">
            	<i class="fa fa-users" aria-hidden="true"></i>
				<span class="counter">146</span>
                <span class="impacttext">Mentors</span>
            </li>
		</div>
        </ul>
    </div>
    <!-- Impact section ends -->
    <!-- News section starts -->
    <div id="newsrow">
    	<h3 class="awardtitle"><strong>WHAT'S</strong> NEW</h3>
        <jdoc:include type="modules" name="news" />
        <a href="index.php/news" class="readmore transit">READ MORE NEWS</a>
    </div>
    <!-- News section ends -->
    <!-- stories from fields section starts -->
    <div id="storiesrow">
    	<h3 class="storiestitle"><strong>STORIES</strong> FROM FIELDS</h3>
        <jdoc:include type="modules" name="stories" />
        <a href="index.php/stories" class="readmore transit">EXPLORE MORE STORIES</a>
    </div>
    <!-- stories from fields section ends -->
    
    <!-- Partner section starts -->
    <div id="partnerrow">
    	<h3 class="parttitles">OUR <strong>PARTNERS</strong></h3>
        <ul>
        	<div class="owl-three owl-carousel">
            	<li class="partnercol"><img src="images/partners/1.png" /></li>
                <li class="partnercol"><img src="images/partners/2.png" /></li>
                <li class="partnercol"><img src="images/partners/3.png" /></li>
                <li class="partnercol"><img src="images/partners/4.png" /></li>
                <li class="partnercol"><img src="images/partners/5.png" /></li>
                <li class="partnercol"><img src="images/partners/6.png" /></li>
                <li class="partnercol"><img src="images/partners/7.png" /></li>
                <li class="partnercol"><img src="images/partners/8.png" /></li>
                <li class="partnercol"><img src="images/partners/9.png" /></li>
                <li class="partnercol"><img src="images/partners/10.png" /></li>
                <li class="partnercol"><img src="images/partners/11.png" /></li>
                <li class="partnercol"><img src="images/partners/12.png" /></li>
                <li class="partnercol"><img src="images/partners/13.png" /></li>
                <li class="partnercol"><img src="images/partners/14.png" /></li>
            </div>
        </ul>	
    </div>
    <!-- Partner section ends -->
    <!-- Awards section starts -->
    <div id="awardsrow">
    	<h3 class="awardtitle"><strong>AWARDS</strong> AND <strong>ACHIEVEMENTS</strong></h3>
        <ul>
        	<div class="owl-four owl-carousel">
                <li class="awardscol">
                	<img src="/images/award3.jpg">
                    <h3>Toolkit for PRI-CBO Convergence model</h3>
                    <p>Toolkit for PRI-CBO Convergence model and a trainers manual for Community professionals for Convergence (CPC)  being released by Mr Amarjeet Sinha, Secretary, Rural Development, Government of India. </p>
                </li>
            	<li class="awardscol">
                	<img src="images/awards/award.jpg">
                    <h3>Kudumbashree NRO wins award</h3>
                    <p>Kudumbashree NRO wins award for its outstanding contribution under DAY NRLM.</p>
                </li>
                <li class="awardscol">
                	<img src="images/awards/award2.jpg">
                    <h3>NRO to support more than 120000 entrepreneurs under SVEP</h3>
                    <p>Start-up Village Entrepreneurship program to be implemented by KS NRO IN 53 blocks and 8 states</p>
                </li>
            </div>
        </ul>
    </div>
    <!-- Awards section ends -->
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
            <a href="#"><i class="fa fa-facebook transit" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram transit" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-play transit" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter transit" aria-hidden="true"></i></a>
            <h3>CONTACT US</h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i> 0494-2855248</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> contact@kudumbashreenro.org</p>
        </div>
    </div>
    <!-- Footermenu section ends -->
    <!-- Footer section starts -->
    <div id="footer">
    	<ul id="footerlinks">
        	<li><a class="transit" href="#">Privacy Policy</a></li>
            <li><a class="transit" href="#">Sitemap</a></li>
            <li><a class="transit" href="#">Terms of Use</a></li>
            <li><a class="transit" href="#">Behind the Website</a></li>
            <li><a class="transit" href="index.php/administrator">Staff Login</a></li>
        </ul>
    	<div id="copyright"><p>&copy; <?php echo date('Y') ?> Kudumbashree NRO. All Rights Reserved.</p></div>
    </div>
    <!-- Footer section ends -->
</div>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/menustick.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/menu.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/slideload.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/arrowanmtn.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/carousel.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/carouselcall.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/scripts/jquery.counterup.js"></script>
</body>
</html>