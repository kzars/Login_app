<?php


require 'includes/functions.php';
include_once 'config.php';

$newid = uniqid(rand(), false);
$name = $_POST['name'];
$surname = $_POST['surname'];
$newuser = $_POST['newuser'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];

if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules
if ($pw1 != $pw2) {

    echo '<div>Password fields must match</div><div id="returnVal" style="display:none;">false</div>';

} elseif (strlen($pw1) < 4) {

    echo '<div>Password must be at least 4 characters</div><div id="returnVal" style="display:none;">false</div>';

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    echo '<div>Must provide a valid email address</div><div id="returnVal" style="display:none;">false</div>';

} else {
    //Validation passed
    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {

        $a = new NewUserForm;

        $response = $a->createUser($name, $surname, $newuser, $newid, $newemail, $newpw);

        //Success
        if ($response == 'true') {

            echo '<div>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';

            //Send verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid, 'Verify');

        } else {
            //Failure
            mySqlErrors($response);

        }
    } else {
        //Validation error from empty form variables
        echo 'An error occurred on the form... try again';
    }
};
