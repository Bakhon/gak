<?php
    $db = new DB();

    $product_id = $_GET['contact_id'];
    
    if($product_id == '')
    {
    $sql_prod = "select * from INSURANCE2.dic_branch2 where RFBN_ID = $product_id";
    $list_prod = $db -> Select($sql_prod);            
    }
    
    
    
 /*   if(isset($_POST['ITEM_TITLE_RU'])){
        
        $ITEM_TITLE_RU = $_POST['ITEM_TITLE_RU'];
        $ITEM_TEXT_RU = $_POST['ITEM_TEXT_RU'];
        $ITEM_TITLE_KAZ = $_POST['ITEM_TITLE_KAZ'];
        $ITEM_TEXT_KAZ = $_POST['ITEM_TEXT_KAZ'];
        $ITEM_TITLE_ENG = $_POST['ITEM_TITLE_ENG'];
        $ITEM_TEXT_ENG = $_POST['ITEM_TEXT_ENG'];
        $emp_id = $_POST['emp_id'];
        
        $sql_to_condition = "INSERT INTO SITE_CONDITIONS (ID, PRODUCT_ID, ITEM_TITLE_RU, ITEM_TEXT_RU, ITEM_TITLE_KAZ, ITEM_TEXT_KAZ, ITEM_TITLE_ENG, ITEM_TEXT_ENG, EMP_ID, CREATE_DATA) VALUES (SEQ_SITE_CONDITIONS.NEXTVAL, $product_id, '$ITEM_TITLE_RU', '$ITEM_TEXT_RU', '$ITEM_TITLE_KAZ', '$ITEM_TEXT_KAZ', '$ITEM_TITLE_ENG', '$ITEM_TEXT_ENG', $emp_id, sysdate)";
        $db->Execute($sql_to_condition);
        //echo $sql_to_condition;
        
        header("site_products?product_id=$product_id");
    } */
    
    if(isset($_POST['NAME_RU'])){
        $id_upd = $_POST['id_upd'];
        $NAME = $_POST['NAME_RU'];
        $NAME_KZ = $_POST['NAME_KZ'];
        $PHONE = $_POST['PHONE'];
        $GR_JOB = $_POST['GR_JOB'];
        $GR_JOB_KZ = $_POST['GR_JOB_KZ'];
        $ADDRESS = $_POST['ADDRESS'];
        $ADDRESS_KZ = $_POST['ADDRESS_KZ'];
              
        $emp_upd = $_POST['emp_upd'];
        $data = date('d.m.Y');
        $time = date('H:i:s');
        $sql_to_condition = "UPDATE INSURANCE2.dic_branch2 SET NAME = '$NAME', NAME_KZ = '$NAME_KZ', PHONE = '$PHONE', GR_JOB = '$GR_JOB', GR_JOB_KZ = '$GR_JOB_KZ', ADDRESS = '$ADDRESS', ADDRESS_KZ = '$ADDRESS_KZ' WHERE RFBN_ID = $id_upd";       
        $db->Execute($sql_to_condition);
    
        
        header("corpsite_contacts?product_id=$id_upd");
    }
   
    
    //постоянные запросы
    $today_date = date('d.m.Y');
    $today_date_plus_15 = date("d.m.Y", mktime(0, 0, 0, date('m'), date('d') + 15, date('Y')));
    
    $sql_prod = "select * from INSURANCE2.dic_branch2 where RFBN_ID = $product_id";
    $list_prod = $db -> Select($sql_prod);
    
    
    $sql_contact = "select * from INSURANCE2.dic_branch2 where RFBN_ID != 0000 and RFBN_ID != 1601 and nvl(asko, 0) = 0 order by 1 DESC";
    $list_contact = $db->select($sql_contact);
?>

