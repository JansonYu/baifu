<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>柏富毛纺-联系我们</title>

	<link rel="stylesheet" href="./css/slide.css">

	<link rel="stylesheet" href="./css/base.css">

	<!-- <link rel="stylesheet" href="./css/base.min.css"> -->

	<script src="./js/jquery1.7.1.js"></script>

	<style>

	.header{position: relative;}

	</style>

</head>

<body>

<?php include 'block/header.php'?>
<div class="unit contact-banner">

	<!-- <div class="banenr"><img src="imgs/con-us.jpg"></div>-->
	<div class="inner">
		<p>联系柏富<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;了解更多</p>
	</div>

</div>

<div class="unit contact-us">

	<div class="s-inner">

		<p class="title">想了解更多</p>

		<form id="customer" action="" method="post" >
		    
			<input type="hidden" name="action" value="add">

			<input type="text" name="firstname" placeholder="姓名">

			<input type="text" name="lastname" placeholder="性别">

			<input type="text" name="title" placeholder="职业">

			<input type="text" name="company" placeholder="公司名称">

			<input type="text" name="phonenumber" placeholder="电话号码">

			<input type="text" name="email" placeholder="邮箱">

			<input type="text" name="city" placeholder="地址">

			<div class="msg">

				<p class="s">请选择您感兴趣的内容</p>

				<span class="in"><input type="checkbox" name="interest[]" value="Trend&Forecasting" id="t1"><label for="t1">趋势与预测</label></span>

				<span class="in"><input type="checkbox" name="interest[]" value="Product Palette development" id="t2"><label for="t2">产品类别</label></span>

				<span class="in"><input type="checkbox" name="interest[]" value="Brand Color Development" id="t3"><label for="t3">品牌发展历程</label></span>

				<span class="in"><input type="checkbox" name="interest[]" value="Help with Pantone Products" id="t4"><label for="t4">产品材质特性</label></span>

				<span class="in"><input type="checkbox" name="interest[]" value="Brand Color Stories" id="t5"><label for="t5">品牌色彩故事</label></span>

				<span class="in"><input type="checkbox" name="interest[]" value="Personal project" id="t6"><label for="t6">批量定纺报价</label></span>

			</div>

			<textarea name="tip" cols="90" rows="7">请向我们提供任何额外信息，以便我们帮助您的项目开始。</textarea>

			<p class="s-tip">我们将会尽快根据您的电子邮件地址给您回复，请耐心等待，谢谢</p>

			<a href="javascript:;" onclick="" class="submit">提交</a>

		</form>

	</div>

</div>
<?php 
    require("admin/customer_sql.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$action=$_POST['action'];
		if($action=='add'){
			$firstname= $_POST['firstname'];
			$lastname=$_POST['lastname'];
			$title=$_POST['title'];
			$company=$_POST['company'];
			$phonenumber=$_POST['phonenumber'];
			$email=$_POST['email'];
			$city=$_POST['city'];
			$interest="";
			$interest_tag=$_POST['interest'];
			for($i=0;$i<count($interest_tag);$i++){
				if($i==0)
					$interest=$interest_tag[$i];
				else 
					$interest=$interest.','.$interest_tag[$i];
			}
			$addition=$_POST["tip"];
			$customer_sql=new Customer_sql();
			$result=$customer_sql->addCustomerInfo($firstname,$lastname,$title,$company,$phonenumber,$email,$city,$interest,$addition);
			
		}
	}
?>

<?php include 'block/footer.php'?>

<script>

	$('#customer').on('click','.submit',function(){
		var _firstname = $('input[name="firstname"]').val(),
			_lastname = $('input[name="lastname"]').val(),
			_phone = $('input[name="phonenumber"]').val(),
			_email = $('input[name="email"]').val(),
			_city = $('input[name="city"]').val();
		if(_firstname && _lastname && _phone && _email && _city){
			$('#customer').submit();
		}else{
			alert('信息填写不完整！')
		}
	})

    </script>

</body>

</html>