<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short URL</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 box_1">
                <h3>Welcome to</h3>
                <h1>Short <span>URL</span></h1>
                <form action="<?= site_url('/submit-form'); ?>" method="post" name="url">
                    <div class="form-group row">
                        <label>Paste the URL to be shortened</label>
                        <input type="text" name="url" class="form-control" value="Enter the link here">
                        <input type="submit" type="submit" class="btn btn-primary col-2" value="Short !">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <img src="/assets/img/bg.jpg" class="d-inline-block bg_img" style="width: 100%;height:100%;"></img>
            </div>
        </div>
    </div>
    <div class="container_box">
    </div>
    <div class="container_box">
    </div>
</body>
<script>
    function load() {
        var query = window.location.pathname;
        console.log(query);
    }
    window.onload = load;
</script>

</html>