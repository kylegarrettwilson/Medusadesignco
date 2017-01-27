<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "a.sale@cbsnet.it";

# SUBJECT (Subscribe/Remove)
$subject = "Notify Subscription";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['email']." \n";
# add more fields here if required

## SEND MESSAGE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

echo '<script language="javascript">';
echo 'alert("Your subscription has been registered.");';
echo 'window.location.href="index.html";';
echo '</script>';

?>