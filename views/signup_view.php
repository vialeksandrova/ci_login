<div id="signup_view">
<h1>Create an account</h1>
<?php echo form_open('login/create_member'); 
echo form_input('username',set_value('username','Username'));
echo form_input('password',set_value('password','Password'));
echo form_input('passwordconf',set_value('passwordconf','Confirm password'));

echo form_submit('submit','Create Account');
?>

<?php echo validation_errors();?>
</div>
