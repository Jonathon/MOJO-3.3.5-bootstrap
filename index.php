<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mojo App</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,500|Montserrat:400,700' rel='stylesheet' type='text/css'>
     <!-- Bootstrap -->
    <link href="_/css/bootstrap.min.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id ="home">
    <section class="container">
    		<div class="content row">
          <?php include "_/components/php/header.php";?>	
          <?php include "_/components/php/snippet-carousel.php"; ?>
          <section class="main col col-lg-8">
          <?php include "_/components/php/article-intro.php"; ?>
		    		
				</section><!-- Main col -->
        
	    		
	    		<section class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-register.php"; ?>
         <?php include "_/components/php/aside-faq.php"; ?>
	    			


	    		</section><!-- sidebar col -->	
    		</div><!-- content row -->
        <?php include "_/components/php/footer.php"; ?>
    	</section><!-- container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) included in js folder
     -->

    <script src="_/js/jquery-min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap-min.js"></script>
    <script src="_/js/myjavascript-min.js"></script>
  </body>
</html>
