<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<style>
    table{
        margin: auto;
    }
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    
</style>
<body>
    <table class="my-5 table-bordered" style="width: 40%">
        <tr>
            <th style="width:5%;">No</th>
            <th style="width:7%; text-align: center;">Kode</th>
            <th style="width:27%;">Nama Barang</th>
            <th class="text-center" style="width:16%;">Harga</th>
            <th class="text-center" style="width:16%;">Jumlah</th>
            <th class="text-center" style="width:16%;">Subtotal</th>
        </tr>
        <?php
            $barang = array(
                array("Kode Barang" => "B001", "Nama Barang" => "Laptop Asus", "Harga" => 9000000, "Jumlah" => 3),
                array("Kode Barang" => "B002", "Nama Barang" => "Keyboard Logitech", "Harga" => 850000, "Jumlah" => 4),
                array("Kode Barang" => "B003", "Nama Barang" => "Speaker", "Harga" => 500000, "Jumlah" => 6),
                array("Kode Barang" => "B004", "Nama Barang" => "Printer Epson", "Harga" => 3000000, "Jumlah" => 7),
            );
            $total = 0;
            function rupiah($angka){
                $hasilRupiah = "Rp " . number_format($angka, 0, '', '.');
                return $hasilRupiah;
            }
            function hitungSubtotal($harga, $jumlah){
                $subtotal = $harga * $jumlah;
                return rupiah($subtotal);
            }
            foreach($barang as $subArray => $item){
                $subtotal = $item["Harga"] * $item["Jumlah"];
                $total += $subtotal;
        ?>
        <tr>
            <td><?php echo $subArray + 1?></td>
            <td><?php echo $item["Kode Barang"]?></td>
            <td><?php echo $item["Nama Barang"]?></td>
            <td style="text-align: right;"><?php echo rupiah($item["Harga"]);?></td>
            <td style="text-align: center;"><?php echo $item["Jumlah"]?></td>
            <td style="text-align: right;"><?php echo hitungSubtotal($item["Harga"], $item["Jumlah"]); ?></td>
        </tr>
        <?php
            }
        ?>
        <tr>
            <td colspan="5"  style="text-align: right;"><b>TOTAL</b></td>
            <td  style="text-align: right;"><b><?php echo rupiah($total); ?></b></td>
        </tr>
    </table>
</body>
</html>