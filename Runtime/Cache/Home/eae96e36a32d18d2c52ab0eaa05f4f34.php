<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-COMPATIBLE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>快递</title>
	<link rel="stylesheet" href="/framework/gitTest/Logistical-PHP/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="/framework/gitTest/Logistical-PHP/Public/assets/global/img/public/logo.png" media="screen" />
<link rel="stylesheet" href="/framework/gitTest/Logistical-PHP/Public/assets/global/styles/frameset/frameset.css" type="text/css">
<link rel="stylesheet" href="/framework/gitTest/Logistical-PHP/Public/assets/global/styles/frameset/iconfont.css" type="text/css">
	
    <link href="/framework/gitTest/Logistical-PHP/Public/assets/global/styles/order/order.css" rel="stylesheet" type="text/css">
   <style>
   	.information table td a{
   		margin-right: 10px;
   	}
   	td:first-child{
   		text-align: center;
   		font-size: 1.1em;
   	}
   </style>
   

	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?d23716d82de1864f9475cf08a2a59734";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>



</head>
<body>

		<div class="header">
			
			<nav class="navbar navbar-default" role="navigation" style="">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				         <span class="sr-only"></span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				       </button>
		       <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
		       <a href="##" class="navbar-brand"></a>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse" id="bs-example-navbar-collapse-1" >
						<ul class="nav navbar-nav" style="width: 100%;padding-left: 50px">
							<li class="dropdown"><a href="<?php echo U('Index/index');?>" style="color: white;"><span class="iconfont" style="font-size: 55px;">&#xe65b;</span></a></li>
							<?php if(is_array($nav)): foreach($nav as $k=>$vo): ?><li class="dropdown" >
			                		<?php if($k == 0): ?><a href="<?php echo U('Index/order');?>" style="color: white;opacity:1;"><?php echo ($vo['name']); ?></a><?php endif; ?>
									<?php if($k == 1): ?><a href="<?php echo U('Index/search');?>" style="color: white;opacity:1;"><?php echo ($vo['name']); ?></a><?php endif; ?>
			      					<?php if($k == 2): ?><a href="<?php echo U('Index/join');?>" style="color: white;opacity:1;"><?php echo ($vo['name']); ?></a><?php endif; ?>
									<?php if($k == 3): ?><a href="<?php echo U('Index/addr');?>" style="color: white;opacity:1;"><?php echo ($vo['name']); ?></a><?php endif; ?>
			                	</li><?php endforeach; endif; ?>

		                   	<li class="dropdown log">
		                   	<a href="<?php echo U('Index/tongcheng');?>" style="color: white;">同城速递</a>
		                   	</li>
		                   	<?php if(isset($_SESSION['name']) ): ?><li class="dropdown log" style="float: right;">
		                   	<a href="<?php echo U('Index/logout');?>" style="color: white;">注销</a>
		                   	</li>
		                   
							<li class="dropdown log" style="float: right;">
							<a href="<?php echo U('Index/userinfo',array('id'=>$_SESSION['id']));?>" style="color: white;"><?php echo ($_SESSION['name']); ?></a>
							</li>    
							<li class="dropdown log" style="float: right;">
							<a href="<?php echo U('Index/userinfo',array('id'=>$_SESSION['id']));?>" style="color: white;"><i class="iconfont" style="font-size: 40px;">&#xe601;</i></a></li>
							<?php else: ?>

							<li class="dropdown log" style="float: right;">
							<a href="<?php echo U('Index/register');?>" style="color: white;">注册</a></li>
								
							<li class="dropdown log" style="float: right;"><a href="<?php echo U('Index/login');?>" style="color: white;">登录</a></li>
							<li class="dropdown log" style="float: right;"><a href="<?php echo U('Index/login');?>" style="color: white;"><i class="iconfont" style="font-size: 40px;">&#xe601;</i></a></li><?php endif; ?>
		                   	
							
						</ul>					
					</div>
				</div>
			</nav>
		</div>	




	
	<div id="main">
		
    <div class="containers" style="margin: 0;padding: 0">
	<div class="row" style="margin: 0;padding: 0">
		<div class="col-md-12" style="margin: 0;padding: 0">
			<div  class="index-center">
				<div class="index-center-img"><img src="/framework/gitTest/Logistical-PHP/Public/assets/global/img/category/nav.jpg" alt="" style="width: 100%;height: 100%;"></div>
				
			</div>
		</div>
	</div>
	
	

</div>		
	
	<div class="container">
		<div class="row" style="width: 80%;margin: 0 auto;">
			<div class="col-md-12">

				<div class="container-botton">

<div class="container-totton-con" style="min-height: 400px;">

			<div class="bottontitle"><span class="bottontitle-span1">详细订单信息</span></div>
			
  
  		<div class="information" style="margin-top: 15px;">
			
	<table class="table table-hover" style="table-layout:fixed;width: 85%; margin:0 auto;">
		<tr>
			<td colspan="2" style="text-align: center;font-size: 1.2em;font-weight: 600">寄件人信息</td>
		</tr>
		<tr>
			<td>寄件人姓名：</td>
			<td><?php echo ($info['sender']); ?></td>
		</tr>
		<tr>
			<td>寄件人手机号：</td>
			<td><?php echo ($info['sender_phone']); ?></td>
		</tr>
		<?php if(!empty($$info['sender_company'])): ?><tr>
			<td>寄件单位：</td>
			<td><?php echo ($info['sender_company']); ?></td>
		</tr><?php endif; ?>
		
		<tr>
			<td>取件方式备注：</td>
			<td><?php echo ($info['fetchgoods_remarks']); ?></td>
		</tr>
		<?php if(!empty($$info['area_name'])): ?><tr>
			<td>网点：</td>
			<td><?php echo ($info['area_name']); ?></td>
		</tr><?php endif; ?>
		
		<tr>
			<td>寄件地址：</td>
			<td><?php echo ($info['sender_address']); ?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>	
		<tr>
			<td colspan="2" style="text-align: center;font-size: 1.2em;font-weight: 600">收件人信息</td>
		</tr>
		<tr>
			<td>收件人姓名：</td>
			<td><?php echo ($info['receiver']); ?></td>
		</tr>
		<tr>
			<td>收件人手机号：</td>
			<td><?php echo ($info['receiving_phone']); ?></td>
		</tr>
<?php if(!empty($$info['receiving_company'])): ?><tr>
			<td>收件单位：</td>
			<td><?php echo ($info['receiving_company']); ?></td>
		</tr><?php endif; ?>
		
		<tr>
			<td>收货地址：</td>
			<td><?php echo ($info['receiving_address']); ?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>	
		<tr>
			<td colspan="2" style="text-align: center;font-size: 1.2em;font-weight: 600">快递信息</td>
		</tr>
		<?php if(!empty($$info['name'])): ?><tr>
			<td>快递公司：</td>
			<td><?php echo ($info['name']); ?></td>
		</tr><?php endif; ?>
		
		<tr>
			<td>预计重量：</td>
			<td><?php echo ($info['sender_estimated_weight']); ?></td>
		</tr>
		<tr>
			<td>取件备注：</td>
			<td><?php echo ($info['express_remarks']); ?></td>
		</tr>
	</table>
		


		</div>

	







</div>

</div>

</div>
		</div>
	</div>
	
	





	</div>

	<footer id="footer">
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="link">
						<li>公司地址：江西省南昌市东湖区证券街紫金城红郡-西4门</li>
						<li>邮政编码：130500</li>
						<li>昊迅快递有限公司</li>
						<li>Copyright 2017 Inc.All right reserved</li>
					</ul>
				</div>
				<div class="col-md-4">
				<div class="linkus">
					<div>关注我们</div>
					<div style="margin-top: 5px;">
						<img src="/framework/gitTest/Logistical-PHP/Public/assets/global/img/index/weixin.jpg" alt="微信" style="margin-right:5px ">
						
					</div>
				</div>
					
				</div>
				<div class="col-md-4">
					<div class="linkphone">
						<div>全国服务热线</div>
					<div style="font-size: 2em;"> 0791-86862855</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="/framework/gitTest/Logistical-PHP/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/framework/gitTest/Logistical-PHP/Public/assets/global/scripts/jquery.cookie.js" type="text/javascript"></script>
<script src="/framework/gitTest/Logistical-PHP/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


	<script type="text/javascript">
		function setaddr() {
			$
		}
	</script>


</html>