<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Administrator</title>

<link href="<?php echo config_item('css');?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo config_item('css');?>datepicker3.css" rel="stylesheet">
<link href="<?php echo config_item('css');?>styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Login Administrator</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url('admin/autentikasi');?>">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<button type="submit" class="btn btn-primary btn-block" >Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	<script src="<?php echo config_item('js');?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo config_item('js');?>bootstrap.min.js"></script>
	<script src="<?php echo config_item('js');?>chart.min.js"></script>
	<script src="<?php echo config_item('js');?>chart-data.js"></script>
	<script src="<?php echo config_item('js');?>easypiechart.js"></script>
	<script src="<?php echo config_item('js');?>easypiechart-data.js"></script>
	<script src="<?php echo config_item('js');?>bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
