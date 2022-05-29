<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History | Short URL</title>
</head>

<body>
    <div class="container" style="height: 100%;">
        <div class="row">
            <div class="col-12 box_1">
                <form>
                    <div class="form-group row">
                        <h3>History</h3>
                        <h1>Short <span>URL</span></h1>
                        <table class="table table-bordered" id="users-list">
                            <thead>
                                <tr>
                                    <th>Full URL</th>
                                    <th>Short URL</th>
                                    <th>Total Cilick</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($history) : ?>
                                    <?php foreach ($history as $historys) : ?>
                                        <tr>
                                            <td><?php echo $historys['full_url']; ?></td>
                                            <td><?php echo $historys['short_url']; ?></td>
                                            <td><?php echo $historys['urlcount']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#users-list').DataTable();
    })
</script>

</html>