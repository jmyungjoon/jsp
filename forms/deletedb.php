<?php
// 데이터베이스 연결
include_once ("./contactDB.php");

// 변수 설정
$no = $_POST["no"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$message = $_POST["message"];

// 데이터 쓰기 
$sql = "DELETE FROM inquiry WHERE no = $no;";
  if ($db->query($sql)) { // 쿼리문 실행
    echo "<h3>{$_POST["no"]}가 지워졌습니다.</h3>"; // 쿼리문이 정상적으로 실행되면 list.php로 이동
    
  } else {
    print_r($db->errorInfo());    // 쿼리문에 문제가 있으면 에러 출력
  }

?>