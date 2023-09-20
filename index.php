<?php




   $books = [

    [

      'name' => 'Do androids dream of electric sheep',

      'author' => 'Philip K. Dick',

      'purchaseUrl' => 'http: //example.com'

    ],

    [

      'name' => 'Project hail mary',

      'author' => 'Andy Weir',

      'purchaseUrl' => 'http: //example.com'

    ],

   ];




  ?>

  <ul>

    <?php foreach ($books as $book) : ?>

      <li>

        <a href="<?= $book['purchaseUrl']?>">

        <?= $book['name']; ?></li>

      <?php endforeach; ?>

  </ul>

</body>




</html>
