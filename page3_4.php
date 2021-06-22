<?php 
    include("header.php");
?>

    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page3_3.php">上一頁</a>
        <a href="page4_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <div id="autotype" style="display:none;">
        <p id='Wieden'>維登：不，他也可能不是被石頭砸死的，你們不覺得受傷痕跡很奇怪嗎?<br>
	撞擊的痕跡只有一道，而且我們沒聽到肖特公爵的叫聲，
        雖然不排除是因為雨聲太大沒聽到，<br>
        　　　但也有可能他被砸的時候就是沒有意識的，或甚至他被砸前就死了。<br>
        　　　他以前有昏迷過或是有什麼疾病會讓他突然失去意識嗎?</p>
        <p>肖特夫人:沒有的....他除了愛吃點，一直都很健康...嗚嗚嗚</p>
        <p id='Wieden'>維登:那麼，他有可能是被毒死的，而毒有延遲性，他中毒後去廁所剛好起效，這樣一來，雖然簡還是有嫌疑，但全場的客人也都不能洗清嫌疑。</p>
        <p>貴婦:你別亂栽贓!</p>
        <p id='Wieden'>維登:這只是推測，兇手應該不是把毒加在菜裡，不然不
        會只有肖特公爵中毒，所以廚師們沒有嫌疑。</p>
        <p>克洛維:現在這麼晚了，外面雨下這麼大，各位貴賓先回到房間待著吧。
        兇手還留下了不准離開否則大家會死的警告，<br>
        明天白天僕人去報警，當然也會給維登先生、柯爾先生謝禮
        ，今晚傭人晚上走廊加強巡視!</p>
	<p>第三章 撲朔迷離 完</p></div>
    </div>
</div>
<?php
function savegame($content){
    $file='game.txt';
    $fp=fopen($file,"w");
    if (fwrite($fp,$content)){
        fclose($fp);
        return '已儲存遊戲進度！';}
    else{
        fclose($fp);
        return '發生未知錯誤，無法儲存遊戲進度';}
    }
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
$contents=readgame();
if ($contents>=4){
    $contents=$contents;
    }
else{
    savegame('4');
    }
    
?>
<?php 
    include("footer.php");
?>