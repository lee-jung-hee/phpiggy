<?php

declare(strict_types=1);

//Framework directory에서 App을 로드
//절대 경로를 생성하기 위해 디렉토리상수 /.. 를 사용함
require __DIR__ . "/../../vendor/autoload.php";

//Framework/App.php 클래스를 가져오는 use문 추가
use Framework\App;

// App class의 새 인스턴스가 되는 app변수를 만듬
$app = new App();

//app변수를 리턴시킴
return $app;