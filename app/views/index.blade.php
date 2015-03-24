<!DOCTYPE html>
<html>
<head>
	<title>Simple Blogging | with laravel and jQuery</title>
	<?php echo  HTML::script('assets/js/jquery.js');  ?>
	<?php echo  HTML::script('assets/js/script.js');  ?>
	<?php echo  HTML::script('assets/js/bootstrap.min.js');  ?>
	<?php echo HTML::style('assets/css/bootstrap.css');  ?>
</head>
<body data-url="<?php echo URL::to('/') ?>">
    <?php if(! Auth::check() ): ?>
    	@include('login')
    <?php else: ?>
    	@include('logout')
    <?php endif; ?>
</body>
</html>