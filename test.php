<?php
if (!(isset($_COOKIE["session_hash"]))) {
  $sessionHash = mt_rand();
  setcookie('session_hash', $sessionHash, time() + (86400 * 3), '/');
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>raw html</h1>
  <h1><?php echo "Это строка, добавленная c помощью PHP в HTML файле."; ?></h1>
</body>

</html>