<?php
// 데이터베이스 연결
include_once ("./contactDB.php");

// 변수 설정
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["title"];
$message = $_POST["message"];

// 데이터 쓰기 
$sql = "
    INSERT INTO inquiry SET
    name = '{$_POST['name']}',  # 작성자
    title = '{$_POST['title']}',  # 제목
    email = '{$_POST['email']}',    # 메일
    message = '{$_POST['message']}',  # 내용
    date = now();                 # 작성일
  ";
  if ($db->query($sql)) { // 쿼리문 실행
    echo "요청이 보내 졌습니다. 감사합니다. "; // 쿼리문이 정상적으로 실행되면 list.php로 이동
  } else {
    print_r($db->errorInfo());    // 쿼리문에 문제가 있으면 에러 출력
  }

?>