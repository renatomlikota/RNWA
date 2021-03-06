<!DOCTYPE html>
<html>
<head>
  <title>World database</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
  <div class="navbar-content">
    <a href="/world-database" class="navbar-logo button"><strong>World database</strong></a>
    <div class="navbar-items">
      <input type="search" id="search" name="search" placeholder="Pretraga baza"/>
      <a href="#najpoznatije-baze" class="bar-item button">Najpoznatije baze</a>
      <a href="#definicija" class="bar-item button">Definicija</a>
      <a href="#kontakt" class="bar-item button">Kontakt</a>
    </div>
  </div>
</nav>

<header class="header" id="najpoznatije-baze">
  <div class="display-middle margin-top center">
    
  </div>
</header>

<main class="content padding" style="max-width:1564px">
<div class="container padding-32 search-result">
    <h3 class="border-bottom border-light-grey padding-16">Rezultat pretrage:</h3>
    <div class="search-result-data"></div>
  </div>

  <div class="container padding-32" id="definicija">
    <h3 class="border-bottom border-light-grey padding-16">Najpoznatije baze podataka</h3>
  </div>
  <div class="row-padding">
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <a href="https://www.oracle.com/database/" target="_blank" class="block is-centered black padding-16">Oracle</a>
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <a href="https://www.mysql.com/" target="_blank" class="block is-centered black padding-16">MySQL</a>
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <a href="https://www.microsoft.com/en-us/sql-server/sql-server-downloads" target="_blank" class="block is-centered black padding-16">Microsoft SQL Server</a>
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <a href="https://www.postgresql.org/" target="_blank" class="block is-centered black padding-16">PostgreSQL</a>
      </div>
    </div>
    <img src="images/Most Popular Databases In the World.jpg" class="image db-image" alt="Najpopularnije baze podataka" />
  </div>
    </div>
  </div>
  <div class="container padding-32" id="uvod">
    <h3 class="border-bottom border-light-grey padding-16">Definicija baza podataka</h3>
    <p>
      Jedna od mogu??ih definicija baze podataka glasi da je to zbirka zapisa pohranjenih u ra??unalu na sustavan na??in, tako da joj se ra??unalni program mo??e obratiti prilikom odgovaranja na problem. Svaki se zapis za bolji povratak i razvrstavanje obi??no prepoznaje kao skup elemenata (??injenica) podataka. Predmeti vra??eni u odgovoru na upitnike postaju informacije koje se mogu koristiti za stvaranje odluka koje bi ina??e mogle biti mnogo te??e ili nemogu??e za stvaranje. Ra??unalni program kori??ten za upravljanje i ispitivanje baze podataka nazvan je sustav upravljanja bazom podataka (SUBP). Svojstva i dizajn sustava baze podataka uklju??eni su u prou??avanje informati??ke znanosti. Baza podataka je organizirani skup podataka. Termin je izvorno nastao unutar ra??unalne industrije, a njegovo se zna??enje pro??irilo popularnom uporabom toliko da Europska direktiva za baze podataka (koja za baze podataka donosi prava za intelektualno vlasni??tvo) uklju??uje i neelektronske baze podataka unutar svoje definicije. Ovaj ??lanak je ograni??en vi??e na tehni??ku upotrebu termina, iako ??ak i me??u ra??unalnim profesionalcima neki pripisuju mnogo ??ire zna??enje rije??i od drugih.
    </p>
  </div>
  <div class="container padding-32" id="kontakt">
    <h3 class="border-bottom border-light-grey padding-16">Kontakt ??lanova tima</h3>
    <p>Email: mlikota.renato@gmail.com </p>
    <p>Email: juresarac98@gmail.com </p>
    <p>Github: https://github.com/renatomlikota/RNWA</p>
  </div>
</main>

<footer class="footer">
  <p>World database 2022.</p>
</footer>

<!-- <script src="scripts/db-search.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="scripts/db-search-jquery.js"></script> -->
<!-- <script type="text/javascript" src="https://unpkg.com/axios@0.25.0/dist/axios.min.js"></script>
<script src="scripts/db-search-axios.js"></script> -->
<script src="scripts/db-search-fetch.js"></script>
</body>
</html>
