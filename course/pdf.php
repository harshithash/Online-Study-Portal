<?php
$link = $_GET['link'];
echo "<object data=\" ".$link."\" type=\"application/pdf\" width=\"100%\" height=\"100%\">
  <p>Alternative text - include a link <a href=\"".$link."\">to the PDF!</a></p>
</object>";

?>