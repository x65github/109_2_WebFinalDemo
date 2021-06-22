<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a  href="page9_2.php">上一頁</a>
    <a  href="page9_4.php">下一頁</a>
    </div>
    <div id='main'>
    <audio id='sound' style="display:none;" controls autoplay >
            <source src="Sound/ending.mp3" type="audio/mpeg">
            音檔播放失敗!瀏覽器不支援此技術!
            </audio>
    <div id='autotype'>
            <p>。。。</p>
            <p>「好痛苦…快要不能呼吸了…」</p>
            <p>「……又是一個人，沒有人願意幫我…」</p>
            <p>「...父親、母親、奶奶...救救我...」</p>
            <p>「…………」</p>
            <p>「……哥哥…..」</p>
            
      
            <p>…布雷爾?</p>
            <p>…哥哥?</p>
            <p>抱歉…我來晚了。布雷爾，我來救你了。一直以來都獨自一人，你很辛苦吧…</p>
            <p>嗯…</p>
            <p>這次有人對你伸出援手了，布雷爾，我跟爸媽，還有奶奶，都愛著你喔…不管你在什麼時候呼喚我們，我們都會趕到你身邊的…</p>
            <p>哥哥…我…一直以來都好寂寞……</p>
            <p>嗯，我知道。</p>
            <p>但從此以後，你不再是一個人了喔。</p>
            <p>哥哥會一直陪著你的。</p>
            </div>
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
