<HTML>
<BODY>
<FORM METHOD="POST" ACTION="FormDataValidationWithErrorCount.php">
<H1>Contact Information</H1>
<TABLE>

<TR>
  <TD><B>Nickname:</B></TD>
  <TD><INPUT TYPE="TEXT" NAME="nickname"></TD>
</TR>

<TR>
  <TD><B>First Name:</B></TD>
  <TD><INPUT TYPE="TEXT" NAME="firstname"></TD>
</TR>

<TR>
  <TD>Middle Name:</TD>
  <TD><INPUT TYPE="TEXT" NAME="middlename"></TD>
</TR>

<TR>
  <TD><B>Last Name:</B></TD>
  <TD><INPUT TYPE="TEXT" NAME="lastname"></TD>
</TR>

<TR>
  <TD><B>Primary Email:</B></TD>
  <TD><INPUT TYPE="TEXT" NAME="email"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>Secondary Email:</TD>
  <TD><INPUT TYPE="TEXT" NAME="secondaryemail"></TD>
</TR>

<TR>
  <TD></TD>
  <TD><INPUT TYPE="TEXT" NAME="officeaddress2"></TD>
</TR>

<BR>
<BR>
<BR>
<INPUT TYPE="SUBMIT" VALUE="Submit">
<BR>
<BR>
<INPUT TYPE="RESET"  VALUE="Clear the Form">

</FORM>
</BODY>
</HTML>


<!-- FormDataValidationWithErrorCount.php
<?php
  function validate_form(){
      global $nickname, $firstname, $lastname, $email;

      $errors=0;
      if (!trim($nickname)) 
      {
          echo "<BR><B>Nickname</B> is required.";
          $errors++;
      }
     
      if (!trim($firstname))
      {
          echo "<BR><B>First name</B> is required.";
          $errors++;
      }
     
      if (!trim($lastname))
      {
          echo "<BR><B>Last name</B> is required.";
          $errors++;
      }
     
      if (!trim($email))
      {
          echo "<BR><B>Primary email address</B> is required.";
          $errors++;
      }
    
      switch ($errors){
          case 0:
                  return TRUE;

          case 1:
                  echo "<BR><BR><BR>Please use your ";
                  echo "browser's back button to return to ";
                          echo "the form, correct the error, and ";
                          echo "re-submit the form.";
                  return FALSE;

          default:
                  echo "<BR><BR><BR>Please use your ";
                  echo "browser's back button to return to ";
                          echo "the form, correct the errors, and ";
                          echo "re-submit the form.";
                  return FALSE;
      }
}

function update_database(){
   echo "<BR>Updating database....";
}

$ok = validate_form();
if ($ok)
    update_database();

?>

</BODY>
</HTML>


-->
