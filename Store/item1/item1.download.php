<?php
header("Content-disposition: attachment; filename=item1.content.txt");
header('Content-type: text/plain');
readfile('item1.content.txt');
?>
