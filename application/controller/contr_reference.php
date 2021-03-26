<?php 

$db = new DB3();

    function NumberRas($int)
    {
        $int = str_replace(',', '.', $int);
        if($int == ''){
            return '';
        }
        $txt  = number_format($int, 2, ',', ' ');
        
        if(substr($txt, -3) == ',00'){
            $txt = str_replace(',00', '', $txt);
        }
        
        return $txt;
    }

// обрабаотка страницы с профиля
 if(isset($_GET['contract_num']))
 {
    $cnum = $_GET['contract_num'];
   
    $sql = "select v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH,  d.iin
        from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p 
        where v.contract_num = '$cnum' 
        and d.RASP_ID = r.id and d.cnct_id = v.cnct_id and V.ID_ANNUIT = p.sicid group by v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH, d.iin";
   // echo $sql;
    $list = $db->select($sql);
    
    $date_begin = $list[0]['DATE_BEGIN'];
    $date_end = $list[0]['DATE_END'];  
    $periodich = $list[0]['PERIODICH'];  
                
    $sql_new = "select p.lastname, p.firstname, p.middlename, p.birthdate, p.DOCNUM,  v.contract_num, v.contract_date,
    v.PAY_SUM_V, V.PAY_SUM_P,
     d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                 r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS
         from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
         where v.contract_num = '$cnum'        
         and d.pncp_date between '$date_begin' and nvl('$date_end', sysdate)   
         and d.RASP_ID = r.id
         and d.cnct_id = v.cnct_id
         and V.ID_ANNUIT = p.sicid
         order by pncp_date";
         
  /*  echo '<pre>';
    echo $sql_new;
    echo '</pre>';   */   
 
    $list_contracts = $db->select($sql_new);   
   
    $name = $list_contracts[0]['FIRSTNAME'];
    $lastname = $list_contracts[0]['LASTNAME'];
    $middlename = $list_contracts[0]['MIDDLENAME']; 
    $docnum = $list_contracts[0]['DOCNUM']; 
    $iin = $list_contracts[0]['IIN'];  
    $contract_num = $list_contracts[0]['CONTRACT_NUM'];
    $contract_date = $list_contracts[0]['CONTRACT_DATE']; 
    $pay_sum = $list_contracts[0]['PAY_SUM_P']; 
    $pay_sum_v = $list_contracts[0]['PAY_SUM_V'];  
    
}

// Обработка со страницы профиля кнопка график страховых выплат
 if(isset($_POST['contracts']))
 {
    $cnum = $_POST['contracts'];
   
    $sql = "select v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH,  d.iin
        from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p 
        where v.contract_num = '$cnum' 
        and d.RASP_ID = r.id and d.cnct_id = v.cnct_id and V.ID_ANNUIT = p.sicid group by v.contract_num, V.DATE_BEGIN, V.DATE_END, V.PERIODICH, d.iin";
   // echo $sql;
    $list = $db->select($sql);
    
    $date_begin = $list[0]['DATE_BEGIN'];
    $date_end = $list[0]['DATE_END'];  
    $periodich = $list[0]['PERIODICH'];  
                
    $sql_new = "select p.lastname, p.firstname, p.middlename, p.birthdate, p.DOCNUM,  v.contract_num, v.contract_date,
    v.PAY_SUM_V, V.PAY_SUM_P,
     d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                 r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS
         from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
         where v.contract_num = '$cnum'        
         and d.pncp_date between '$date_begin' and nvl('$date_end', sysdate)   
         and d.RASP_ID = r.id
         and d.cnct_id = v.cnct_id
         and V.ID_ANNUIT = p.sicid
         order by pncp_date";
         
  /*  echo '<pre>';
    echo $sql_new;
    echo '</pre>';   */   
 
    $list_contracts = $db->select($sql_new);   
   
    $name = $list_contracts[0]['FIRSTNAME'];
    $lastname = $list_contracts[0]['LASTNAME'];
    $middlename = $list_contracts[0]['MIDDLENAME']; 
    $docnum = $list_contracts[0]['DOCNUM']; 
    $iin = $list_contracts[0]['IIN'];  
    $contract_num = $list_contracts[0]['CONTRACT_NUM'];
    $contract_date = $list_contracts[0]['CONTRACT_DATE']; 
    $pay_sum = $list_contracts[0]['PAY_SUM_P']; 
    $pay_sum_v = $list_contracts[0]['PAY_SUM_V'];  
    
}

// Обработка со страницы reference 
if(isset($_POST['contracts_num']))
{
    $cnum = $_POST['contracts_num'];
    $date_begin = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    
     $sql_new = "select p.lastname, p.firstname, p.middlename, p.birthdate, p.DOCNUM,  v.contract_num, v.contract_date,
    v.PAY_SUM_V, V.PAY_SUM_P,
     d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                 r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS
         from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
         where v.contract_num = '$cnum'        
         and d.pncp_date between '$date_begin' and nvl('$date_end', sysdate)   
         and d.RASP_ID = r.id
         and d.cnct_id = v.cnct_id
         and V.ID_ANNUIT = p.sicid
         order by pncp_date";
        

    $list_contracts = $db->select($sql_new);  
    if($list_contracts > 0) 
    {
    $name = $list_contracts[0]['FIRSTNAME'];
    $lastname = $list_contracts[0]['LASTNAME'];
    $middlename = $list_contracts[0]['MIDDLENAME']; 
    $docnum = $list_contracts[0]['DOCNUM']; 
    $iin = $list_contracts[0]['IIN'];  
    $contract_num = $list_contracts[0]['CONTRACT_NUM'];
    $contract_date = $list_contracts[0]['CONTRACT_DATE']; 
    $pay_sum = $list_contracts[0]['PAY_SUM_P']; 
    $pay_sum_v = $list_contracts[0]['PAY_SUM_V'];  
    }
    else {
        echo "Укажите корректный период";
    }

}

 if(isset($_POST['fm']))
 {
    $fm = $_POST['fm'];
    $sql = "INSERT INTO SITE_REFERENCE(IIN, DT) VALUES('$fm', sysdate)";
    $db->execute($sql);
    exit;
 }




?>