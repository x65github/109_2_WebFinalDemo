<?php 
    include("header.php");
?>
<?php 
function readgame(){
    $file='game.txt';
    if (file_exists($file)){
        $fp=fopen($file,"r");
        $contents=fread($fp,filesize($file));
        $contents=(int)$contents;
        fclose($fp);
        return $contents;
        }
    else{
        $fp=fopen($file,"w");
        $contents='1';
        fwrite($fp,$contents);
        fclose($fp);
        $contents=(int)$contents;
        return $contents;
        }
    }
function jump($now){
    if (readgame()<$now){
    echo '<script language="JavaScript">;alert("未解鎖此頁面，即將跳轉至首頁");location.href="home.php";</script>;';
        }
    }
jump(3);
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page2_7.php">上一頁</a>
        <a href="page3_2.php">| 下一頁</a>
    </div>
    <div id='main'>
        <div id="autotype">
		<p>《第三章 撲朔迷離》</p>
            <p id='Wieden'>維登：女傭有看到後門有人進出嗎?</p>
            <p>女傭:沒有的</p>
            <p id='Wieden'>維登：這裡除了大門後門還有出口嗎?</p>
            <p>(女傭:還有傭人專用門，平時沒有人看守，只有總管家，也就是魏斯曼先生有鑰匙，進出都得取得總管家同意。<br>
            對了!肖特公爵走出去後沒多久我聽其他人說魏斯曼先生從專用門出去查看雞舍了。</p>
            <p id='Wieden'>維登：有人能證明總管家真的是去看雞舍嗎?</p>
            <p>僕人們:沒有</p>
            <p id='Wieden'>維登：這樣一來魏斯曼先生也有跟簡一樣的嫌疑了</p>
            <p>荷鲁斯‧魏斯曼:這位先生，請你出去!</p>
            <p>奧斯頓‧克洛維:荷鲁斯。</p>
            <p>荷鲁斯‧魏斯曼:好的老爺，我很抱歉。</p></div>
    </div>
</div>
<?php 
    include("footer.php");
?>


