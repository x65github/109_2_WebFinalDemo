<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page4_3.php">上一頁</a>
        <a href="page5_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p id='Wieden'>維登：不過話說回來，你不覺得這個城堡，這個家族哪裡怪怪的嗎?對了，這裡既然那麼多雜物，就翻翻看說不定有線索呢?</p>
            <p id='Cole'>柯爾：咦!那邊箱子旁邊的是什麼啊?</p>
            <p id='Wieden'>維登：是...一個相框。上面灰塵好厚。咳咳...是老公爵一家的合照，這是瑪莉老公爵...公爵和公爵夫人...這是奧斯頓‧克洛維公爵...<br>
            這在克洛維公爵旁邊的這位...是他的兄弟嗎?看起來應該是弟弟?...可是從未聽說克洛維家有兩個兒子啊?</p>
            <p id='Cole'>柯爾：會不會是發生了什麼意外?</p>
            <p id='Wieden'>維登：恩...有可能。明天去找克洛維公爵問問好了，我對公爵與公爵夫人的離開也有點在意。</p>
            <p>(同一時間大廳)</p>
            <p>弗蘭茲家大哥:「我們要離開!什麼也攔不住我們弗蘭茲三兄弟!這種鬼地方誰待得下去!我可不想成為下一個!」</p>
            <p>荷鲁斯‧魏斯曼:「噢!不!我敬愛的伯爵啊!外頭下大雨，你們出去太危險了!還是留在屋子裡吧!」</p>
            <p>弗蘭茲家二哥:「放心吧!我們出去後會幫你們報警的!我們非常仁慈!別擔心!噢!我的朋友們!上帝會保佑我們的!」</p>
            <p>弗蘭茲家小弟:「...」</p>
            <p>三人出了門上了馬車，隨著馬車聲漸漸遠去，古堡又恢復了暫時的平靜，除了眾人的呼吸聲，別無他響。</p>
		<p>第四章 暗夜 完</p>
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
if ($contents>=5){
    $contents=$contents;
    }
else{
    savegame('5');
    }
    
?>
<?php 
    include("footer.php");
?>
</body>
</html>

