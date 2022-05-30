<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short URL</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/assets/js/qrcode.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
</head>

<body>
    <section><?php esc('template/header')  ?></section>
    <div class="container" style="height: 100%;">
        <div class="row">
            <div class="col-6 box_1">
                <form>
                    <div class="form-group row">
                        <h3>Welcome to</h3>
                        <h1>Short <span>URL</span></h1>
                        <h5>Total URL Clicks: <span class="text_num"><?php echo ($urlscount) ?></span></h5>
                        <label>Copy the shortened link and share other locations.</label>
                        <input type="text" id="formurl" name="url" class="form-control" value="<?= esc($urls) ?>" disabled>
                        <input onclick="copyurls()" class="btn btn-primary col-2" type="button" value="Copy !">
                        <div class="row mt-2">
                            <div class="col-2">
                                <h6>Full URL :</h6>
                            </div>
                            <div class="col-10"><textarea  type="text" style="width: 70%;" disabled><?php echo ($fullurl) ?></textarea></div>
                        </div>
                        <div class="container" style="height: 10rem;">
                            <input id="text" type="text" value="<?php echo ($fullurl) ?>" style="width:80%" hidden>
                            <div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>
                        </div>
                        <div class="row">
                            <a class="col-2" target="_blank" href="/history"><input class="btn btn-qr text-white mt-3 col-3" style="width: 100%;" type="button" value="History"></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <img src="/assets/img/bg.jpg" class="d-inline-block bg_img" style="width: 100%;height:100%;"></img>
            </div>
        </div>
    </div>
    <div class="container" style="height: 5rem;width:5rem;"></div>
    <section><?php esc('template/footer')  ?></section>
</body>
<script>
    function copyurls() {
        /* Get the text field */
        var copyText = document.getElementById("formurl");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

    }
</script>
<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 150,
        height: 150
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

</html>