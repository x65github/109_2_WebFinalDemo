<?php 
    include("header.php");
?>
<div id='main'>
<h1>遊戲名稱：</h1>
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
function howmany($num){
    $ch2='未解鎖';$ch3='未解鎖';$ch4='未解鎖';$ch5='未解鎖';
    $ch6='未解鎖';$ch7='未解鎖';$ch8='未解鎖';$ch9='未解鎖';
    switch($num){
        case 2:
            $ch1='已解鎖';
            $ch2='已解鎖';
            break;
        case 3:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            break;
        case 4:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            $ch4='已解鎖';
            break;
        case 5:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            $ch4='已解鎖';
            $ch5='已解鎖';
            break;
        case 6:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            $ch4='已解鎖';
            $ch5='已解鎖';
            $ch6='已解鎖';
            break;
        case 7:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            $ch4='已解鎖';
            $ch5='已解鎖';
            $ch6='已解鎖';
            $ch7='已解鎖';
            break;
        case 8:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            $ch4='已解鎖';
            $ch5='已解鎖';
            $ch6='已解鎖';
            $ch7='已解鎖';
            $ch8='已解鎖';
            break;
        case 9:
            $ch1='已解鎖';
            $ch2='已解鎖';
            $ch3='已解鎖';
            $ch4='已解鎖';
            $ch5='已解鎖';
            $ch6='已解鎖';
            $ch7='已解鎖';
            $ch8='已解鎖';
            $ch9='已解鎖';
            break;
        case 1:
            $ch1='(新玩家請點這裡)';
            break;
        }
    return array($ch1, $ch2, $ch3, $ch4, $ch5, $ch6, $ch7, $ch8, $ch9);
    }
$a=howmany(readgame());
?>
<a href="page1_1.php">章節一（<?php echo $a[0]?>）</a><br>
<a href="page2_1.php">章節二（<?php echo $a[1]?>）</a><br>
<a href="page3_1.php">章節三（<?php echo $a[2]?>）</a><br>
<a href="page4_1.php">章節四（<?php echo $a[3]?>）</a><br>
<a href="page5_1.php">章節五（<?php echo $a[4]?>）</a><br>
<a href="page6_1.php">章節六（<?php echo $a[5]?>）</a><br>
<a href="page7_1.php">章節七（<?php echo $a[6]?>）</a><br>
<a href="page8_1.php">章節八（<?php echo $a[7]?>）</a><br>
<a href="page9_1.php">章節九（<?php echo $a[8]?>）</a>
</div>
</div>
<?php 
    include("footer.php");
?>