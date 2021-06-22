<?php 
    include("header.php");
?>
    <div id="pages_short">
    <span id="title">頁面：</span>
    <a  href="page9_3.php">上一頁</a>
    </div>
    <div id='main'>
    <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/ending.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    <div id='autotype'>
            
            <p>晚安了，布雷爾。</p>
            <p>《TRUE END : 兄弟》</p></div>
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
if ($contents>=10){
    $contents=$contents;
    }
else{
    savegame('10');
    }
    
?>
<?php 
    include("footer.php");
?>
