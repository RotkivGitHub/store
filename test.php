

<?php
echo 'Hello, dear';

require_once 'User.php';

$user = new User ();

echo $user->name;
//echo $user->$age;
//echo $user->name;

echo  '<br>'.$user->getAge();

echo '<br>'.User::HelloWorld();



