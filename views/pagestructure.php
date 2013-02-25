<?php
/* Page Controller */
//This controls the structure of the pages
?>

<div id="page_controller" class="fixed-floater row-fluid" style="z-index:200; top:0px;">
	<?php //include('pages/home.php'); ?>
	<div class="inner-page span9">
		<div class="" style="z-index:200;">
	        <div class="navigation row-fluid">
	            <ul id="navigation-buttons" class="nav nav-pills row-fluid">
	                <li class="span3">
	                    <a href='#home' data-toggle="tab" >Situs Herbalis</a>
	                </li>
	                <li class="span3">
	                    <a href='#goodtoknow' data-toggle="tab">Good To Know</a>
	                </li>
	                <li class="span3">
	                    <a href='#goodtogo' data-toggle="tab">Good To Go</a>
	                </li>
	                <li class="span3">
	                    <a href='#googlemap' data-toggle="tab">Find Us</a>
	                </li>
	            </ul>
	            <div class="span3 copyright pull-right">
	            	2013 © <a href="http://www.karmava.com/" target="_blank">ipeqi & KarmaVA</a>
	            </div>
	        </div>

	        <div class="row-fluid pages tab-content">
	            <?php include('views/pages/home.php'); ?>
	            <?php include('views/pages/goodtoknow.php'); ?>
	            <?php include('views/pages/goodtogo.php'); ?>
	            <?php include('views/pages/googlemap.php'); ?>
	        </div>

	    </div>
	</div><!-- inner-page -->
</div>