<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page1_3.php">上一頁</a>
        <a href="page1_5.php">| 下一頁</a>
    </div>
    <div id='main'>
    <?php 
        if(isset($_POST["choice"])){
            if ($_POST["choice"] == 'choice1'){
                ?><script>window.location.href='1end.php'</script><?php
            }
            else{
                ?><p id='answer'>選擇結果：<br>
                        柯爾：不愧是我的好兄弟！走吧！<br>
                        　　　首先去巷子裡的二手服飾店！我們得先外表看起來像個貴族！<br>
                        　　　還得買香水跟火車票！還有租馬車從火車站到莊園，子爵沒有馬車的話就太不像樣了！</p>
                <?php
            }
        }else{
           ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
           window.location.href='page1_3.php'</script><?php 
        }
    ?>
    <div id='autotype' style="display:none;">
            <p>(三天後)(馬車上)</p>
            <p id='Wieden'>維登：所以說為什麼我變成你這傢伙的僕人了啊！</p>
            <p id='Cole'>柯爾：哎呀~錢不夠只能買一套禮服了嘛</p>
            <p id='Wieden'>維登：我不是這個意思！所以說為什麼是我當僕人！為什麼不是你！</p>
            <p id='Cole'>柯爾：我家好歹以前也有點錢過，面對貴族我比你會應對~你也不想露出馬腳導致小命丟了吧!<br>
            　　　況且，二手店的禮服不是沒有你的尺寸嘛，這褲子太長了你穿了會跌倒~~~</p>
            <p id='Wieden'>維登：可惡...</p>
            <p>(馬車停下)</p>
            <p>車夫：就是這裡了，客人。三天後再來這裡迎接客人您對吧?</p>
            <p id='Cole'>柯爾：對的，謝謝！這是車錢</p>
            </p>車夫：最近天氣不太好，晚上可能要下大雷雨了，客人你們也要小心啊。</p></div>
    </div>
</div>
<?php 
    include("footer.php");
?>
</body>
</html>

