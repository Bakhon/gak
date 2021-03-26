
var webSocket = new WebSocket('wss://127.0.0.1:13579/');
var callback = null;

function blockScreen() {
    $.blockUI({
        message: '<img src="js/nclayer/loading.gif" /><br/>Подождите, выполняется операция в NCALayer...',
        css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        }
    });
}

function openDialog() {
    if (confirm("Ошибка при подключении к NCALayer. Запустите NCALayer и нажмите ОК") === true) {
        location.reload();
    }
}

function unblockScreen() {
    $.unblockUI();
}

webSocket.onopen = function (event) {
    console.log("Connection opened");
};

webSocket.onclose = function (event) {
    if (event.wasClean) {
        console.log('connection has been closed');
    } else {
        console.log('Connection error');
        openDialog();
    }
    console.log('Code: ' + event.code + ' Reason: ' + event.reason);
};

webSocket.onmessage = function (event) {
    var result = JSON.parse(event.data);

	if (result != null) {
		var rw = {
			code: result['code'],
			message: result['message'],
			responseObject: result['responseObject'],
			getResult: function () {
				return this.result;
			},
			getMessage: function () {
				return this.message;
			},
			getResponseObject: function () {
				return this.responseObject;
			},
			getCode: function () {
				return this.code;
			}
        };
        if (callback != null) {
            window[callback](rw);
        }
	}
};

function getKeyInfo(storageName, callBack) {
    var getKeyInfo = {
		"module": "kz.gov.pki.knca.commonUtils",
        "method": "getKeyInfo",
        "args": [storageName]
    };
    callback = callBack;
    webSocket.send(JSON.stringify(getKeyInfo));
}










