<HTML>
<BODY>
<FORM METHOD="POST" ACTION="FormErrorCheck.php">
<H1>Contact Information</H1>
<TABLE>

<TR>
  <TD><B>Nickname:</B></TD>
  <TD><INPUT TYPE="TEXT" NAME="nickname"></TD>
</TR>

<TR>
  <TD>Title:</TD>
  <TD><INPUT TYPE="TEXT" NAME="title"></TD>
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
  <TD>Company Name:</TD>
  <TD><INPUT TYPE="TEXT" NAME="companyname"></TD>
</TR>

<TR>
  <TD>Office Address:</TD>
  <TD><INPUT TYPE="TEXT" NAME="officeaddres1"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>Home Address:</TD>
  <TD><INPUT TYPE="TEXT" NAME="homeaddress"></TD>
</TR>

<TR>
  <TD></TD>
  <TD><INPUT TYPE="TEXT" NAME="officeaddress2"></TD>
</TR>

<TR>
  <TD>City:</TD>
  <TD><INPUT TYPE="TEXT" NAME="officecity"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>&nbsp;</TD>
  <TD><INPUT TYPE="TEXT" NAME="homecity"></TD>
</TR>

<TR>
  <TD>State:</TD>
  <TD><INPUT TYPE="TEXT" NAME="officestate"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>&nbsp;</TD>
  <TD><INPUT TYPE="TEXT" NAME="homestate"></TD>
</TR>

<TR>
  <TD>Zip:</TD>
  <TD><INPUT TYPE="TEXT" NAME="officezip"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>&nbsp;</TD>
  <TD><INPUT TYPE="TEXT" NAME="homezip"></TD>
</TR>

<TR>
  <TD>Phone:</TD>
  <TD><INPUT TYPE="TEXT" NAME="officephone"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>&nbsp;</TD>
  <TD><INPUT TYPE="TEXT" NAME="homephone"></TD>
</TR>

<TR>
  <TD>Birthday:</TD>
  <TD><INPUT TYPE="TEXT" NAME="birthday"></TD>
</TR>

<TR>
  <TD>Spouse Name:</TD>
  <TD><INPUT TYPE="TEXT" NAME="spousename"></TD>
  <TD WIDTH="20">&nbsp;</TD>
  <TD>Childrens' Names:</TD>
  <TD><INPUT TYPE="TEXT" NAME="children"></TD>
</TR>

<TR>
  <TD>Anniversary:</TD>
  <TD><INPUT TYPE="TEXT" NAME="anniversary"></TD>
</TR>

</TABLE>

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

<!-- FormErrorCheck.php
<HTML>
<BODY>
<?php

  $errors=0;
  if (!trim($nickname)) {
      echo "<BR><B>Nickname</B> is required.";
     $errors++;
  }
 
  if (!trim($firstname)) {
      echo "<BR><B>First name</B> is required.";
     $errors++;
  }
 
  if (!trim($lastname)) {
      echo "<BR><B>Last name</B> is required.";
      $errors++;
  }
 
  if (!trim($email)) {
      echo "<BR><B>Primary email address</B> is required.";
      $errors++;
  }

  if ($errors > 0)
      echo "<BR><BR><BR>Please use your browser's back button " .
        "to return to the form, and correct error(s)";
 
?>

</BODY>
</HTML>
-->
