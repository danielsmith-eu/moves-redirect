$(document).ready(function(){
    var vars = $.deparam.querystring();
    var indx = vars.state;
    var code = vars.code;
    if (indx != undefined){
        var url = indx;
        if (code != undefined) {
            url += "#code=" + code;
        }
        window.location = url;
    }
});
