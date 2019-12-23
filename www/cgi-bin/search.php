<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Search Result : All News</title>
</head>
<body>
    <h1>Search Result</h1>
<?php
include('simplehtmldom_1_9_1/simple_html_dom.php');
if ($_SERVER['REQUEST_METHOD'] != "GET") {
    die("Request form have to be GET!");
}
echo "<h2>검색어 : " . $_GET['input'] . "</h2>";
$input = urlencode($_GET['input']);
$type = $_GET['type'];
$period = $_GET['period'];

//chosun
echo "<h2>조선일보</h2>";
$tempperiod='1w';
if ($period == 'month')
    $tempperiod = '1m';
else if ($period == 'year')
    $tempperiod = '1y';
else if ($period == 'all')
    $tempperiod = '';
$temptype = '0';
if ($type == "latest")
    $temptype = '1';
$tempquery = "http://nsearch.chosun.com/search/total.search?query=%".$input."&siteid=&category=&sort=".$temptype."&writer=&field=&date_period=".$tempperiod."&date_start=&date_end=&emd_word=&expt_word=&opt_chk=";
$html = file_get_html($tempquery);
echo $html->find('.search_news')[0];
//donga (not solved)
echo "<h2>동아일보</h2>";
$tempperiod = 'search_date=4\&';
if ($period == 'month')
    $tempperiod = 'search_date=3\&';
else if ($period == 'year')
    $tempperiod = 'search_date=2\&';
else if ($period == 'all')
    $tempperiod = '';
$temptype = '3';
if ($type == "latest")
    $temptype = '1';

$tempquery = "http://www.donga.com/news/search?check_news=1%7C2%7C3%7C6%7C7%7C8%7C9%7C12%7C14\&more=\&sorting=".$temptype."\&range=1\&search_date=\&".$tempperiod."query=".$_GET['input'];
exec("python3 gethtml.py " . $tempquery, $out, $status);
$html = '';
for ($i = 0; $i < count($out); ++$i)
    $html .= $out[$i];
if ($html != '') {
    $html = str_get_html($html);
    echo $html->find('div.searchList div.t div.loc')[0]->parent()->parent();
}
//joongang
echo "<h2>중앙일보</h2>";
$tempperiod = 'OneWeek';
if ($period == 'month')
    $temppriod = 'OneMonth';
else if ($period == 'year') {
    $yearbefore = date("Y.m.d", strtotime("-1 years"));
    $tempperiod = 'DirectInput&StartSearchDate='.$yearbefore.'&EndSearchDate='.$date;
}
else if ($period == 'all')
    $tempperiod ='All'; 
$temptype = 'Accuracy';
if ($type == 'latest')
    $temptype = 'New';
$tempquery = 'https://news.joins.com/Search/UnifiedSearch?Keyword='.$input.'&SortType='.$temptype.'&SearchCategoryType=UnifiedSearch&PeriodType='.$tempperiod.'&ScopeType=All&ImageType=All&JplusType=All&BlogType=All&ImageSearchType=Image&TotalCount=0&StartCount=0&IsChosung=False&IssueCategoryType=All&IsDuplicate=True&Page=1&PageSize=3&IsNeedTotalCount=True';
$html = file_get_html($tempquery);
echo $html->find('.list_default')[0]->children(0);
//kookmin
echo "<h2>국민일보</h2>";
$tempperiod = 'period=week&';
if ($period == "month") {
    $tempperiod = 'period=month&';
}
else if ($period == "year") {
    $tempperiod = 'period=year&';
} 
else if ($period == 'all')
    $tempperiod = '';
$temptype = 'score';
if ($type == 'latest')
    $temptype = 'desc';
$tempstr = iconv("UTF-8", "EUC-KR", $_GET['input']);
$tempstr = urlencode($tempstr);
$tempquery = 'http://www.kmib.co.kr/search/searchResult.asp?sort='.$temptype.'&'.$tempperiod.'searchWord='.$tempstr;
$html = file_get_html($tempquery);
echo $tempquery . "<br>";
echo $html->find('div#searchList')[0]->children(0);
//hangeure
echo "<h2> 한겨례</h2>";
$tempperiod = 'week';
if ($period == 'month')
    $tempperiod = 'month';
else if ($period == 'year')
    $tempperiod = 'year';
else if ($period == 'all')
    $tempperiod = 'all';
$temptype = 's';
if ($type == 'latest')
    $temptype = 'd';
$tempquery = 'http://search.hani.co.kr/Search?command=query&keyword='.$input.'&media=common&sort='.$temptype.'&period='.$tempperiod;
echo $tempquery . "<br>";
$html = file_get_html($tempquery);
echo $html->find('div.search-result-section  ul.search-result-list')[0]->children(0);
//경향
echo "<h2>경향신문</h2>";
$date = date('Ymd');
if ($period == 'month') {
    $before = date('Ymd', strtotime('-1 months'));
    $tempperiod = '3';
    $date = $before.'~'.$date;
}
else if ($period == 'year') {
    $before = date('Ymd', strtotime('-1 years'));
    $tempperiod = '4';
    $date = $before.'~'.$date;
}
else if ($period == 'all') {
    $date = '';
    $tempperiod = '0';
}
else {
    $before = date('Ymd', strtotime('-7 days'));
    $tempperiod = '2';
    $date = $before.'~'.$date;
}
$temptype = '2';
if (type == 'latest')
    $temptype = '1';
$tempquery = 'http://search.khan.co.kr/search.html?sect=1&path=1&dm='.$tempperiod.'&d1='.$date.'&sort='.$temptype.'&q='.$input;
$html = file_get_html($tempquery);
echo $html->find('.news.section')[0]->find('dl.phArtc')[0];
?>
</body>
</html>
