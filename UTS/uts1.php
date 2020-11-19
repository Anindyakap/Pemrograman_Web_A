<?php
    session_start();
    $database_name = "Product_details";
    $con = mysqli_connect("localhost","root","aninrangga",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["keranjang"])){
            $item_array_id = array_column($_SESSION["keranjang"],"id_produk");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["keranjang"]);
                $item_array = array(
                    'id_produk' => $_GET["id"],
                    'nama_barang' => $_POST["nama_hide"],
                    'harga_barang' => $_POST["harga_hide"],
                    'jumlah_barang' => $_POST["kuantitas"],
                );
                $_SESSION["keranjang"][$count] = $item_array;
                echo '<script>window.location="uts1.php"</script>';
            }else{
                echo '<script>alert("Produk sudah ada")</script>';
                echo '<script>window.location="ust1.php"</script>';
            }
        }else{
            $item_array = array(
                'id_produk' => $_GET["id"],
                'nama_barang' => $_POST["nama_hide"],
                'harga_barang' => $_POST["harga_hide"],
                'jumlah_barang' => $_POST["kuantitas"],
            );
            $_SESSION["keranjang"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["keranjang"] as $keys => $value){
                if ($value["id_produk"] == $_GET["id"]){
                    unset($_SESSION["keranjang"][$keys]);
                    echo '<script>alert("Produk sudah dihapus!")</script>';
                    echo '<script>window.location="uts1.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Pak Adi</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .produk{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>

    <div class="container" style="width: 65%">
        <h2>Toko Pak Adi</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="uts1.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="produk">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="kuantitas" class="form-control" value="1">
                                <input type="hidden" name="nama_hide" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="harga_hide" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Tambah ke Keranjang">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Detail Penjualan</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Nama Produk</th>
                <th width="10%">Jumlah</th>
                <th width="13%">Harga</th>
                <th width="10%">Total Harga</th>
                <th width="17%">Hapus Barang</th>
            </tr>

            <?php
                if(!empty($_SESSION["keranjang"])){
                    $total = 0;
                    foreach ($_SESSION["keranjang"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["nama_barang"]; ?></td>
                            <td><?php echo $value["jumlah_barang"]; ?></td>
                            <td>Rp. <?php echo $value["harga_barang"]; ?></td>
                            <td>
                                Rp. <?php echo number_format($value["jumlah_barang"] * $value["harga_barang"], 2); ?></td>
                            <td><a href="ust1.php?action=delete&id=<?php echo $value["id_produk"]; ?>"><span
                                        class="text-danger">Hapus Barang</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["jumlah_barang"] * $value["harga_barang"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">Rp. <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>


</body>
</html>
