<?php  

echo "<h1>Daftar Menu</h1>";

$cireng = 'Rp. 1000';
$duren = 'Rp. 15000';
$milo = 'Rp. 20000';
$teh = 'Rp. 5000';
$piscok = 'Rp. 1000';

echo 
"
<table border cellspacing='2'>
	<tr>
		<th>No</th>
		<th>Nama Menu</th>
		<th>Harga</th>
	</tr>

	<tr>
		<td>1</td>
		<td>Cireng</td>
		<td>$cireng</td>
	</tr>

	<tr>
		<td>2</td>
		<td>Es Durian</td>
		<td>$duren</td>
	</tr>

	<tr>
		<td>3</td>
		<td>Es Milo</td>
		<td>$milo</td>
	</tr>

	<tr>
		<td>4</td>
		<td>Es Teh</td>
		<td>$teh</td>
	</tr>

	<tr>
		<td>5</td>
		<td>Piscok</td>
		<td>$piscok</td>
	</tr>
</table>
";

?>