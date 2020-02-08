<?php
function count_vowels($str)
{
  $splits = str_split($str);
  $counted_chars = "aiueo";
  $count = 0;

  foreach ($splits as $split) {
    if ((strpbrk($split, $counted_chars))) {
      $count ++;
    }
  }

  return $count;
}
?>
