<style>
	table tr td{
		border: 1px solid #000;
		padding: 5px;
	}
</style>
<?php

$response = json_decode( file_get_contents('https://brasilapi.com.br/api/banks/v1') , true);

if(!empty($response)){

	$table = "<table><tr><td>ispb</td><td>name</td><td>code</td><td>full name</td></tr>";

	foreach ($response as $record) {

		$table .= "<tr><td>".$record['ispb']."</td><td>".$record['name']."</td><td>".$record['code']."</td><td>".$record['fullName']."</td></tr>";

	}
	$table .= "</table>";
	echo $table;
}
