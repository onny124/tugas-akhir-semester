<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>APLIKASI VOTING</h1>
    <h3>ECOMMERCE</h3>
    <h4> <a href="form.php">Form Tambah</a></h4>
    <table border="1">
        <tr>
            <th>NIK</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Ecommerce</th>
            <th>Aksi</th>
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM tb_ecommerce';
$query = mysqli_query($db, $sql);

while($tb_ecommerce=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$tb_ecommerce['nik']."</td>";
    echo "<td>".$tb_ecommerce['id']."</td>";
    echo "<td>".$tb_ecommerce['nama']."</td>";
    echo "<td>".$tb_ecommerce['ecommerce']."</td>";
    echo "<td>";
    echo "<a href='edit-tambah.php?id=".$tb_ecommerce['id']."'>Edit</a> |";
    echo "<a href='hapus-tambah.php?id=".$tb_ecommerce['id']."'>Hapus</a>";
    echo"</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>