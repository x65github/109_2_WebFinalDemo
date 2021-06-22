<?php 
    include("header.php");
?>
    <div id="pages">
        <span id="title">頁面：</span>
        <a href="page4_1.php">上一頁</a>
        <a href="page4_2_1.php">| 下一頁</a>
    </div>
    <div id='main'>
    <?php 
        if(isset($_POST["choice"])){
            if ($_POST["choice"] == 'choice4-1'){
                ?><p id='answer'>選擇結果：<br>
                        維登:失禮了，小姐請進。<br></p>
                <?php
                }
            elseif($_POST["choice"] == 'choice4-2'){
                ?><p id='answer'>選擇結果：<br>
                        維登：請問是哪位呢?<br>
                        女聲：我是簡‧凱爾特。<br>
                        維登:失禮了，小姐請進。<br></p>
                <?php
                }
	        elseif($_POST["choice"] == 'choice4-3'){
	            ?><script>window.location.href='page4_3.php'</script><?php}
            else{
                ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
                window.location.href='home.php'</script><?php 
                }
        }
        else{
                ?><script>alert('進入此頁面有特定選項，網頁即將跳轉')
                window.location.href='home.php'</script><?php 
        }
           
    ?>
    <div id='autotype'>
            <p id='Cole'>柯爾：凱爾特小姐?!妳怎麼來了?</p>
            <p>簡‧凱爾特:我來對二位表示歉意及謝意，在宴會中不注意撞到了子爵，您們後來還助我脫困，實在是太感謝了!</p>
            <p id='Cole'>柯爾：沒事沒事，幫助淑女我義不容辭啊!</p>
            <p>簡‧凱爾特:對了二位，我想我還是告知您們我找肖特公爵的真正原因吧，但...能不能請您們為我保密?</p>
            <p id='Cole'>柯爾：沒問題!守護淑女的秘密是理所當然的!</p>
            <p> 簡‧凱爾特:肖特公爵雖然蠻橫無禮，他的兒子卻與他正好相反，是個文質彬彬、行為得體的男人<br>
            也是我的情人，我們一直想結婚，卻因為我並非顯赫貴族，肖特公爵一直反對這樁婚事。<br>
            因此我每次碰到他都會藉機求他希望他給我們一次機會，沒想到成了第一位目擊者。<br>
            但我害怕事情傳出去會對愛人名聲有損，因此剛才不肯告知，還望原諒。</p>
            <p id='Cole'>柯爾：啊...原來你已經有愛人了.....好的，嗯。</p>
            <p id='Wieden'>維登：好的，我了解了。放心我們不會說出去的。</p>
            
            </div>
    </div>
</div>
<?php 
    include("footer.php");
?>


