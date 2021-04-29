<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->

<?php
// creo array di array
$posts2021 = [
  '15/01/2021' => [
    [
      'title' => 'Post 1',
      'author' => 'Lisa Simpson',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Barney Gumble',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
  ],
  '08/02/2021' => [
    [
      'title' => 'Post 3',
      'author' => 'Ned Flanders',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ],
  '22/03/2021' => [
    [
      'title' => 'Post 4',
      'author' => 'Milhouse Van Hauten',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Bart Simpson',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Waylon Smithers',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ]
];

var_dump($posts2021);

// ciclo ogni array e stampo ogni data con le relative informazioni
for ($i=0; $i < count($posts2021); $i++) {
?>
  <p class="" style="font-size: 20px;">

  </p>
<?php } ?>
