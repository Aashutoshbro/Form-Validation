<?php if($form_errors): ?>
<UL>
<?php foreach($form_errorlist as $val): ?>
<LI><?php echo $val;?>
<?php endforeach; ?>
</UL>
<?php endif; ?>

Please fill out the following form (* = Required)<BR>
<FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
<INPUT TYPE="hidden" NAME="submit" VALUE="1">
<INPUT TYPE="hidden" NAME="required" VALUE="phone,email,fax">
<INPUT TYPE="hidden" NAME="phone_desc" VALUE="Phone Number">
<INPUT TYPE="hidden" NAME="email_desc" VALUE="Email Address">
<INPUT TYPE="hidden" NAME="fax_desc" VALUE="Fax Number">
Your Name: <INPUT TYPE="text" NAME="name"><BR>
* Your Phone Number:
<INPUT TYPE="text" NAME="phone" VALUE="<?php echo $_GET['phone']; ?>"><BR>
* Your Email Address:
<INPUT TYPE="text" NAME="email" VALUE="<?php echo $_GET['email']; ?>"><BR>
* Your Fax Number:
<INPUT TYPE="text" NAME="fax" VALUE="<?php echo $_GET['fax']; ?>"><BR>
<INPUT TYPE="submit" VALUE="Send">
</FORM>
