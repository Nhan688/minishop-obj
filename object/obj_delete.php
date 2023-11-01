<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>obj_delete.php</title>
    </head>
    <body>
        <?php
            require_once __DIR__ .'/classes/dbphp.php';
            $dbPhp = new DbPhp();
            $dbPhp->deletePerson('深沢七郎');
            $persons = $dbPhp->selectAll();
            foreach($persons as $person){
                echo 'uid=' .$person['uid'].',name=' .$person['name']. '<br>';
            }
            
        ?>
        <hr>
        <h4>01組 013番 グエンタインニャン</h4>
    </body>
</html>