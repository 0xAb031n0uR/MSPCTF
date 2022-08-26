var page = require('webpage').create();
page.customHeaders = {
"Connection": "Keep-Alive"
};
var newpage = require('webpage').create();

var host = "127.0.0.1";
var url = "http://"+host+"/CTF/msp/ctf1/This_S3ecReT_fIlE_P3alYods.html";
var timeout = 20000;
phantom.addCookie({
    'name': 'Flag',
    'value': 'MSPCTF{CoNgR3Ts!_Y0u_goT_ThE_Fl3g}',
    'domain': '127.0.0.1',
    'path': '/',
    'httponly': false
});

var newurl = "";
page.onNavigationRequested = function(url, type, willNavigate, main) {
    console.log("[URL] URL="+url+"\n");  
    newurl = url;
}

page.settings.resourceTimeout = timeout;
page.onResourceTimeout = function(e) {
    setTimeout(function(){
        console.log("[INFO] Timeout")
        phantom.exit();
    }, 1);
};

page.open(url, function(status) {
    console.log("[INFO] rendered pageeeeeeeeeee1111111111111 " + url + " " + status + "\n");
   	    var fs = require('fs');
		var file_h = fs.open('./This_S3ecReT_fIlE_P3alYods.html', 'r');
		var line = file_h.readLine();
		var i = 0 ;
		var newline = [""];
		while(line){
			//console.log(line);
			newline[i] = line ;
			line = file_h.readLine();
			i++;
		}
		file_h.close();
		fs.write('./This_S3ecReT_fIlE_P3alYods.html','','w');
		for (var i = 1; i < newline.length; i++) {
			var l = newline[i]+'\n';
 		 	fs.write('./This_S3ecReT_fIlE_P3alYods.html',l,'a');
		}
		file_h.close();
		var urlll = newurl;


       setTimeout(function(){
        phantom.exit();
    }, 500);
});

