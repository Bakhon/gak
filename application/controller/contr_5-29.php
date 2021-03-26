<?php 

    $db = new DB();

    $sql_keeper = "select * from INSURANCE2.CORP_SITE_PRODUCTS where id = 5 order by ID";
    $list_keeper = $db -> Select($sql_keeper);

?>