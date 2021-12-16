
<?php

$ini = parse_ini_file( __DIR__ . '/dbconfig.ini');

$db = new PDO(  "mysql:host=" . $ini['server'] . 
                ";port=" . $ini['port'] . 
                ";dbname=" . $ini['dbname'], 
                $ini['username'], 
                $ini['password']);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>


<?php 
  function getDatabase() {
    // Remote Config
    
    $config = array(
      'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_genesis',
      'DB_USER' => 'se266_genesis',
      'DB_PASSWORD' => 'genesis',
    );
    
    // Local Config
    /*
    $config = array(
      'DB_DNS' => 'mysql:host=192.168.10.10;port=3306;dbname=se266_matt',
      'DB_USER' => 'homestead',
      'DB_PASSWORD' => 'secret'
    );
    */
    try {
      $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD'] /*array(
        PDO::MYSQL_ATTR_LOCAL_INFILE => true,
      )*/);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $ex) {
      echo $ex->getMessage();
      $db = null;
    }

    return $db;
  }
?>
