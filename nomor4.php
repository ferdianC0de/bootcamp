<?php
function replace_string($str, $alph, $repl)
{
  $splits = str_split($str);
  $strrepl = "";
  foreach ($splits as $split) {
    if ($split == $alph) {
      $split = $repl;
    }
    $strrepl = $strrepl.$split;
  }
  return $strrepl;
}
?>
