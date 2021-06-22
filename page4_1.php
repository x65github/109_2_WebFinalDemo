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
jump(4);
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a target="_blank" href="page3_4.php">上一頁</a>
    <a target="_blank" href="page4_2.php">下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound2' style="display:none;" controls >
    <source src="Sound/4_knocking_a_wooden_door1.mp3" type="audio/mpeg">
    音檔播放失敗!瀏覽器不支援此技術!
    </audio>
    <div id='autotype'>
    <p>《第四章 暗夜》</p>
            <p>(晚上8. 走廊盡頭的客房)</p>
            <p id='Cole'>柯爾：這是什麼爛房間啊!我們這兩間根本是儲藏室吧!管家太過分了啦!</p>
            <p id='Wieden'>維登：沒辦法，老管家顯然不歡迎我們</p>
            </div><div id='autotype2'>
            <p>(敲門聲)</p>
            <form name="myForm" action='page4_2.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend><p>請進行選擇:</p></legend>
                    <input type="radio" name="choice" value="choice4-1" >開門<br>
                    <input type="radio" name="choice" value="choice4-2" >請問是哪位呢?<br>
                    <input type="radio" name="choice" value="choice4-3" >不開門<br>
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>
    </div>
</div>
<?php 
    include("footer.php");
?>
