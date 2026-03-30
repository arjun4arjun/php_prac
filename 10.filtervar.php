<?php
$mail='haihawai@vacation.com';
$mail_sanitize=filter_var($mail, FILTER_SANITIZE_EMAIL);
if(filter_var($mail_sanitize, FILTER_VALIDATE_EMAIL)){
echo "$mail is valid";
}
else {
echo "Invalid mail address $mail";
}
?>
