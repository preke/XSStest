<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<style type="text/css">
    .comment-title{
        font-size:14px;
        margin: 6px 0px 2px 4px;
    }
    .comment-body{
        font-size: 14px;
        color:#ccc;
        font-style: italic;
        border-bottom: dashed 1px #ccc;
        margin: 4px;
    }
</style>
<!-- <script type="text/javascript" src="/js/cookies.js"></script> -->

<body>

    <?php echo $_COOKIE['username']; echo '<br>'; echo $_COOKIE['password']; echo '<br>'; echo 'cookie is already set!<br>' ?>
<form method="post" action="http://localhost/eclipse/XSStest/index.php/Home/Back/addElement">
    <div style="margin:20px;">
        <div style="font-size:16px;font-weight:bold;">发表评论</div>
        <div style="padding:6px;">
            昵称:
            <br/>
            <input name="name" type="text" id='name'style="width:300px;"/>
        </div>
        <div style="padding:6px;">
            评论:
            <br/>
            <textarea name="comment" id = 'comment' style="height:100px; width:300px;"></textarea>
        </div>
        <div style="padding-left:230px;">
            <input type="submit" value="POST" onclick="fun()" style="padding:4px 0px; width:80px;"/>
        </div>
        <div style="border-bottom:solid 1px #fff;margin-top:10px;">
            <div style="font-size:16px;font-weight:bold;">评论集</div>
            <?php foreach($elements as $x) { echo $x['username']."---------------------------".$x['comment']; echo "<br><br>"; } ?>
        </div>

        
    </div>
    <script type="text/javascript">
    	function fun1(){
    		//document.write("<script src='http://localhost/XSS/hack.js'><\/script>");
    		alert('XSS程序已执行！');
    		
    	}
        function fun (){
      /*       var fname = document.getElementById('comment');
            var name = document.getElementById('comment').value;
            var newname = '';
            for (var i = 0; i < name.length; i++) {
                if (name[i] == '<') {newname = newname + '&lt';}

                else if (name[i] == '>') {newname = newname + '&gt';}
                
                else {newname = newname + name[i]}
                
                // if (name[i] == '<') {alert('found!'); name.replace(/</,&lt);}
                // else if (name[i] == '>') {name[i] = &gt;}
                // else if (name[i] == '&') {name[i] = &amp;}
            }
            //alert('aaa');
            fname.value = newname; */
 
        }
    </script>
</form>
            
</body>
</html>