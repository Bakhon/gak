<?php 
/*
$title = 'Регистрация';

require_once 'methods/registration.php';
$check_gak = new Registration_user(); 
$dan = $check_gak->array;

    */
    $db = new DB3();
    require_once "methods/smsc_api_solvingit.php";
    if(isset($_POST['iin_client']))
    {       
       // print_r($_POST);
        $iin_client = trim($_POST['iin_client']);
        $tel_client = $_POST['phone_client'];
        $z = trim($_POST['phone_client']);
        $str = str_replace("(", "", $z);
        $str2 = str_replace(")", "", $str);
        $str3 = str_replace("-", "", $str2); 
        //echo $str3;
        $returnValue = substr($str3, 1, 14);
        $returnValue2 = trim($returnValue);
        $str3=preg_replace('/\s+/', '', $returnValue2);

      //  echo $str3;
      
            $sql = "
    select p.lastname, p.firstname, p.middlename, p.birthdate, v.contract_num, v.contract_date, d.iin, d.pncp_date,NVL(D.SUM_NAKOPL,d.sum_pay) sum_pay, d.ipn,  d.sum_opv, d.sum_osms, d.sum_pay_kom, d.sum_new,  d.bank_id, bank_name(d.bank_id) bank_name,  d.p_account,
                     r.NOM_RASP, r.DATE_RASP, r.SUM_PAY sum_rasp, rasp_state(r.state) state, p.phone phone, p.ADDRESS_RUS
             from INSURANCE.pnpd_document d, INSURANCE.rasporyazh r, INSURANCE.contracts v, INSURANCE.clients p
             where d.iin = '$iin_client'          
             and d.RASP_ID = r.id
             and d.cnct_id = v.cnct_id
             and V.ID_ANNUIT = p.sicid
             and V.PAYM_CODE in (0101000002, 0201000001, 0101000001)
             order by pncp_date
    ";       
    $list_user_acc = $db->select($sql);
        
     if(count($list_user_acc) > 0)
     {
        $sql_site_users = "select * from insurance.SITE_USERS where iin = $iin_client";
        $list_site_users = $db->select($sql_site_users);        
        if(count($list_site_users) <= 0)
        {      
                          
                $t = trim($_POST['phone_client']);   
                $number = trim(substr($t, 8, 13));
    
                $sql = "select * from insurance.clients where phone like '%$number%'";
                $list = $db->select($sql);
            
        $ch = curl_init();
        $t = trim($_POST['phone_client']);       
        $rs = 77004000556; 
        $url = "http://192.168.5.202/test.php?iin=$iin_client&phone=$str3";
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "n.omirbekov:Nurlan1988");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        
        $output = curl_exec($ch);

           $y = strlen($output);
        
                if($y == 10){
                     $r = send_sms($_POST['phone_client'], "Vash kod podtverzhdeniya: ".ok_code($_POST['phone_client']));
                     echo '0';             
             }
               else {  
                echo '3';
               }               
          curl_close($ch);       // Успешно отправлен на номер телефона                                            
        }
        else {
             echo '1'; 
        }
        
        exit;
     }    
     else {
        echo '2'; // Не является клиентом ГАК
        exit;
     }       
    }
    
 if (isset($_POST['ok'])) {
    $oc = ok_code($_POST['phone_client']);
    $code = $_POST['ok'];
 /*   echo gettype($code);
    echo '<br/>';
    echo gettype($oc);
    echo $code;
    echo '<br/>';
    echo $oc; */
   $code = (int)$code;
   // print_r($oc);   
    if ($oc == $code)
       { echo '0';}
    else {
        echo '1';
        }
        exit;
}
    
    
    function ok_code($s) {
    return hexdec(substr(md5($s."<секретная строка>"), 7, 5));
}
    
    array_push($css_loader, "styles/css/plugins/jsTree/style.min.css");
    array_push($js_loader, "styles/js/plugins/jsTree/jstree.min.js");
    
    $othersJs .= "<style>
                    .jstree-open > .jstree-anchor > .fa-folder:before {
                        content: '\f07c';
                    }
                
                    .jstree-default .jstree-icon.none {
                        width: 0;
                    }
                </style>";

    $othersJs .= "<script>
                    $(document).ready(function(){
                
                        $('#jstree1').jstree({
                            'core' : {
                                'check_callback' : true
                            },
                            'plugins' : [ 'types', 'dnd' ],
                            'types' : {
                                'default' : {
                                    'icon' : 'fa fa-folder'
                                },
                                'dolzh':{
                					'icon' : 'fa fa-child'
                				},
                                
                            }
                        });                                       
                
                    });
                </script>";

?>