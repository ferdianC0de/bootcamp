<?php
function is_username_valid($username)
{
  $illegal_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ01234566789#$%^&*()+=-[]';,./{}|:<>?~ ";
  if (strlen($username) > 5 && strlen($username) < 9) {
    if (!(strpbrk($username, $illegal_chars)) ) {
      return true;
    }
  }
  return false;
}

function is_password_valid($password)
{
  $specials_chars = " #$%^&*()+=-[]';,./{}|:<>?~";
  if (strlen($password) >= 8) {
    if (ereg('[0-9]', $password) && ereg('[a-z]', $password) && ereg('[A-Z]', $password) && (strpbrk($password, $specials_chars))) {
      return true;
    }
  }
  return false;
}
?>
