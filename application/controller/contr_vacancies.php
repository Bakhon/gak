<?php

$db = new DB();

    $sql_submenu2 = "select * from INSURANCE2.CORPSUBMENU where menu_id = 4 order by ID";
    $list_submenu2 = $db -> Select($sql_submenu2);
    
    $list_vacancy = $db ->select("select * from INSURANCE2.CORP_SITE_VACANCY order by id ASC");
    
    $list_min = $db->Select("select min(id) min from INSURANCE2.CORP_SITE_VACANCY");
    $id_min = $list_min[0]['MIN'];
    

?>