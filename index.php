<?php
session_start();
error_reporting(1);
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime('%Y');

if (isset($_POST['color'])){
    $color=$_POST['color'];
    setcookie('color', $color , time()+3600*24*7);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Homework</title>
    <link rel="stylesheet" href="Styles/Styles.css">
</head>
<body>
<header>
    <img class="logo-pic" src="images/about.jpg" alt="about">
    <nav>
        <p class="TableMend"><a href="mendel_table.html" target="_blank">Mendeleev's Periodic Table</a> </p>
    </nav>
    <nav>
        <p class="task_math"><a href="php_tasks.php" target="_blank">Math's tasks</a> </p>
    </nav>
    <nav>
        <?php
        if ($_SESSION['user']){
            echo '<p class="Log_out"><a href="index.php">Log out</a></p>';
        }else{
            echo '<p class ="Log_In"><a href="authorization.php">Log In</a> </p>';
        }
        ?>

    </nav>
</header>
<main>
    <?php
    if ($_SESSION['user']){
        echo '<p class="Message_in">' . $_SESSION['user'] . '</p>';
    }
    unset($_SESSION['user']);
    ?>
    <nav class="today_is">
        <?php
        echo "Сегодня $day число, $mon месяц, $year год."
        ?>
    </nav>
    <nav>
        <div class="block_name">
            <h1><i>Ковалев Иван</i> </h1>
        </div>
    </nav>
    <div class="all_it">
        <div class="page_me">
            <div class="photo_me">
                <img class="block_photo" src="images/tof.jpg" alt="me">
            </div>
            <div class="block_1">
                <?php
                $str = "Всем привет! Расскажу пару слов о себе. Мне 24, учился на программиста, но тогда не придавал этому значения, после получения некого стороннего рабочего опыта, уверенно понял, что хочу связать свою жизнь с программированием и готов для этого на многое. Есть пару хобби: я заядлый киноман и разбираюсь в кальянной индустрии.";
                function FirstWordsColor($str){

                    $a = strpos(
                        'Всем привет! Расскажу пару слов о себе. Мне 24, учился на программиста, но тогда не придавал этому значения, после получения некого стороннего рабочего опыта, уверенно понял, что хочу связать свою жизнь с программированием и готов для этого на многое. Есть пару хобби: я заядлый киноман и разбираюсь в кальянной индустрии.',
                        '!');
                    $a++;
                    $b = substr($str, $a);
                    if (strlen($str) > $a) {
                        $c = substr($str, 0, $a);
                        $c = '<div style ="color: red">' . $c . '</div>';
                        echo '<p>' . '<div class="func_st_1">' . $c . '</div>' . '<div class="func_st_1">' . $b . '</div>' . '</p>';
                    }
                }
                FirstWordsColor($str);
                ?>
            </div>
            <div class="block_2">
                <?php
                $str = 'Касательно курсов, хочется сказать, что мне все нравится. Очень интересно и информативно, также эти курсы оставляют интересные задачи после занятий, в которых нужно разобраться уже самому, чтобы пройденая тема обрела краски. Очень интересно.';
                function secondWordColor($str)
                {
                    $a = explode(" ", $str);
                    foreach ($a as $key => $value) {
                        if (($key % 2) == 0) {
                            $value = '<span class="func_st_1" style ="color: blue">' . $value . " " . '</span>';
                            echo $value;
                        } else {
                            $value = '<span class="func_st_1" style ="color: teal">' . $value . " " . '</span>';
                            echo $value;
                        }
                    }
                }
                secondWordColor($str);
                ?>
            </div>
        </div>
        <section>
            <div class="favorites_tob">
                <h2>Любимые марки табаков:</h2>
            </div>
            <div class="tob_container">
                <div class="Spec_box1">
                    <img class="img_1" src="images/spectrum.png" alt="spectrum">
                    <h3> Spectrum Tobacco</h3>
                    <p>Табак из Северной столицы, появившийся на рынке в далеком 2015 году. За историю существования бренда было презентовано более 40 вкусов и их количество непрерывно растет. Вкусы табака для кальяна «Spectrum» отличаются своим многообразием и уникальностью, поэтому «Spectrum» подходит как для новичков, которые только знакомятся с кальянным табаком, так и для профессионалов индустрии, которые создают самые необычные миксы. В своем производстве мы используем только сертифицированное сырье высшего качества, включая табачный лист сорта Burley.<p>
                </div>
                <div class="Satyr_box2">
                    <img class="img_2" src="images/satyr_ultra_last.jpg" alt="satyr">
                    <h3> Satyr Tobacco</h3>
                    <p>Табак Satyr начинал с небольшого крафтового производства, а на сегодняшний день это один из популярнейших российских табаков для кальяна. Философия бренда заключается в развитии культуры курения, поэтому первые партии табака выпускались в неароматизированных вариациях и представляли собой бленды различных табачных сортов средней крепости. Со временем добавилась и ароматика, которая отличается от конкурентов своей яркостью и натуральностью.</p>
                </div>
                <div class="Ch_box3">
                    <img class="img_3" src="images/chabacco.jpg" alt="chabacco">
                    <h3>Chabacco Tobacco</h3>
                    <p>Уникальная бестабачная смесь на основе высококачественного китайского чая. Chabacco отличается продолжительностью курения и насыщенностью вкуса, одновременно являясь идеальной базой для миксологии.</p>
                </div>
                <div class="Brus_box4">
                    <img class="img_4" src="images/brusko.png" alt="brusko">
                    <h3>Brusko Tobacco</h3>
                    <p>Табак BRUSKO — это продукт, разработанный на основе бленда сортов итальянского Бёрли. Табачная линейка представлена сбалансированными ароматами: это фруктово-ягодные миксы, десерты и классические моновкусы. Упор сделан на разработку привычной ароматики и её улучшения, а также на сбалансированную крепость табачной смеси.</p>
                </div>
            </div>
            <div class="favorites_tob">
                <h3>Марки табаков, также заслуживающих внимания:</h3>
            </div>
        </section>
        <section>
            <div class="grid_container">
                <div class="item g_1">
                    <img class="img_5" src="images/severny.jpg">
                </div>
                <div class="item g_2">
                    <img class="img_6" src="images/sebero.jpeg">
                </div>
                <div class="item g_3">
                    <h3>Северный</h3>
                    «Северный» – это готовый универсальный продукт как для домашних курильщиков, так и для мастеров в заведениях.
                    Вам не нужно обладать особыми навыками забивки кальяна, чтобы ощутить его высокие показатели вкуса, крепости и дымности.
                </div>
                <div class="item g_4">
                    <h3>Sebero Tobacco</h3>
                    Табак Sebero - один из ярчайших представителей Российских премиальных брендов. Необычайно натуральные вкусы в сочетании с неожиданно мягким опьянением от листьев сорта Burley и приятными ценами, сделали табак Себеро сильнейшим конкурентом для уже устоявшихся производителей.
                </div>
                <div class="item g_5">
                    <img class="img_7" src="images/ds.jpg">
                </div>
                <div class="item g_6">
                    <img class="img_8" src="images/elemlast.jpg">
                </div>
                <div class="item g_7">
                    <h3>Dark Side Tobacco</h3>
                    Один из лидеров российского кальянного рынка в сегменте темных табаков. DARKSIDE Tobacco производится на основе бленда Burley в 3 линейках крепости
                    с применением технологии Unwashed/Boiled. Любая линейка табаков DARKSIDE обладает высокой жаростойкостью, яркой вкусопередачей и при воздушной забивке с отступом и без касания рассчитана на работу в течение часа (60 минут), равномерно отдавая как вкус, так и крепость.
                </div>
                <div class="item g_8">
                    <h3>Element Tobacco</h3>
                    ELEMENT — табак для кальяна, созданный на основе природных ингредиентов. На восприятие табака во многом влияет его крепость, именно поэтому появилась концепция четырех стихий, самой лёгкой из которых стал воздух, а самой крепкой — огонь. ВОЗДУХ, ВОДА, ЗЕМЛЯ, ОГОНЬ  — 4 стихии, чтобы каждый мог выбрать свою!
                </div>
            </div>
        </section>
    </div>
    <footer>

<?php
        echo "<br>";
        function Vowels_Words($str){
        $str = file_get_contents('index.php');
        $strVowel = file_get_contents('index.php');
        $str = preg_replace("/[a-zA-Z]/i", "", $str);
        $str = str_replace(array('-'), '', $str);
        $str = str_replace(array("'"), '', $str);
        $tempWords = str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
        $strVowel = str_replace(array("с"), '', $strVowel);
        $countVowel = preg_replace("/[аяуюоеёэиыАЯУЮОЕЁЭИЫ]/i", "", $strVowel);
        $count = mb_strlen($strVowel) - mb_strlen($countVowel);
        echo $count . " - гласных на сайте";
        echo "<br>";
        echo count($tempWords) . " - слов на сайте";
        echo "<br>";
        }
        Vowels_Words($str);
        ?>
<?php

if ($_POST['color']=="darkgray"){
    $clr = 'darkgray';
}elseif ($_POST['color']=="pink"){
    $clr = 'pink';
}elseif ($_POST['color']=="darkolivegreen"){
    $clr = 'darkolivegreen';
}elseif ($_POST['color']=="lightskyblue"){
    $clr = 'lightskyblue';
}elseif (!isset($_POST['color'])){
    $clr=$_COOKIE['color'];
}
?>
        <body style="background-color: <?php echo $clr; ?>"></body>
        <form action="" method="post">
            <p>
                <label>
                    chose:
                </label>
                <select name="color">
                    <option class="gr" value="darkgray">Gray(default)</option>
                    <option class="te" value="pink">Pink</option>
                    <option class="te" value="darkolivegreen">Green</option>
                    <option class="blue" value="lightskyblue">Blue</option>
                </select>
            </p>
            <p>
                <button type="submit">send</button>
            </p>
        </form>
    </footer>
</main>
</body>
</html>