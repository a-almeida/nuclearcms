{assign var=subheading value=t(login_subheading)}
{assign var=heading value=t(login_heading)}
{assign var=loginlab value=t(login_identity_label)}
{assign var=passlab value=t(login_password_label)}
{assign var=formopen value=form_open("users/login")}
{assign var=forminput value=form_input($identity)}
{assign var=forminput2 value=form_input($password)}
{assign var=formsubmit value=form_submit('success',lang('login_submit_btn'),"class='btn btn-success' style='width:100%'")}
{assign var=formclose value=form_close()}
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
			   <div class="panel-heading">
					<h1 style="font-weight:bold;border-bottom:1px solid #4d4d4d">{$heading}</h1>
					<p>{$subheading}</p>
					</div>
					<div id="infoMessage ">
						{if isset($message)}
						<div class="alert alert-danger" role="alert">{$message}</div>
						{/if}
					</div>
				  	<div class="panel-body">
					{$formopen}
					  <p>
					    {$loginlab}
					  	{$forminput}
					  </p>
					  <p>
					  	{$passlab}
					  	{$forminput2}
					  </p>
					  <p>{$formsubmit}</p>
					{$formclose}
				</div>
			</div>
		</div>