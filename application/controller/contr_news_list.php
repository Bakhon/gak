<?php 

$db = new DB();
$count_news = 10;

if(isset($_GET['page']))
{
 $pagination = $_GET['page'];   
}
if(!isset($_GET['page']))
{
    $pagination = 1;
}

if($_GET['page'] == '')
{
    $pagination = 1;
}

$prev = $pagination-1;
$next = $pagination+1;


$count_news_base = $db->select("select count(*) as c from insurance2.site_news");
$max_page = $count_news_base[0]['C'];


//$count_news_base = 64;
$list_pagination = ceil($count_news_base[0]['C']/$count_news);

$rownum = $pagination * $count_news;
$rnum = $rownum-9;

 $sql_news = "
select * from ( select a.*, rownum as rnum from 
( SELECT id,news_title_ru,news_date,news_title_kaz, news_text_ru, news_text_kaz FROM insurance2.site_news  ORDER BY news_date DESC ) 
a where rownum <= $rownum ) where rnum >= $rnum 
";

$list_news = $db->select($sql_news); 



?>