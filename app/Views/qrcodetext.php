<!DOCTYPE html>
<html xml:lang="ko" lang="ko">

<head>
    <title>Cross-Browser QRCode generator for Javascript</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <script type="text/javascript" src="/assets/js/qrcode.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
</head>

<body>
    <input id="text" type="text" value="http://jindo.dev.naver.com/collie" style="width:80%" /><br />
    <div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>

    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100
        });

        function makeCode() {
            var elText = document.getElementById("text");

            if (!elText.value) {
                alert("Input a text");
                elText.focus();
                return;
            }

            qrcode.makeCode(elText.value);
        }

        makeCode();

        $("#text").
        on("blur", function() {
            makeCode();
        }).
        on("keydown", function(e) {
            if (e.keyCode == 13) {
                makeCode();
            }
        });
    </script>
</body>