<!DOCTYPE html>
<html lang="en">
<head>
	<title>DICH VU SPA</title>
    <base href="{{asset('')}}" />
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="source/css/reset.css">
	<link rel="stylesheet" type="text/css" href="source/css/responsive.css">

	<script type="text/javascript" src="source/js/jquery.js"></script>
	<script type="text/javascript" src="source/js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="source/img/logo.png" class="logo" alt="" title=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<!--<li><a href="#">Buy</a></li>
						<li><a href="#">Rent</a></li>
						<li><a href="#">Sell</a></li>
						<li><a href="#">About</a></li>-->
						<li><a href="#">Đăng ký</a></li>
					</ul>
					<a href="#" class="login_btn">Login</a>
				</nav>
				<div class="search-box__bar--29h6">
					<input type="search" id="q" name="q" placeholder="Search in spa" class="search-box__input--O34g" tabindex="1" value="" data-spm-anchor-id="a2o4n.home.search.i0.1905e182YrzRuu">
					<input type="hidden" name="_keyori" value="ss">
					<input type="hidden" name="from" value="input">
					<input type="hidden" name="spm" value="a2o4n.home.search.go.1905e182YrzRuu">
				</div><!--end seach -->
			</div>
		</header><!--  end header section  -->
		
	</section><!--  end hero section  -->
	
	<!-- lấy ra những banner có trả tiền quảng cáo lớn nhất -->
	<div class="banner">
		<div class="anh">
        @foreach($slide as $sl)
			<img src="source/img/{{$sl->url_anh}}"/>
        @endforeach
		</div>
	</div><!--end banner-->
    
<div class="noidung">
	<div class="group_danhmuc">
		<div class="item">
			<h2 class="title">Danh M?c uu thích</h2>
		</div>
            
            @foreach($quangcao as $qc)
                <div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/{{$qc->url_anh}}" alt="" title=""></a>					
				</div>
			
			</div><!--end group01-->
            @endforeach
            @foreach($km_muc_desc as $muc)
                <div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/{{$muc->url_anh_km}}" alt="" title=""></a>					
				</div>
			
			</div><!--end group01-->
            @endforeach
   </div><!--end group danh muc-->
   <div class="clear"></div>

   <div class="group_danhmuc">
		<div class="item">
			<h2 class="title">Danh M?c uu thích</h2>
		</div>         
            
            @foreach($dsdv as $sp)
                <div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/{{$sp->url_anh}}" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">{{$sp->tieude_km}}</h2></a>
					<h3 class="style">{{$sp->muc_km}}</h3>
				</div>
				<ul class="rating">
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
            @endforeach
   </div><!--end group danh muc-->
   <div class="clear"></div>
   <div class="group_danhmuc">
		<div class="item">
			<h2 class="title">Danh M?c uu thích</h2>
		</div> 
        
        <div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			<div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/dish1.jpg" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">Fugiat nulla sint</h2></a>
					<h3 class="style">$30</h3>
				</div>
				<ul class="rating">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
			
        
     </div>  
     <div class="group_danhmuc">
		<div class="item">
			<h2 class="title">Danh M?c uu thích</h2>
		</div>         
            
            @foreach($spdx as $dx)
                <div class="group01">
				<div class="dishe_img">
					<a href="#"><img src="source/img/{{$dx->url_anh_km}}" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="#"><h2 class="span">{{$dx->tieude_km}}</h2></a>
					<h3 class="style">{{$dx->muc_km}}</h3>
				</div>
				<ul class="rating">
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
            @endforeach
   </div><!--end group danh muc--> 
   <div class="clear"></div>    
			
</div>
	
	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="about">
					<p>La Casa is real estate minimal html5 website template, designed and coded by pixelhint, tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
					<ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>