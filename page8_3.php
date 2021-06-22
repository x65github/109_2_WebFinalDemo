<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a  href="page8_1.php">上一頁</a>
    <a  href="page9_1.php">下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p>李曼：如果反推兇手的心理…維登先生，你現在會選擇怎麼做呢?</p>
            <p id='Wieden'>維登：我…應該會避開認識的人，而先去接觸不認識的人，好排除不穩定因素…</p>
            <p id='Cole'>柯爾：第一天跟我們接觸過的人…維登，我想起來了!那張照片!</p>
            <p id='Wieden'>維登：?你在說什麼?</p>
            <p id='Cole'>柯爾：是克勞德！難怪我總覺得在哪裡見過他!他跟那張克洛維家族合照上的布雷爾長得一模一樣！等等，克勞德今天晚上會與克洛維公爵見面…</p>
            <p id='Wieden'>維登：糟了…！克洛維公爵有危險！</p>
            <p>第八章 克洛維家族 完</p></div>
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
if ($contents>=9){
    $contents=$contents;
    }
else{
    savegame('9');
    }
    
?>
<?php 
    include("footer.php");
?>
