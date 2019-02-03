<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ankieta</title>
</head>

<body>
	
	Witamy w naszej ankiecie!<br /><br />
	<form action="index.php" method="post"> 
	Imię:<br /> 
	<input type="text" name="imie" /><br /> 
	Nazwisko:<br /> 
	<input type="text" name="nazwisko" /><br /> 
	Oto pytania:<br /><br />
	
	<form action="checkbox-form.php" method="post">
	
	1. Czy często korzystasz z portali społecznościowych?

	
  <label><input type="radio" name="ankieta" value="Tak"/> Tak</label>

  <label><input type="radio" name="ankieta" value="Tak" /> Nie</label>
  
  <br /><br />
  
	
	
	2. Z jakich najczęściej?
	
	<label><input type="radio" name="ankieta2" value="Tak"/> Facebook</label>

	<label><input type="radio" name="ankieta2" value="Tak" /> Instagram</label>

	<label><input type="radio" name="ankieta2" value="Tak" /> Twitter</label>
	
	
	<br /><br />
	
	
	
	3. Ile czasu (dziennie) spędzasz na portalach internetowych?
	
	<label><input type="radio" name="ankieta3" value="Tak"/> Mniej niż 2 godziny</label>

	<label><input type="radio" name="ankieta3" value="Tak" /> Więcej niż 2 godziny</label>
	
	<br /><br />
	
	
	
	4.Czy posiada Pani/Pan konto na jakimkolwiek portalu społecznościowym?
	
		<label><input type="radio" name="ankieta4" value="Tak"/> Tak</label>

		<label><input type="radio" name="ankieta4" value="Tak" /> Nie</label>
		
	<br /><br />
	
	5.Czy korzysta Pani/Pan z urządzeń mobilnych do przeglądania portali społecznościowych?
	
		<label><input type="radio" name="ankieta5" value="Tak"/> Tak</label>

		<label><input type="radio" name="ankieta5" value="Tak" /> Nie</label>
	
	<br /><br />
	
	
	
	6.Czy uległa Pani/Pan kiedykolwiek reklamie w internecie?
	
	<label><input type="radio" name="ankieta6" value="Tak"/> Tak</label>

	<label><input type="radio" name="ankieta6" value="Tak" /> Nie</label>
	
	<br /><br />
	
	7.Czy bierze Pani/Pan udział w konkursach w internecie?
	
	<label><input type="radio" name="ankieta7" value="Tak"/> Tak</label>

	<label><input type="radio" name="ankieta7" value="Tak" /> Nie</label>
	
	<br /><br />
	8.Czy czyta Pani/Pan artykuły sponsorowane w internecie?
	
	<label><input type="radio" name="ankieta8" value="Tak"/> Tak</label>

	<label><input type="radio" name="ankieta8" value="Tak" /> Nie</label>
	<br /><br />
	9. Czy pozytywnie podchodzi Pani/Pan do reklam na serwisach społecznościowych? 
	
		<label><input type="radio" name="ankieta9" value="Tak"/> Tak</label>
		<label><input type="radio" name="ankieta9" value="Tak"/> Nie</label>
	
	<br /><br />
	10. Jakie rodzaje reklam podobają się Panu/Pani najbardziej?
		
		<label><input type="radio" name="ankieta10" value="Tak"/> Filmiki</label>
		<label><input type="radio" name="ankieta10" value="Tak"/> Zdjęcia</label>
	
	<br /><br />
	
	<input type="submit" value="Wyślij" /> 
</form>

</body>
</html>



