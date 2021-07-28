<html>
    <head>
        <meta http-equiv="Content-Type" content="image/png; charset=utf-8"/>
    </head>
<body>
<script src="qrcode.js"></script>
<script>
        var parsedUrl = new URL(window.location.href);
        var val = 'test';
        val = parsedUrl.searchParams.get("val");
		console.log(parsedUrl.searchParams.get("val"));

        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: val,
            width: 128,
            height: 128,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
    
</script>
<div id="qrcode"></div>
</body>
</html>