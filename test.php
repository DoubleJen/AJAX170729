
<?php
    //php變數大小寫嚴格區分
    $req = $_SERVER;
//    foreach($req as $key => $value){
//        echo "${key} = ${value}<br />";
//    }

    $agent = $_SERVER['HTTP_USER_AGENT'];
    if($agent == 'BRAD'){
        //
        echo 'Hello, BRAD';
    }else if(strpos($agent, 'Chrome') !== false){
        //
        echo 'Hello, Chrome';
    }else{
        //
        echo 'Hello, Browser';
    }
    //http://design2u.me/blog/366/php-%E5%81%B5%E6%B8%AC%E7%80%8F%E8%A6%BD%E5%99%A8%E9%A1%9E%E5%9E%8B

?>