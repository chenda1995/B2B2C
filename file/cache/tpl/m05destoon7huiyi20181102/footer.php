<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="m20"></div>
<?php if($moduleid == 1) { ?>
<div class="wy-wrap"> 
<div class="h5"></div>
<div class="wy-tt8">
<i></i>
<h2>友情链接</h2>
</div> 
<ul class="wy-links cf">
<?php $tags=tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul> 
</div>
<?php } ?>
<div class="wy-ft-box"> 
<dl class="cf"> 
<dt></dt> 
<dd> 
<div class="wy-ft cf">
<ul class="wy-ft-menu">
<li><h3>新手指南</h3></li>
<li><a href="<?php echo $MODULE['2']['linkurl'];?>register.php" title="用户注册" target="_blank" rel="nofollow">用户注册</a></li>
<li><a href="<?php echo $MODULE['2']['linkurl'];?>login.php" title="账户登录" target="_blank" rel="nofollow">账户登录</a></li>
<li><a href="<?php echo $MODULE['2']['linkurl'];?>send.php" title="找回密码" target="_blank" rel="nofollow">找回密码</a></li>
</ul>
<ul class="wy-ft-menu">
<li><h3>品牌商服务</h3></li>
<li><a href="<?php echo $MODULE['22']['linkurl'];?>" title="招商服务" target="_blank" rel="nofollow">招商服务</a></li>
<li><a href="<?php echo $MODULE['13']['linkurl'];?>" title="品宣服务" target="_blank" rel="nofollow">品宣服务</a></li>
<li><a href="<?php echo $EXT['ad_url'];?>" title="广告服务" target="_blank" rel="nofollow">广告服务</a></li>
<li><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" title="VIP服务" target="_blank" rel="nofollow">VIP服务</a></li>
</ul>
<ul class="wy-ft-menu">
<li><h3>网站服务</h3></li>
<li><a href="<?php echo $MODULE['1']['linkurl'];?>about/index.html" title="关于我们" target="_blank" rel="nofollow">关于我们</a></li>
<li><a href="<?php echo $MODULE['9']['linkurl'];?>" title="诚聘英才" target="_blank" rel="nofollow">诚聘英才</a></li>
<li><a href="<?php echo $MODULE['1']['linkurl'];?>about/contact.html" title="联系我们" target="_blank" rel="nofollow">联系我们</a></li>
<li><a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/" title="网站地图" target="_blank">网站地图</a></li>
</ul>
<ul class="wy-ft-menu">
<li><h3>其他内容</h3></li>
<li><a href="<?php echo $EXT['link_url'];?>" title="友情链接" target="_blank" rel="nofollow">友情链接</a></li>
<li><a href="<?php echo $MODULE['1']['linkurl'];?>about/8.html" title="服务条款" target="_blank" rel="nofollow">服务条款</a></li>
<li><a href="<?php echo $MODULE['1']['linkurl'];?>about/7.html" title="法律声明" target="_blank" rel="nofollow">法律申明</a></li>
</ul>
<ul class="wy-ft-ewm"> 
<li><h3>手机登录</h3></li> 
<li><img src="<?php echo DT_SKIN;?>images/ft-ewm01.gif" width="94px" height="94px"/></li> 
</ul> 
<ul class="wy-ft-ewm"> 
<li><h3>关注官方微信</h3></li> 
<li><img src="<?php echo DT_SKIN;?>images/ft-ewm02.gif" width="94px" height="94px"/></li> 
</ul> 
</div> 
<div class="wy-cprt">
<p><?php echo $DT['copyright'];?></p> 
<p>服务热线：<?php echo $DT['telephone'];?><a class="qiao-bottom" rel="nofollow" href="//wpa.qq.com/msgrd?v=3&amp;uin=3292628658&amp;site=客服1&amp;menu=yes"></a> ICP备案号：<?php echo $DT['icpno'];?> </p> 
</div> 
</dd> 
</dl> 
</div>
<script type="text/javascript">
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
</script>
</body>
</html>