<?php


 session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'RU';
    }
    if(isset($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $lang = $_SESSION['lang'];



$db = new DB();

$target_dir = "upload/"; // Upload directory
// iconv('UTF-8', 'windows-1251', $filename)




 $request = 1;
if(isset($_POST['request'])){
	$request = $_POST['request'];
}

// Upload file
if($request == 1){
           
	$target_file = $target_dir . basename($_FILES['file']['name']);
    $d = strlen($target_file);

  
	$msg = "";
     $tr = iconv('UTF-8', 'windows-1251', $_FILES['file']['name']);
     
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$tr)) {
	    $msg = "Successfully uploaded";
	}else{
	 //   $msg = "Error while uploading";
	}
	echo $msg;
    
    if($_FILES['file']['name'] != '')
    {
    if($lang == 'RU')
   {
    $str2 = mb_convert_encoding($tr, 'utf-8', 'windows-1251');
    $name_ru = explode('.', $str2); 
    $page = $name_ru[0];
    $sql = "INSERT INTO insurance2.CORPSITE_FILES(ROOT_RU, NAME, FULL_NAME) values('$target_file', '$page', '$str2')";
    $db->execute($sql);
    }
    else {
        $str2 = mb_convert_encoding($tr, 'utf-8', 'windows-1251');
    $name_ru = explode('.', $str2); 
    $page = $name_ru[0];
        $sql = "INSERT INTO insurance2.CORPSITE_FILES(ROOT_KAZ, NAME, FULL_NAME) values('$target_file', '$page', '$str2')";
        $db->execute($sql);
    }
    }
 
}

// Remove file
if($request == 2){
    $n = $_POST['name'];
    $str = mb_convert_encoding($n, 'windows-1251', 'utf-8');
    
	$filename = $target_dir.$str; 
	unlink($filename); 
    
    $str2 = mb_convert_encoding($str, 'utf-8', 'windows-1251');
    $filename2 = $target_dir.$str2; 
    
    $sql_delete = "delete insurance2.CORPSITE_FILES where ROOT_RU = '$filename2' ";
    $db->execute($sql_delete);
    
     $sql_delete = "delete insurance2.CORPSITE_FILES where ROOT_KAZ = '$filename2' ";
    $db->execute($sql_delete);
    
    
    exit;
}




