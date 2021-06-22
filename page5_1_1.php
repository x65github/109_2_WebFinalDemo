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
jump(5);
?>
    <div id="pages_short">
        <span id="title">頁面：</span>
        <a href="page5_1.php">上一頁</a>
    </div>
    <div id='main'>
    
    <div id='autotype'>
            <p>(莊園大廳)</p>
            <p>???：.....您好</p>
            <form name="myForm" action='page5_2.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice5-1" >回頭<br>
                    <input type="radio" name="choice" value="choice5-2" >"柯爾我們趕緊去找克洛維公爵吧，我對昨天我們看到的那張照片很在意。"<br>
                    <input type="submit" value="確定" />
                </fieldset>
            </form>
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>
