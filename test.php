<?php
include('inc/myconnect.php');
include('inc/function.php');
//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quần áo nam đẹp, quần áo hàng hiệu, cao cấp kiểu 2017</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
	<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/style-body1.css">


	<style type="text/css">
	.wrap-upload{
		display: inline-block;
	}
	.upload{
		overflow: hidden;
		margin-right: 5px;
		float: left;
		border: 1px dashed #666;
		position: relative;
		height: 200px;
		width: 200px;
		line-height: 200px;
		text-align: center;
	}
	.upload .icon{
		position: absolute;
		width: 100%;
		height: 100%;
		top:0;
		left: 0;
		z-index: 9;
		color: #999;
	}
	.upload .img{
		position: absolute;
		width: 100%;
		height: 100%;
		top:0;
		left: 0;

	}
	.upload  .file{
		position: absolute;
		width: 100%;
		height: 100%;
		top:0;
		left: 0;
		z-index: 10;
		opacity: 0;
	}
	.upload:hover .icon{
		color: black;
	}
	.more{
		height:200px;	
		width: 200px;
		line-height: 200px;
		text-align: center;
		display: inline-block;
	}
</style>
</head>

<body>
	<!-- <img src="image/icon/amelia.png" class="img"> -->
	<?php
	print_r($_FILES['file']);
	include('include/header.php');
	if(isset($_FILE['file'])){
		print_r($_FILES['file']);
		echo "a";
	}
	?>
	
	<div class="container">
		<div class="row">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="wrap-upload">
					<div class="upload">
						<div class="icon"><i class="glyphicon glyphicon-open"></i></div>
						<input type="file" name="file[]" class="file" multiple="multiple">
					</div>
					<div class="more">
						+
					</div>
				</div>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var i = 0;
		$(".more").click(function(e){
			$(this).before(`<div class="upload">
				<div class="icon"><i class="glyphicon glyphicon-open"></i></div>
				<input type="file" name="file[]" class="file">
				</div>`);
			$('.upload').fadeIn("slow");
		});
		$("body").on("change",".file",function(){
						$(this).parent().find("img").remove();
						$(this).before("<img src='' class='img" + i + " img" +"'/>");
						var ready = new FileReaderSync();
						console.log(ready);
						ready.onload  = function(e){
							console.log("zo e 1");
							// console.log(i + " "+j);
							$('.img' + i).attr('src', e.srcElement.result);
						};

						ready.readAsDataURL(this.files[j]);
						
						// console.log("xong e 1");
						// console.log("xong 1");
						// i++;
						// console.log("zo 2");
						// $(this).parent().after(
						// 	`<div class="upload">
						// 	<div class="icon">
						// 	<i class="glyphicon glyphicon-open"></i>
						// 	</div>
						// 	`
						// 	+ `<img src='' class='img` + i + ` img` +`'/>` +
						// 	`
						// 	<input type="file" name="file[]" class="file" multiple="multiple">
						// 	</div>`
						// 	);
						// var ready = new FileReader();
						// ready.onload  = function(e){;
						// 	$('.img' + i).attr('src', e.srcElement.result);
						// };
						// ready.readAsDataURL(this.files[j]);
						// console.log("xong 2");
				
		})
	})
</script>
</html>