<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a target="_blank" href="page7_5.php">上一頁</a>
    <a target="_blank" href="page8_1.php">下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p id='Cole'>柯爾:也好，剛剛女僕過來傳話說李曼父母答應與我們見面了，我們吃完趕緊過去吧。克勞德先生，你要一起來嗎?</p>
            <p>克勞德：阿，很抱歉，雖然我非常想去，但今天晚上克洛維公爵說想找我談談，可能要缺席子爵您那邊的事情了。</p>
            <p id='Cole'>柯爾:!你跟公爵有約怎麼不早說?我們一直沒機會找他!</p>
            <p>克勞德：下午的時候你們聊到我原本想講的，但後來貝絲和博蒙德子爵的事突然發生...沒找到時機提起...公爵找我應該是因為我弟弟的事吧。</p>
            <p id='Wieden'>維登：那好吧，可以的話麻煩你告訴公爵我們想跟他談談好嗎。這個下午謝謝你了。</p>
            <p>克勞德：我會這麼做的，我才要謝謝尤金子爵跟維登先生願意讓我幫忙，今天的偵探遊戲我玩得很盡興喔。</p>
            <p>第七章 支離破碎 完</p></div>
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
if ($contents>=8){
    $contents=$contents;
    }
else{
    savegame('8');
    }
    
?>
<?php 
    include("footer.php");
?>
