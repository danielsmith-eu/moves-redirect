$(document).ready(function(){
    var vars = $.deparam.fragment();
    var indx = vars.indx;
    if (indx != undefined){
        $("#server-text").html("Authorisation is for use by the INDX server: <tt>" + unescape(indx) + "</tt>, you will be redirected back there once authorisation has completed.");
        var url = $("#server-link").attr("href");
        url += "&state=" + indx; // don't unescape, it stays urlencoded for the link here (above is for human-readable, so we unescape it)
        $("#server-link").attr("href", url);

        // redirect immediately
        window.location = url;
    }
});
