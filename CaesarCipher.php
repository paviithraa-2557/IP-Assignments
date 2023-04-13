<?php

function encrypt($text, $s)
{
  $result = "";
  for ($i = 0; $i < strlen($text); $i++)
  {
    if (ctype_upper($text[$i]))
      $result = $result.chr((ord($text[$i]) + $s - 65) % 26 + 65);
    else
      $result = $result.chr((ord($text[$i]) + $s - 97) % 26 + 97);
  }
  return $result;
}

function decrypt($text, $shift) 
{
$result = "";
$len = strlen($text);
  for ($i = 0; $i < $len; $i++) {
    $c = $text[$i];
    if (ctype_alpha($c)) 
    {
      $base = ctype_lower($c) ? 'a' : 'A';
      $c = chr((ord($c) - ord($base) - $shift + 26) % 26 + ord($base));
      }
    $result .= $c;
}
  return $result;
}

$text = "HARVEY";
$s = 7;
echo "Text : " . $text;
echo "\nShift: " . $s;

$encodetext=encrypt($text, $s);
echo "\nCipherText: $encodetext" ;
$orginaltext=decrypt($encodetext,$s);
echo "\nBack to original: $orginaltext";


?>
