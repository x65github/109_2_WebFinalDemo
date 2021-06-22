<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page2_6_1.php">上一頁</a>
        <a href="page3_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    
    <div id='autotype' style="display:none;">
            
            <p>荷鲁斯‧魏斯曼:現在就得把凱爾特小姐監禁起來，明天送到警局去!你們兩個是不是冒牌貨我不管，我必須確保歐蒂絲莊園的安全!</p>
            <p>奧斯頓‧克洛維:到此為止吧，荷鲁斯。對客人如此無禮，難道克洛維家族是這樣教導你的嗎?</p>
            <p>總管家：老爺，是的，小的逾越了，實在非常失禮，對不起。</p>
            <p>奧斯頓‧克洛維:不好意思我家僕人給您見笑了，尤金子爵，維登先生。這種事發生在我的城堡，請務必要查清楚真相。</p>
		<p>第二章 貓鼠遊戲 完</p>
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
if ($contents>=3){
    $contents=$contents;
    }
else{
    savegame('3');
    }
    
?>
<?php 
    include("footer.php");
?>


