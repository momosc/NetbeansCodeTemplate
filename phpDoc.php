<?php

/* 
 * 入口文件
 */

require_once 'NetbeansCodeTemplate.php';

$NetbeansCodeTemplate = new  NetbeansCodeTemplate();
$defaultTplList = $NetbeansCodeTemplate->getDefaultTplList();
$str = '';
foreach ($defaultTplList as $key => $value) {
    $str .= "<div class='row'>
    <div class='col-sm-12'>
      <h3>$key</h3>
      <p>$value</p>
    </div>
  </div>";
} 

$html = <<<EOF
<!DOCTYPE html>
<html>
<head>
  <title>Netbeans自带代码模板</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Netbeans自带代码模板</h1>
    <p>PHP代码规范,统一编码风格(phpDoc)。</p> 
  </div>
    $str
</div>
</body>
</html>
EOF;
echo $html;