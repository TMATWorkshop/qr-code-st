<html>
    <head>
        <meta http-equiv="Content-Type" content="image/png; charset=utf-8"/>
        <script src="qrcode.js"></script>
        <script>
            function createQR() {
                var parsedUrl = new URL(window.location.href);
                var val = 'test';
                val = parsedUrl.searchParams.get("val");
                console.log(parsedUrl.searchParams.get("val"));
                new QRCode(document.getElementById("qrcode"), val);
            }
        </script>
    </head>
<body onload="createQR()">
<div id="qrcode"></div>
</body>
</html>