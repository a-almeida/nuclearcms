<html>
<body>
	<h1><?php echo sprintf(lang('email_activate_heading'), $identity);?></h1>
	<p><?php echo sprintf(lang('email_activate_subheading'), anchor('manager/users/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
</body>
</html>