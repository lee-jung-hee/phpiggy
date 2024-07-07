<?php

include __DIR__ . '/../src/App/function.php';

//아래처럼 해주면 App instance에 액세스할 수 있음
$app = include __DIR__ . '/../src/App/bootstrap.php';

//run method를 호출하여 애플리케이션을 시작함
$app->run();