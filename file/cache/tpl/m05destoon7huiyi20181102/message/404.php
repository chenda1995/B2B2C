<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>extend.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>index.css"/>
<style>
th{padding:10px;}
td{padding:10px;}
</style>
<div class="m_new m20">
<div class="title">对不起~~，页面找不到啦...</div>
<div class="b10 bd-b"></div>
<div class="content">
您正在请求的页面可能 <span style="color:red;">不存在</span> 或 <span style="color:red;">已经被删除</span><br/>
<strong>请尝试以下操作：</strong><br/>
&bull; 确保浏览器的地址栏中显示的网站地址的拼写和格式正确无误<br/>
&bull; 请与网站管理员联系，告诉他们您发现的错误以便网站管理员处理<br/>
&bull; <span id="second">30</span>秒后自动返回网站首页 <a href="<?php echo DT_PATH;?>" class="b"><?php echo DT_PATH;?></a><br/>
</div>
<meta http-equiv="refresh" content="30;url=<?php echo DT_PATH;?>">
</div>
<script type="text/javascript">
var i = 30;
var interval=window.setInterval(
function() {
if(i==0) {
clearInterval(interval);
} else {
Dd('second').innerHTML=i;
i--;
}
}, 
1000);
</script>
<?php include template('footer');?>