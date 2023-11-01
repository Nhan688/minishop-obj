<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbdata01013</title>
</head>
<body>
    <?php
    class DbData { 
        protected $pdo; 
        
        public function __construct(){ 
            $dsn = 'mysql:host=localhost;dbname=php;charset=utf8';
            $user = 'kobe';
            $password = 'denshi';
            try {
                $this->pdo = new PDO($dsn, $user, $password);
            } catch(Exception $e){
                echo 'Error:' . $e->getMessage();
                die();
            }
        }
        
        protected function query ( $sql, $array_params ) {
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute( $array_params );
            return $stmt;
        }
        protected function exec ( $sql, $array_params ) {
            $stmt = $this->pdo->prepare( $sql );
            return $stmt->execute( $array_params); 
        }
    }
    ?>
</body>
</html>