<script>
var end=0
    $.fn.autotype = function() {
	async: false
        var $text = $(this);
        console.log('$text:', $text);
        var str = $text.html(); //返回被选元素的内容
        console.log('str:', str);
        var index = 0;
        var x = $text.html('');
        console.log('x:', x);
        //$text.html()和$(this).html('')有区别
	
        var timer = setInterval(function() {
            //substr(index, 1) 方法在字符串中抽取从index下标开始的一个的字符
            var current = str.substr(index, 1);
            if (current == '<') {
                //indexOf() 方法返回">"在字符串中首次出现的位置。
                index = str.indexOf('>', index) + 1;
            } else {
                index++;
            }
            //console.log(["0到index下标下的字符",str.substring(0, index)],["符号",index & 1 ? '!': '']);
            //substring() 方法用于提取字符串中介于两个指定下标之间的字符
            $text.html(str.substring(0, index) + (index & 1 ? '' : ''));
    	    $text.html(str.substring(0, index) + (index & 1 ? '' : ''));	
            index > $text.html().length + 10 && (index = 0);
            if(index >= str.length){
            	end=end+1;
            }
            if(index >= str.length){
            	clearInterval(timer);
            if (end==1){
            	var music = document.getElementById("sound2");
            	music.play();
            	$("#autotype2").css("display","block");
            	$("#autotype2").autotype();
            }
            else if (end==2){
            	var music = document.getElementById("sound3");
            	music.play();
            	$("#autotype3").css("display","block");
            	$("#autotype3").autotype();
            }
            else if (end==3){
            	var music = document.getElementById("sound4");
            	music.play();
            	$("#autotype4").css("display","block");
            	$("#autotype4").autotype();
            }
            }
        }, 50);
    };
$("#autotype2").css("display","none");
$("#autotype3").css("display","none");
$("#autotype4").css("display","none");
$("#autotype").css("display","block");
$("#autotype").autotype();
</script>