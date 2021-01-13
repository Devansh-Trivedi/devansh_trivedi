<?php

$Name = $_REQUEST['Name'];
$Email = $_REQUEST['Email'];
$Subject = $_REQUEST['Subject'];
$Message = $_REQUEST['Message'];

if(empty($Name) && empty($Email) && empty($Subject) && empty($Message)){
    echo   "Please fill all the fields";
}
else{
    mail("tridevansh.160601@gmail.com", "Message From Personal website", $Message, "From: $name <$Email>");
    echo "<script type='text/javascript'> alert('Your Message sent successfully');
            window.history.log(-1);
            </script>";
}

?>