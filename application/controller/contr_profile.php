<?php 

$db = new DB3();
$list_region = $db->select("select * from INSURANCE.DIC_REGION order by id ASC");
$list_country = $db->select("select * from INSURANCE.dic_country order by id ASC");
$list_districts = $db->select("select * from INSURANCE.DIC_DISTRICTS order by id ASC");


if(isset($_GET['iin']))
{
  $iin = $_GET['iin'];

    $sql = "
    select p.lastname, p.firstname, p.middlename, p.birthdate, v.contract_num, v.contract_date, d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                     r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS, (select RU_NAME from dic_region dr where dr.id = p.REG_ADDRESS_REGION_ID) region,
                 p.REG_ADDRESS_CITY, p.REG_ADDRESS_STREET, p.REG_ADDRESS_BUILDING, P.REG_ADDRESS_FLAT, p.REG_ADDRESS_DISTRICTS_ID
             from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
             where d.iin = '$iin'          
             and d.RASP_ID = r.id
             and d.cnct_id = v.cnct_id
             and V.ID_ANNUIT = p.sicid
             and V.PAYM_CODE in (0101000002, 0201000001, 0101000001)
             order by pncp_date
    "; 
    
    echo $sql;     
    exit;
    $list_user_acc = $db->select($sql); 
    if(count($list_user_acc) > 0)
    {        
          session_start();
         $_SESSION[IIN] = $iin;
         $fm = $_SESSION[IIN];
         $sql = "INSERT INTO SITE_SESSION(IIN, DT, ACTION) VALUES('$fm', sysdate, 'IN')";
         $db->execute($sql);
    }  
  
    $address = $list_user_acc[0]['ADDRESS_RUS'];  
  //   header('location: profile');
   //  header('Location: profile');
    
} 



if(isset($_POST['iin']))
{

  $iin = $_POST['iin'];

/*
  if($iin = '780802300114')
  {
    $iin = '160523601756';
  }  
 */
  $date_c = $_POST['date_c']; 
  $today_date = date('d.m.Y');
  $str_date_ecp = strtotime($date_c);
  $str_today_date = strtotime($today_date);
  
    $sql = "
    select p.lastname, p.firstname, p.middlename, p.birthdate, v.contract_num, v.contract_date, d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                     r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS, (select RU_NAME from dic_region dr where dr.id = p.REG_ADDRESS_REGION_ID) region,
                 p.REG_ADDRESS_CITY, p.REG_ADDRESS_STREET, p.REG_ADDRESS_BUILDING, P.REG_ADDRESS_FLAT, p.REG_ADDRESS_DISTRICTS_ID
             from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
             where d.iin = '$iin'          
             and d.RASP_ID = r.id
             and d.cnct_id = v.cnct_id
             and V.ID_ANNUIT = p.sicid
             and V.PAYM_CODE in (0101000002, 0201000001, 0101000001)
             order by pncp_date
    ";       
    $list_user_acc = $db->select($sql);
    
    if(count($list_user_acc) > 0 and $str_today_date < $str_date_ecp)
    {
        echo '0';
          session_start();
  $_SESSION[IIN] = $iin;
    }  
    else {
        echo '1';
    }
    $address = $list_user_acc[0]['ADDRESS_RUS'];  
  //   header('location: profile');
   //  header('Location: profile');
    exit;
} 

else {
    session_start();
   
    $sql = "
                 select p.lastname, p.firstname, p.middlename, p.birthdate, v.contract_num, v.contract_date, d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                 r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS, (select RU_NAME from dic_region dr where dr.id = p.REG_ADDRESS_REGION_ID) region,
                 p.REG_ADDRESS_CITY, p.REG_ADDRESS_STREET, p.REG_ADDRESS_BUILDING, P.REG_ADDRESS_FLAT, p.REG_ADDRESS_DISTRICTS_ID, p.REG_ADDRESS_COUNTRY_ID
         from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
         where d.iin = ".$_SESSION[IIN]."          
         and d.RASP_ID = r.id
         and d.cnct_id = v.cnct_id
         and V.ID_ANNUIT = p.sicid
         and V.PAYM_CODE in (0101000002, 0201000001, 0101000001)
         order by pncp_date
"; 
             
    $list_user_acc = $db->select($sql);

    $sql_active_contracts = "select v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH,  d.iin
    from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p 
    where d.iin = ".$_SESSION[IIN]."  
    and d.RASP_ID = r.id and d.cnct_id = v.cnct_id and V.ID_ANNUIT = p.sicid and V.PAYM_CODE in (0101000002, 0201000001, 0101000001) group by v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH, d.iin order by v.date_end DESC";

    $list_active_contracts = $db->Select($sql_active_contracts);

    $sql_get_spravka = "select v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH,  d.iin, p.ADDRESS_RUS
                        from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p 
                        where d.iin = ".$_SESSION[IIN]." 
                        and d.RASP_ID = r.id and d.cnct_id = v.cnct_id and V.ID_ANNUIT = p.sicid  group by v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH, d.iin, p.ADDRESS_RUS order by v.date_end DESC";

    $list_get_spravka = $db->select($sql_get_spravka);
    $last_contract = $list_get_spravka[0]['CONTRACT_NUM'];

    // print_r($list_user_acc);
    $name = $list_user_acc[0]['FIRSTNAME'];
    $lastname = $list_user_acc[0]['LASTNAME'];
    $middlename = $list_user_acc[0]['MIDDLENAME'];
    $iin = $list_user_acc[0]['IIN'];
    $birthdate = $list_user_acc[0]['BIRTHDATE'];
    $phone =  $list_user_acc[0]['PHONE']; 
    $address = $list_user_acc[0]['ADDRESS_RUS'];
    $reg_adress_city = $list_user_acc[0]['REG_ADDRESS_CITY'];
    $reg_adress_street = $list_user_acc[0]['REG_ADDRESS_STREET'];
    $reg_adress_building = $list_user_acc[0]['REG_ADDRESS_BUILDING'];
    $reg_adress_districts = $list_user_acc[0]['REG_ADDRESS_DISTRICTS_ID'];
    $reg_adress_region_id = $list_user_acc[0]['ID'];
    $reg_adress_region_name = $db->select("select * from INSURANCE.DIC_REGION where ru_name like '%$reg_adress_region_id%'");
    $reg_adress_reg_id2 = $reg_adress_region_name[0]['ID'];
    $REG_ADDRESS_COUNTRY_ID = $list_user_acc[0]['REG_ADDRESS_COUNTRY_ID'];
}


 if(isset($_POST['addres'])){
    

    $address_rus = trim($_POST['addres']);
    $iin = $_POST['iin_addr'];
    $reg_districts = $_POST['reg_districts'];
    $reg_region = $_POST['reg_region'];
    $city = $_POST['city'];
    $reg_adress_street = $_POST['reg_adress_street'];
    $reg_adress_building = $_POST['reg_adress_building'];
    $country = $_POST['country'];  
    
    $sql_adrr = "UPDATE INSURANCE.CLIENTS SET REG_ADDRESS_DISTRICTS_ID = '$reg_districts', REG_ADDRESS_STREET = '$reg_adress_street', REG_ADDRESS_BUILDING = '$reg_adress_building', REG_ADDRESS_CITY = '$city', REG_ADDRESS_COUNTRY_ID = '$country' where iin = '$iin'";
    echo $sql_adrr;
    $list_upd_adrr = $db->execute($sql_adrr);
    
    $sql_arc = "insert into INSURANCE.CLIENTS_FOR_SITE
                select * from INSURANCE.CLIENTS where IIN = to_char($iin)";             
     $db->Execute($sql_arc);
    
    header('location: profile');
    
 }
 


?>