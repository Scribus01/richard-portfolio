   <?php
   ini_set('display_errors', '1');
   error_reporting(E_ALL);

   echo "1: PHP works<br>";
   require __DIR__ . '/../vendor/autoload.php';
   echo "2: vendor loaded<br>";
   require __DIR__ . '/../public/index.php';
