
<footer style="background-color: <?php if (isset( $_SESSION['color'])){echo $_SESSION['color']; }?>">
    <?php
    session_start();
    //Функция времени
    function my_time()
    {
        $today = date('d-m-Y');
        $my_birthday = '28-11-1990';
        $arr_today = explode('-', $today);
        $arr_my_birthday = explode('-', $my_birthday);
        $day = $arr_today[0] - $arr_my_birthday[0];
        $month = $arr_today[1] - $arr_my_birthday[1];
        $year = $arr_today[2] - $arr_my_birthday[2];
        $summ_day = ($day) + ($month * 31) + $year * 365;
        return $summ_day;
    }
    global $count_name, $count_information, $count_like, $count_text1, $count_text2, $count_text3, $count_text4, $count_text5, $count_text6, $count_text7, $count_text8;
$count_word = $count_name + $count_information + $count_like + $count_text1 + $count_text2 + $count_text3 + $count_text4 + $count_text5 + $count_text6 + $count_text7 + $count_text8;
    global $glas_name, $glas_self, $glas_self, $glas_text1, $glas_text2, $glas_text3, $glas_text4, $glas_text5, $glas_text6, $glas_text7, $glas_text8;

$count_glas =  $glas_name + $glas_self + $glas_self + $glas_text1 + $glas_text2 + $glas_text3 + $glas_text4 + $glas_text5 + $glas_text6 +  $glas_text7 + $glas_text8;
    ?>

     <p>Колличество слов на странице: <?php echo $count_word ?></p>
    <p>Колличество гласных букв на странице: <?php echo $count_glas ?> </p>
    <p>Автор: Бикулов Руслан. Дата рождения: 28-11-1990 <time><?php echo "или " . my_time() . " дней" ?></time></p>
    <p>Copyright © CREATIVE TOOLS STUDIO. Текущая дата, время: <time><?php echo date('d-m-Y')?></time>
    </p>
    <address>Оренбург, Россия.</address>


</footer>


</body>
</html>