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
jump(2);
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page1_6.php">上一頁</a>
        <a href="page2_2.php">| 下一頁</a>
    </div>
    <div id='main'>
     <audio id='sound' style="display:none;" controls autoplay >
                <source src="Sound/classmusic.mp3" type="audio/mpeg">
                音檔播放失敗!瀏覽器不支援此技術!
        </audio>
    <div id="autotype" style="display:none;">
       
        <p>《第二章 貓鼠遊戲》</p>
        <p id='Cole'>柯爾：維登!!你看!!這麼多好吃的!!我們真是來對了呢!!</p>
        <p id='Wieden'>維登：天啊!這種場面我可能一輩子都見不到!</p>
        <p id='Cole'>柯爾：這些餐具看起來全都好貴...我們現在順兩個走吧，轉賣能得一大筆錢，嘿嘿嘿嘿嘿....</p>
        <p id='Wieden'>維登：對欸!但這裡僕人多，得找個好時機下手才行......咦?話說瑪莉老公爵剛過世，為什麼那麼多人都穿的這麼花俏?</p>
        <p id='Cole'>柯爾：他們好像對老公爵的離開不是很在意?我先去拿點吃的...哎呀!</p>
        <p>???(簡):啊!這位先生!非常抱歉...撞到您了....</p>
        <p>凱爾特老男爵:簡!過來!</p>
        <p>簡:真的很抱歉，父親喊我了，我晚點一定來向您賠罪</p>
        <p id='Wieden'>維登：怎麼了?</p>
        <p id='Cole'>柯爾：沒事，被撞到一下而已。她是叫簡嗎?真漂亮!簡直就是我的夢中情人!</p>
        <p id='Wieden'>維登：醒醒吧!人家可是貴族!你別癩蛤蟆想吃天鵝肉!</p>
        </div>
    </div>
</div>
<?php 
    include("footer.php");
?>