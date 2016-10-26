<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>柏富毛纺-产品</title>

	<link rel="stylesheet" href="./css/slide.css">

	<link rel="stylesheet" href="./css/base.css">

	<script src="./js/jquery1.7.1.js"></script>
	<script src="./js/main.js"></script>

	<style>

		.header{

			position: relative;

		}

	</style>

</head>

<body>

<?php include 'block/header.php'?>

<div class="unit product-pre">

	<div class="inner"><ul class="pre">

		<li><a href="product-basulan.php" ><i></i>巴素兰羊毛系列 </a></li>

		<li><a href="product-maoni.php" ><i></i>毛呢 / 双面呢系列</a></li>

		<li><a href="product-meilinu.php"><i></i>美利奴纯羊毛系列</a></li>

		<li><a href="#"  class="active"><i></i> 兔绒混纺纱</a></li>

	</ul></div>

</div>

<!-- 兔绒 -->

<div class="unit product-banner pro4">

	<div class="inner">

		<p class="stitle">兔绒混纺纱<br>Angora Rabbit Hair Blended Yarn Series</p>


		<p class="s">采用优质的长毛兔绒、山羊绒、羊毛等混纺。其特点为纤维细，手感滑糯、表面绒毛飘拂、色泽柔和、蓬松性好。<br>
现货48色兔绒混纺纱系列。同时，欢迎定纺。</p>

		<p class="phone"><i></i>86-0575-88336268</p>

		<a href="contact.php" class="ask">产品咨询</a>

	</div>

</div>

<div class="unit product-list">

	<div class="inner">

		<p class="title">颜色分类</p>

		<?php 

                     
                        $handle=fopen("http://www.baifuwool.com/admin/product_json.php?category=turong&lang=chinese","rb");
                        $content="";
                        while(!feof($handle)){
                                $content.=fread($handle,10000);
                        }
                        fclose($handle);
                        $content=json_decode($content);
                        $filepath="admin/images/";
                        foreach($content->data as $key){

                                echo '<div class="p-card">

                                                <p class="img"><img src="'.

                                                $filepath.$key->image_path.'" alt=""></p>

                                                <div class="msg">

                                                <p class="t">'.$key->model_id.'</p>

                                                <p>'.$key->name.'<br>现存货量：'.$key->amount.'公斤</p>

                                                </div>
                                                <ul class="detailPic">';
                            if(!empty($key->detail_image1)){
                                        echo '<li><img src="'.$filepath.$key->detail_image1.'" style="display:none"></li>';

                                }
                                if(!empty($key->detail_image2)){
                                        echo '<li><img src="'.$filepath.$key->detail_image2.'"  style="display:none"></li>';

                                }
                                echo '</ul></div>';

                        }

		?>

	</div>

	<!-- <a href="javascript:;" class="more">查看更多</a> -->

</div>



<?php include 'block/footer.php'?>

</body>

</html>
