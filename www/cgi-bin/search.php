<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Search Result : All News</title>
</head>
<body>
    <h1>Search Result</h1>
<?php

if ($_SERVER['REQUEST_METHOD'] != "GET") {
    die("Request form have to be GET!");
}
$input = urlencode($_GET['input']);
$chosunquery = "http://nsearch.chosun.com/search/total.search?query=".$input."&sort=0";
$html = file_get_contents($chosunquery);
echo $html;
?>
</body>
</html>
