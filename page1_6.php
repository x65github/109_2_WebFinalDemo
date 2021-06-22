<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page1_5.php">上一頁</a>
        <a href="page2_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype' style="display:none;">
        <p id='Cole'>柯爾：敝人唐恩‧尤金</p>
        <p id='Wieden'>維登：(這傢伙還是很擅長一秒變臉阿...)</p>
        <p>門口的女侍：公子，歡迎，請進吧。宴會即將開始，老爺馬上就會出來了。</p>
        <p>此時，維登柯爾二人尚未意識到，他們即將面對的，是個陰謀極深的離奇事件...</p>
	<p>第一章 起始 完</p></div>
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
if ($contents>=2){
    $contents=$contents;
    }
else{
    savegame('2');
    }
    
?>
<?php 
    include("footer.php");
?>
</body>
</html>

