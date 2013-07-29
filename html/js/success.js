$(document).ready(function(){
    var vars = $.deparam.querystring();
    var indx = vars.start;
    var code = vars.code;
    if (indx != undefined){
        var url = indx;
        if (code != undefined) {
            url += "#code=" + code;
        }
        window.location = url;
    }
});
