<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a target="_blank" href="page7_2.php">上一頁</a>
    <a target="_blank" href="page7_4.php">下一頁</a>
    </div>
    <div id='main'>
    <div id='autotype'>
            <p id='Cole'>柯爾：書先收到一邊去吧，這房間連走路都困難。</p>
            <p id='Wieden'>維登：因櫃子倒塌而散落一地的書...恩...窗框有摩擦過的痕跡...</p>
            <p id='Cole'>柯爾：這個窗外看下去的正下方一樓地上好像有血?咦?不對...比起血跡，那更像一團殘渣...看不太清楚啊...</p>
            <p>克勞德：我十幾分鐘前剛好看到女僕帶著獵犬去庭院放風了，應該就是它們吃的?</p>
            <p>荷鲁斯‧魏斯曼:是的，女僕們會在六點時帶獵犬去庭院活動，他們經常抓野兔野雞，甚至是野雁來吃，那恐怕就是牠們吃剩的禽類殘骸。</p>
            <form name="myForm" action='page7_4.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice7-3-1" > 方便讓我們去庭院看看嗎?
                    <input type="radio" name="choice" value="choice7-3-2" >獵犬吃的食物殘骸應該跟這個案件沒什麼關係…　　　
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>
    </div>
</div>
<?php 
    include("footer.php");
?>
