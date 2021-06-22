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
jump(6);
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page5_6.php">上一頁</a>
        <a href="page6_2.php">| 下一頁</a>
    </div>
    <div id='main'>

    <div id='autotype'>
            <p>《第六章 迷霧中的巨響》</p>
            <p>城堡走廊內)</p>
            <p id='Wieden'>維登：早上情況混亂，找不到時機問克洛維公爵，我還是想把事情搞清楚。</p>
            <p id='Cole'>柯爾：所以我們現在才走在這裡啊。這都下午四點半了，時間過的真快，發生太多事了。這克洛維公爵怎麼到處找不著人呢，該不會殺人去了吧哈哈哈哈....喂!維登！你倒是笑啊!</p>
            <p id='Wieden'>維登：別吵!我在整理思維！</p>
            <p>克勞德·埃舍爾：二位好啊。</p>
            <p id='Wieden'>維登：(怎麼感覺這一幕似曾相似...)</p>
            <p>．．．</p>
            <p>克勞德：原來如此，兩位從早上開始就在調查此事的兇手啊...昨天的推理真的是太精采了，我沒想到維登先生您這麼有才華呢！請問兩位若不嫌棄，讓我也助你們一臂之力如何?<br>
            在下自認觀察力比普通人敏銳，雖為遠房，但我好歹也生活在這個城鎮，對克洛維家族也算了解，如果我知道的情報能案情進展有幫助那就太好了！啊順便，二位稱呼我為克勞德就行了，我們年紀都差不多。</p>
            <p id='Wieden'>維登：(小聲)柯爾，沒想到還有比你更自來熟的人啊...</p>
            <p id='Cole'>柯爾：喂，你從昨天開始是怎麼了，嗆我的嘴就沒停下來過啊...</p>
            
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>