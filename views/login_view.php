<div id="login_view">
<?php echo form_open('login/validation'); ?><!--така се създават форми тук-->
<h1>Login</h1>
<div><input type="text" name="username" placeholder="Username" /></div><br/><!--може и с php form_input-->
<div><input type="password" name="password" placeholder="Password" /></div><br/><!--може и с php form_password-->
<div>
<input type="submit" value="Login"/>
<input type="submit" name="sbm" value="Create Account"/>
</div><!--може и с php form_submit-->
</div>
