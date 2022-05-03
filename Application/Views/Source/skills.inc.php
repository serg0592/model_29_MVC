<div class="skills">
    <h2>Мои навыки</h2>                        
    <p>Adobe Photoshop</p>
    <div class="skill1"></div>
    <div class="skill1_2"></div>
    <p>Adobe Photoshop</p>
    <div class="skill2"></div>
    <div class="skill2_2"></div>
    <p>Adobe Photoshop</p>
    <div class="skill3"></div>
    <div class="skill3_2"></div>
    <p class="php-data">
        <?php  ?>
        <?php
            $a = 23;
            $b = 2;
            $c = $a * $b;
            $d = 1.2e5;
            $e = 7e-4;
            $z = &$a;
            echo '23=', ' ', $a . '<br>';
            echo '2=', ' ', $b . '<br>';
            echo '46=', ' ', $c . '<br>';
            echo '120 тыщ через е=', ' ', $d . '<br>';
            echo '7 десятитысячных через е=', ' ', $e . '<br>';
            echo 'вывод типа переменной $t (логическая)', ' ', gettype($t) . '<br>';
            echo 'ссылка на переменную $z=', $z;
        ?>
    </p>
</div>