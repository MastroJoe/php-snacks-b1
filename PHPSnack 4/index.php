<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$studentiClasse = [
    [
      "nome" => "Giorgio",
      "cognome" => "Pignattari",
      "voti" => [6,8,7,8,7,7,7]
    ],
    [
      "nome" => "Alessandro",
      "cognome" => "Cavallo",
      "voti" => [6,8,6,8,7,6,6]
    ],
    [
      "nome" => "Filippo",
      "cognome" => "Bellotto",
      "voti" => [3,2,3,3,4,3,3]
    ]
];

var_dump($studentiClasse);

for ($i=0; $i < count($studentiClasse) ; $i++) { ?>
  <div>
    <?= $studentiClasse[$i]['nome']?>
    <?= $studentiClasse[$i]['cognome']?>
    <br>
    <?= 'Media Voti: ' . $media = array_sum($studentiClasse[$i]['voti'])/count($studentiClasse[$i]['voti']) ?>
  </div>
  <br>
<?php } ?>
