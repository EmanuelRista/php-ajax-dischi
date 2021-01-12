<!-- Ciao ragazzi! L'esercizio per il pomeriggio e' il seguente:
repo: php-ajax-dischi
Stampare a schermo una decina di dischi musicali ( le cui informazioni sono reperibili qui https://flynn.boolean.careers/exercises/api/array/music ) in due modi diversi ( per differenziare, create una sotto-cartella per ognuna delle soluzioni )
Generare tramite PHP una pagina HTML che mostra questi dati; opzionalmente potete associare uno stile che renda il layout piu leggibile
Generare tramite PHP una risposta in formato JSON che contiene questi dati; come test di funzionamento, deve risultare che intercambiando l'endpoint citato sopra con il vostro endpoint locale, la web app che avete pushato nel repo vue-dischi funzioni allo stesso modo nei due casi
Opzionale (ma altamente raccomandato):
Rispetto alla seconda richiesta, implementare lato client un elemento grafico che permetta all'utente di impostare un frammento testuale su cui effettuare lato server un filtraggio dei dati; il client deve quindi trasferire al server il frammento testuale e il server deve rispondere al client con i soli dati che soddisfano il filtro.
Buon lavoro, a lunedi! :laptop_parrot: -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP dischi</title>
</head>

<body>
  <?php
  include_once('data.php');

  foreach ($call['response'] as $value) {
  ?>

    <div class="card">
      <img src=" <?= $value['poster'] ?> " alt="">
      <div class="info">
        <h2> <?= $value['title'] ?> </h2>
        <p> <?= $value['author'] ?> </h3>
        <p> <?= $value['genre'] ?> </h4>
        <p> <?= $value['year'] ?> </p>
      </div>
    </div>

  <?php } ?>

  <style>
    .card {
      display: inline-block;
      width: calc((100% / 5) - 15px);
      background-color: purple;
      margin: 5px;
      vertical-align: bottom;
    }

    img {
      width: 100%;

    }

    .info {
      text-align: center;
      color: white;
    }
  </style>
</body>

</html>