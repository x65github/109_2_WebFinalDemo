<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page3_2.php">上一頁</a>
    </div>
    <div id='main'>
    <?php 
    if(isset($_POST["choice"])){
        if ($_POST["choice"] == 'choice3-1'){
            ?><p id='answer'>選擇結果：紙條<br>
            維登：我覺得這個紙條可能是破案關鍵呢，要不讓每個人都寫字來比對一下字跡?<br>
            柯爾：你別丟我的臉啊!這是打字機打的!<br>
            荷鲁斯‧魏斯曼：我就說這傭人無法相信！<br>
            維登：歐對欸....我還是往其他方向推理好了</p><a href="page3_2_1.php">回上一個選項</a>
            <?php
        }
        else if($_POST["choice"] == 'choice3-2'){
            ?><p id='answer'>選擇結果：女傭證詞<br>
            維登:女傭可能說謊了!他可能偷偷放人從後門走!<br>
            柯爾:外面下大雨!而且外面有僕人在整理!就說沒有了!你振作點啊!<br>
            管家：我就說這傭人無法相信吧！<br>
            維登:歐對欸....我還是往其他方向推理好了<br></p>
		<a href="page3_2_1.php">回上一個選項</a>
            <?php
        }
        else if($_POST["choice"] == 'choice3-3'){
            ?>
            <script>window.location.href='page3_4.php'</script>
            <?php
        }
    }else{
       ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
       window.location.href='page3_2.php'</script><?php 
    }
    ?>
</div>

<?php 
    include("footer.php");
?>