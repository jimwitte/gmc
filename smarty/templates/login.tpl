{include file='header.tpl' title=$title}
<div class="container">
<form method="post" action="" class="form-signin">
	<h2 class="form-signin-heading">Please sign in</h2>
	<input type="text" id="name" name="name" value="buffalo" disabled="disabled" class="form-control" placeholder="username" required autofocus>
	<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Continue</button>
</form>
</div>
{include file='footer.tpl'}
