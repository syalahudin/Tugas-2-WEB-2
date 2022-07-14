<?php
$link = 'https://al-quran-8d642.firebaseio.com/data.json?print=pretty';
$konten = file_get_contents($link);
$data = json_decode($konten,true);

?>

<table border="1">
    <tr>
        <td>Nama</td>
        <td>Keterangan</td>
        <td>Type</td>
        <td>Urut</td>
    </tr>

    <?php
    
    for($i=0; $i < count($data);$i++){
        $baris=$data[$i];
        ?>

        <tr>
            <td><?php echo $baris['nama'] ?></td>
            <td><?php echo $baris['keterangan'] ?></td>
            <td><?php echo $baris['type'] ?></td>
            <td><?php echo $baris['urut'] ?></td>
        </tr>
    <?php
    }
    
    ?>

</table>


