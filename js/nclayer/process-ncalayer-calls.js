

function getKeyInfoCall() {   
    blockScreen();
    var selectedStorage = $('#storageSelect').val();
    getKeyInfo(selectedStorage, "getKeyInfoBack");
}

function getKeyInfoBack(result) {
    unblockScreen();
    if (result['code'] === "500") {
        alert(result['message']);
    } else if (result['code'] === "200") {
        var res = result['responseObject'];       

        var alias = res['alias'];
        $("#alias").val(alias);

        var keyId = res['keyId'];
        $("#keyId").val(keyId);

        var algorithm = res['algorithm'];
        $("#algorithm").val(algorithm);

        var subjectCn = res['subjectCn'];
        $("#subjectCn").val(subjectCn);        

        var subjectDn = res['subjectDn'];
         $("#subjectDn").val(subjectDn);
       // console.log(subjectDn);
        var l = subjectDn.slice(57, 69);
       ;

        var issuerCn = res['issuerCn'];
        $("#issuerCn").val(issuerCn);

        var issuerDn = res['issuerDn'];
        $("#issuerDn").val(issuerDn);

        var serialNumber = res['serialNumber'];
        $("#serialNumber").val(serialNumber);

        var dateString = res['certNotAfter'];
        var date = new Date(Number(dateString));
        $("#notafter").val(date.toLocaleString());
        var date_end = date.toLocaleString();
        var date_console = date_end.slice(0, 10);
       

        dateString = res['certNotBefore'];
        date = new Date(Number(dateString));
        $("#notbefore").val(date.toLocaleString());
        console.log(date_console);


        $.post('profile', {"iin": l, "date_c": date_console}, function(d){
         if(d == 0) 
         {
            window.location.href = 'profile';
          
         }
         else {
            alert('Вы не являетесь клиентом ГАК!');
         }
        
        })
    }  
}























