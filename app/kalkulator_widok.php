<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/kalkulator.php" method="post">
	<label for="kwota">Kwota kredytu: </label>
	<input id="id_kw" type="text" name="kwota" value="<?php if(isset ($kwota))print($kwota); ?>" /><br />
	<label for="id_cz">Czas spłaty: </label>
	<select name="czas">
		<option value="6m">6 miesięcy</option>
		<option value="12m">12 miesięcy</option>
		<option value="2r">2 lata</option>
		<option value="3r">3 lata</option>
		<option value="5r">5 lat</option>
		<option value="10r">10 lat</option>
		<option value="15r">15 lat</option>
		<option value="20r">20 lat</option>
		<option value="25r">25 lat</option>
	</select><br />
	<label for="id_op">Oprocentowanie (w %): </label>
	<input id="id_op" type="text" name="oprocentowanie" value="<?php if(isset ($oprocentowanie))print($oprocentowanie); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($kw_calkowita)&&isset($rata)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Kwota całkowita: '.$kw_calkowita;?></br>
<?php echo 'Miesięczna rata wynosi: '.number_format ( $rata, 2 ); ?>
</div>
<?php } ?>

</body>
</html>