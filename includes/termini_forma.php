<body>
  <link rel="stylesheet" href="css/termin.css" type="text/css">
</body>
<form method="POST" action="unos_termina_spremi.php" class="form" action="unos_termina_spremi.php">
  <h2>Rezerviraj termin</h2>
  <p type="Ime i prezime:"><input placeholder="Upiši svoje ime i prezime ovdje.." name="ime_prezime_pacijenta" required></input></p>
  <p type="Opis problema:"><input placeholder="Opišite svoj problem.." name="opis_problema" required></input></p>
  <p type="Datum rođenja:"><input type="date" name="datum_rodenja" required> </input></p>
  <p type="Vrijeme i datum termina?:"><input name="datum_termina" type="date" required></input></p>
  <p type="Boj mobitela:"><input name="broj_telefona" placeholder="Upišite broj mobitela.." required></input></p>
  <p type="Spol:">
      <select name="spol_pacijenta" id="spol" style="width:200px;">
        <option value="musko">Muško</option>
        <option value="zensko">Žensko</option>
    </p>
</select>

</div>
  <button name="submit" type="submit">Rezerviraj</button>
  <div class="text">Vrati se na početnu.
    <a href="index.php" class="text">Početna</a>
</div>
</form>