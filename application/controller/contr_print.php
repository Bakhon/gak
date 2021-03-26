<?php


if(isset($_POST['content']))
{
            $html = '            
            <style>   
            body{
                font-size: 14px;
            }
            table {
                width: 100%;
                border-collapse: collapse;                
            }
            table, td, th {
                border: 1px solid black;                
                font-size: 12px;
                font-family: "Times New Roman";                
            }
            
            td, th{
                padding-left: 5px;
                padding-right: 5px;
            }
            th{
                margin: 10px;
                background-color: #F5F5F6;
            }            
            </style>';
            
    $html .= $_POST['content'];
    
    
    
}
else {
    exit;
}


     require_once("methods/mpdf/mpdf.php");  
     
      $mpdf = new mPDF();
      $mpdf->AddPage();   
      
                    
       /*     $base64 = 'img/logo_gak_min2.jpg';
            //Водяной знак
            
            $mpdf->SetWatermarkImage($base64);            
            $mpdf->showWatermarkImage = true;
            $mpdf->watermarkImageAlpha = 0.1;
            
            //Вставить footer с картинкой
            
            $mpdf->SetHTMLFooter('            
            <div style="position: relative;float: left; width: 33%;font-size: 8px;opacity: 0.5;">АО "Компания по страхованию жизни "Государственная аннуитетная компания"<br />www.gak.kz</div> 
            <div style="position: relative;float: left; width: 33%;text-align: center;opacity: 0.5;"><img src="'.$base64.'" width="25" height="25" ></div> 
            <div style="position: relative;float: right; width: 33%;text-align: right;font-size: 8px;opacity: 0.5;">АО "Компания по страхованию жизни "Государственная аннуитетная компания"<br />www.gak.kz</div>');
              */          
      
      $mpdf->WriteHTML($html);
      $mpdf->Output();
      exit;


?>