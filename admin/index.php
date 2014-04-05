<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>Dashboard - Sign Me Up</title>
	<meta name="description" content="ACME Dashboard Bootstrap Admin Template." />
	<meta name="author" content="Łukasz Holeczek" />
	<meta name="keyword" content="ACME, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="css/style.min.css" rel="stylesheet" />
	<link href="css/style-responsive.min.css" rel="stylesheet" />
	<link href="css/retina.css" rel="stylesheet" />
	<!-- end: CSS -->

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="ico/favicon.png" />
	<!-- end: Favicon and Touch Icons -->
	
		
		
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
		<?php
        //header
        include('includes/header.php');
        ?>
	
		<div class="container-fluid">
		<div class="row-fluid">

			<?php
			//sidebar
			include('includes/sidebar.php');
			?>
			
			
			<noscript>
				<div class="alert alert-block span11">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span11">
			
			<!-- start: Table -->
				<div class="row-fluid">		
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Forms Created</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Form Title</th>
								  <th>Date Created</th>
								  <th>Created By</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>Anton Phunihel</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Alphonse Ivo</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Thancmar Theophanes</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
								
							</tr>
							<tr>
								<td>Walerian Khwaja</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Clemens Janko</td>
								<td class="center">2012/02/01</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Chidubem Gottlob</td>
								<td class="center">2012/02/01</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Hristofor Sergio</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Tadhg Griogair</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Pollux Beaumont</td>
								<td class="center">2012/01/21</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Adam Alister</td>
								<td class="center">2012/01/21</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Carlito Roffe</td>
								<td class="center">2012/08/23</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Sana Amrin</td>
								<td class="center">2012/08/23</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Adinah Ralph</td>
								<td class="center">2012/06/01</td>
								<td class="center">Admin</td>
								<td class="center">
									<span class="label">Inactive</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Dederick Mihail</td>
								<td class="center">2012/06/01</td>
								<td class="center">Admin</td>
								<td class="center">
									<span class="label">Inactive</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Hipólito András</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Fricis Arieh</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Scottie Maximilian</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Bao Gaspar</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Tullio Luka</td>
								<td class="center">2012/02/01</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Felice Arseniy</td>
								<td class="center">2012/02/01</td>
								<td class="center">Admin</td>
								<td class="center">
									<span class="label">Inactive</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Finlay Alf</td>
								<td class="center">2012/02/01</td>
								<td class="center">Admin</td>
								<td class="center">
									<span class="label">Inactive</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Theophilus Nala</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Sullivan Robert</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Kristóf Filiberto</td>
								<td class="center">2012/01/21</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Kuzma Edvard</td>
								<td class="center">2012/01/21</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Bünyamin Kasper</td>
								<td class="center">2012/08/23</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Crofton Arran</td>
								<td class="center">2012/08/23</td>
								<td class="center">Staff</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Bernhard Shelah</td>
								<td class="center">2012/06/01</td>
								<td class="center">Admin</td>
								<td class="center">
									<span class="label">Inactive</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Grahame Miodrag</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Innokentiy Celio</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
							<tr>
								<td>Kostandin Warinhari</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 

									</a>
								</td>
							</tr>
							<tr>
								<td>Ajith Hristijan</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Pending</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon trash halflings-icon"></i> 
										
									</a>
								</td>
							</tr>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			<!-- End: Table -->
						
			
			
			<?php
			//anaylitics
			include('includes/anaylitics.php');
			?>
			

<a id="widgets-area-button" class="hidden-tablet hidden-phone open"><i class="fa-icon-reorder"></i></a>				
				</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		<?php
        //footer
        include('includes/footer.php');
        ?>
		
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
		
		<script src="js/gauge.min.js"></script>

		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/raphael.2.1.0.min.js"></script>
	<script src="js/justgage.1.0.1.min.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/core.min.js"></script>
	
		<script src="js/charts.js"></script>
	
		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>