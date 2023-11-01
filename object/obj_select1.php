<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>obj_select1.php</title>
    </head>
    <body>
    <?php
    if(!isset($_GET['uid'])){
        echo 'uidが指定されていません。';
    }else{
        $uid = $_GET['uid'];

        require_once __DIR__ . '/classes/dbphp.php';
        $dbPhp = new DbPhp();
        $person = $dbPhp->selectPerson($uid);

        if(empty($person['uid'])){
            echo '指定されたuid=' . $uid . 'のデータはありません。';
        }else{
            echo '指定されたuid=' . $person['uid'] . ', name=' . $person['name'] . '<br>';  
        }
    }
    
    ?>
        <hr>
        <h4>01組 013番 グエンタインニャン</h4>
    </body>
</html>