<?php
$str = "<b><u>Everything for you, I do it for you</u></b>";
echo $str."<br>";

echo strip_tags ($str). "<br>";
echo strip_tags ($str,"<u>")."<br>";
echo htmlspecialchars ($str)."<br>";
echo htmlentities ($str);