<?php
$to = 'bok@annstal.pl';
$subject = 'Formularz ze strony Annstal.pl';
$message = $_POST['message']."\nADRES: ".$_POST['address']." \nTELEFON: ".$_POST['contact']." \nNIP: ".$_POST['nip']." \nNAZWA FIRMY: ".$_POST['name'];
$headers = 'FROM'." ". $_POST['email'];

if(mail($to, $subject, $message, $headers))
	echo 'Dziękujemy za wiadomość - odpowiemy tak szybko, jak to możliwe.';
else
	echo 'Błąd przesyłania wiadomości. Prosimy o kontakt telefoniczny.';
echo '<br><br> <a href="index.php">POWRÓT DO STRONY GŁÓWNEJ</a>';
?>