<?php
  $db_server   = 'localhost';
  $db_user     = 'marek';
  $db_password = 'Vulve9Power54';
  $db_name     = 'portfolio';

  try
  {
		$mdb = mysqli_connect(
			$db_server, 
			$db_user, 
			$db_password, 
			$db_name
		);
  }
  catch (mysqli_sql_exception $wyj)
  {
		$wyj_wiadomosc = $wyj->getMessage();
		$wyj_numer     = $wyj->getCode();
		echo "<p>Wyjatek info: $wyj_wiadomosc | numer: $wyj_numer</p>"; 
		die('Blad polaczenia z serwerem baz danych. Koniec aplikacji.');
	  //exit('Blad polaczenia z serwerem baz danych. Koniec aplikacji.');
    //exit(1);
  }
  