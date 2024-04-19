<?php
// enter password or name is same or not 

$name = "harsh fatepara";
$email = "harshfatepara8484@gmail.com";
$p = "harsh@8484";
$password = crypt($p, "pass");


$name1= readline("enter your name ");
$email1= readline("enter your email ");
$p1= readline("enter your password");
$password1 = crypt($p1,"pass");

if($name==$name1){
    print("name is valid").PHP_EOL;
    if ($email==$email1) {
        print("email is valid")>PHP_EOL;
        if ($password==$password1) {
            print("password is valid").PHP_EOL;
        }
        else{
            print("password is not valid");
        }
    }
    else{
    print("email is not valid");
    }
}
else{
print("user not found");
}


?>