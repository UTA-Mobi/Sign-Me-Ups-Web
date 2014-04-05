<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign Me Ups - Create Forms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/lib/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="bootstrap-classic-theme" href="" rel="stylesheet">
    <link href="assets/css/custom.css?v=2" rel="stylesheet">
	 <link href="css/bootstrap.css" rel="stylesheet">
	    <!-- Add custom CSS here -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>
    <?php
		//navigation
		include_once('includes/navbar.php');
		?>
		
    <div class="container">
      <div class="row">
	  
	  <div class="col-lg-12">
            <h1>Create Form <small>Drag & Drop</small></h1>
            <ol class="breadcrumb">
			 <li ><i class="fa fa-dashboard"></i> Dashboard</li>
             <li class="active"><i class="fa fa-dashboard"></i> Create Form</li>
            </ol>
            
          </div>
		  <hr/>
        <!-- Building Form. -->
        <div class="col-md-6">
          <div class="clearfix">
           
            <div id="build">
              <form id="target" class="form-horizontal">
              </form>
            </div>
          </div>
		  <br>
		  <center>
		  <a class="btn btn-success " href="#">Save</a>
		  <a class="btn btn-danger " href="#">Delete</a>
		  </center>
        </div>
        <!-- / Building Form. -->
		
        <!-- Components -->
        <div class="col-md-6">
		<div class="clearfix">
         
          <div class="tabbable">
            <ul class="nav nav-tabs" id="formtabs">
              <!-- Tab nav -->
            </ul>
            <form id="components" class="form-horizontal">
              <fieldset>
                <div class="tab-content">
                  <!-- Tabs of snippets go here -->
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- / Components -->

      </div>

      

    </div> <!-- /container -->

    <script data-main="assets/js/main-built.js" src="assets/js/lib/require.js?v=3" ></script>
  </body>
</html>
