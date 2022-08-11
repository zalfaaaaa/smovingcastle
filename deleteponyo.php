<?php

    $ponyo = new PDO ('mysql:host=localhost;dbname=bandungsugoi','root','');
    $query = $ponyo->query('select * from murid');

    while ($data = $query->fetch()):?>
    <P>
        <a href="updateland.php?id=<?= $data['id']; ?>"> 
            <?= $data['nama']?> 
        </a>

        <a href="ponyosbrain.php?id=<?= $data['id']; ?>"style="color:white;background:pink;padding:2px;border-radius:3px"> 
            Hapus
        </a>
    </p>
    <?php endwhile ?>