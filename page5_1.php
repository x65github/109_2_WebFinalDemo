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
jump(5);
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page4_3.php">上一頁</a>
        <a href="page5_1_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound2' style="display:none;" controls  >
            <source src="Sound/1_horse.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    <div id='autotype'>
		<p>《第五章 死神降臨》</p>
            <p>(隔天早上)</p>
            <p>僕人A：昨晚雨下的真大....不知道農舍的屋頂有沒有損壞...</p>
            <p>僕人B：我們還是趕緊坐馬車進城吧，老爺要我們去報警，還是快去快回的好。</p>
            <p>僕人A:等等....停!!!</p>
            </div><div id='autotype2'>
            <p>音效：馬車煞車聲</p>
            <p>僕人A:....那不是弗蘭茲家的馬車嗎...怎麼翻覆了?馬兒在哪?</p>
            <p>僕人B: 喂，你看馬車前面...!!</p>
            <p>僕人A:伯爵，您還好嗎!</p>
            <p>僕人B：不行!大伯爵跟二伯爵都已經沒有呼吸了！太殘忍了，到底是誰做出這種事...</p>
            <p>弗蘭茲小弟:..........嗚</p>
            <p>僕人A:！小伯爵還有呼吸！得趕緊把小伯爵載回莊園!</p>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>
