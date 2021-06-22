<?php 
    include("header.php");
?>
    <div id="pages">
    <span id="title">頁面：</span>
    <a href="page1_2.php">上一頁</a>
    </div>
    <div id='main'>
    <div id='autotype' style="display:none;">
        <div id='letter1-3'><fieldset><legend>邀請函內容</legend>
            唐恩‧尤金子爵敬啟: <br>
            近來安好。<br>
            11月14日為奧斯頓‧克洛維子爵成年之日，<br>
            誠邀公子及親友於此日遠赴歐蒂絲莊園參加慶祝宴會。<br>
            請保重。<br>
            　　　　　　　　　　瑪莉‧克洛維
           </fieldset></div>
            <p id='Cole'>柯爾：早上送信的時候送到一封地址錯誤的信~你看，這可是最高級的羊皮紙阿！<br>
            　　　我看這封信的用材這麼昂貴，想說就這樣退回去太可惜了，就拆開來看了。<br>
            　　　根據我的調查，這個歐蒂絲莊園位於西北部，住在那的克洛維家族是當地超級有錢的貴族啊！他們家的老公爵聽說壽終正寢去世了。</p>
            <p id='Wieden'>維登：超有錢的貴族，他們沒被新政府處死嗎？</p>
            <p id='Cole'>柯爾：聽說他們常常幫助百姓，也不壓榨佃農，當地的人民都很愛戴他們。<br>
            　　　再加上那個西北小鎮比較偏遠，所以沒有受到波及，這可是個好機會啊！<br>
            　　　我們冒充這個唐恩‧尤金子爵進去跟隨便哪個公爵打個交道，或是順幾個高級銀器走，我們就發了!<br>
            　　　搞不好還能分點遺產，你可以還清你爸欠的債，還能讓弟弟妹妹去讀書！我也能幫我爸媽還清藥局的債<br>
            　　　天啊!我這個想法實在是太天才了吧！維登，如何?</p>
            <form name="myForm" action='page1_4.php' onsubmit="return nextpage();" method="post">
                <fieldset>
                    <legend>請做出選擇</legend>
                    <input type="radio" name="choice" value="choice1" >你瘋了嗎！被抓到可是會死的！
                    <input type="radio" name="choice" value="choice2" >只能賭一把了...我們去吧　　　
                    <input type="submit" value="確定" />
                </fieldset>
            </form></div>
    </div>
</div>
<?php 
    include("footer.php");
?>
</body>
</html>