<?php // checkuser.php
  require_once 'functions.php';

  if (isset($_POST['user']))
  {
    $user   = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->num_rows)
      echo  "<span class='taken'>&nbsp;&#x2718; " .
            "Эта кличка уже забита! Поздняк метаться.</span>";
    else
      echo "<span class='available'>&nbsp;&#x2714; " .
           "Эта кличка звучит авторитетно!</span>";
  }
?>
