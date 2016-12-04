<?php
include 'dhb.inc.php';

if (isset($_POST['search'])) {
	$srch = $_POST['search'];
	$output = "";

	$query = mysql_query("SELECT * FROM qa WHERE q LIKE '%$srch%' OR a LIKE '%$srch%'") or die("Could Not Search!");
	$cont = mysql_num_rows($query);

	if ($cont == 0) {
		$output = "There was no matching search results for ".$srch;
	} else {
		while ($row = mysql_fetch_array($query)) {
			qres = $row['q'];
			ares = $row['a'];

			$output .= ""
		}
	}
}
