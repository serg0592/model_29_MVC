<div class="item box3 addition">
    <p>Какой-то текст
    </p>
</div>                  
<div class="item box4 addition">
    <p>Какая-то картинка
    </p>
    <?php 
        /*echo <<<'EOD'
            <img src="img/Rectangle 9.1.png">
        EOD;*/
        $img = imagecreatetruecolor(100, 100);
        $bg = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $bg);
        $black = imagecolorallocate($img, 0, 0, 0);
        imageellipse($img, 10, 10, 10, 10, $black);
        //div("Content-type: image/png");
        imagepng($img);
    ?>
</div>
<div class="item box5 addition">
    <p>Какие-то данные
    </p>
</div>