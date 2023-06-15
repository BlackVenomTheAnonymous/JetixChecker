$(document).ready(function () { 
    $("body").hide().fadeIn(1500).delay(6000)
    $("#generate").click(function() {
        playsfx();
        var curl = $("#curl").val();
        var url = curl.split('curl "')[1].split('"')[0];
        var headra = curl.split('-H "');
        if(curl.split('--data-raw "')[1]) {
            var post = curl.split('--data-raw "')[1].split('"')[0]
        }
        $('#curl').val('');
        heada = [];
        headra.forEach(function(value, index) {
            head = value.split('"')[0];
            heada.push(head);
        });
        var headeca = [];
        heada.slice(1).forEach(function(value, index) {
            var head = "$headers[] = '" + value + "';";
            headeca.push(head);
        });
        var header = headeca.join('\n');
        console.log('header');
        $('#curl').val("$ch = curl_init(); \ncurl_setopt($ch, CURLOPT_URL, '" + url + "'); \ncurl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); \ncurl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); \ncurl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); \ncurl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); \ncurl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt'); \ncurl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt'); \ncurl_setopt($ch, CURLOPT_POSTFIELDS, '" + post + "');\n\n$headers = array(); \n" + header + "\ncurl_setopt($ch, CURLOPT_HTTPHEADER, $headers); \n\n$result = curl_exec($ch); \ncurl_close($ch);\n");
    });

    $("#copy").click(function(){
        playsfx()
        $("#curl").select();
        document.execCommand('copy');
    });
    $("#clear").click(function(){
        playsfx()
        $('#curl').val('');
    });
});

function playsfx() {
    var x = document.getElementById("bvsfx");  
    x.play(); 
}