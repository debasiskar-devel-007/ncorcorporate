<?php
//drupal_flush_all_caches();
//$themeurl=drupal_get_path('theme',$GLOBALS['theme']);
$themeurl=$GLOBALS['base_url'].'/'.drupal_get_path('theme',$GLOBALS['theme']);
//echo $themeurl;

global $language;

$lang_name = $language->language;
//exit;

?>
<?php

global $user;
$roles=($user->roles);
if (array_key_exists(4, $roles)) {

?>

<div class="menu-div-body">
    <ul>
        <li><a href="<?php  echo  base_path()?>">Home</a></li>
        <li><a href="<?php  echo  base_path() .'node/add/banner-image'?>">Home Banner Image</a></li>
        <li><a href="<?php  echo  base_path() .'banner-listing'?>">Home Banner Listing</a></li>
        <li><a href="<?php  echo  base_path() .'node/add/our-product-section-video'?>">Add Video</a></li>
        <li><a href="<?php  echo  base_path() .'video-listing'?>">Video Listing</a></li>
        <li><a href="<?php  echo  base_path() .'node/add/news'?>">Add News</a></li>
        <li><a href="<?php  echo  base_path() .'news-listing'?>">News Listing</a></li>
        <li><a href="<?php  echo  base_path() .'node/add/jobs'?>">Add Job</a></li>
        <li><a href="<?php  echo  base_path() .'job-listing'?>">Job Listing</a></li>
        <li><a href="<?php  echo  base_path() .'node/add/faq'?>">Add Faq</a></li>
        <li><a href="<?php  echo  base_path() .'faq-listing'?>">Faq listing</a></li>
        <li><a href="<?php  echo  base_path() .'node/add/product-banner'?>">Add Product Banner</a></li>
        <li><a href="<?php  echo  base_path() .'product-banner-listing'?>">Product Banner listing</a></li>


        <div class="clear"></div>
    </ul>
    <div class="clear"></div>
</div>
<?php

}
?>
<div class="top-con">
    <div class="memlog">
<?php 
		   if($lang_name=='zh-hans')
		   {
		   
		   ?>
	
        <ul>
       <li> <a href="http://www.shopencore3.com/" target="_blank">店</a></li>
        <?php
        global $user;

       // if (!$user->uid ) { ?>
           <li> <a href="https://www.shopencore3.com/login" target="_blank">会员登录</a></li>

        <?php  // }
       // else
        //{
            ?>
            <!--<li><a href="<?php /* echo  base_path().'user/logout'*/?>">Logout</a></li>-->
        <?php // } ?>
        <li><a href="<?php  echo  base_path()?>">English<span>+</span></a>

        <ul>

            <li><a href="<?php  echo  base_path().'es'?>">&raquo;&nbsp;Spanish</a></li>
            <li><a href="<?php  echo  base_path().'zh-hans'?>">&raquo;&nbsp;Chinese</a></li>
            <li><a href="<?php  echo  base_path().'ko'?>">&raquo;&nbsp;Korean</a></li>

            </ul>

        </li>
    <!--    <li><a href="<?php /* echo  base_path().'user/login'*/?>">USA<span>+</span></a>

        <ul>

            <li><a href="<?php /* echo  base_path().'user/login'*/?>">&raquo;&nbsp;Spain</a></li>

        </ul>



        </li>-->
        </ul>
		
		   <?php } 
		   
		  if($lang_name=='ko')
		  {
		   ?>
		   
		     <ul>
       <li> <a href="http://www.shopencore3.com/" target="_blank">가게</a></li>
        <?php
        global $user;

       // if (!$user->uid ) { ?>
           <li> <a href="https://www.shopencore3.com/login" target="_blank">회원 로그인</a></li>

        <?php  // }
       // else
        //{
            ?>
            <!--<li><a href="<?php /* echo  base_path().'user/logout'*/?>">Logout</a></li>-->
        <?php // } ?>
        <li><a href="<?php  echo  base_path()?>">English<span>+</span></a>

        <ul>

            <li><a href="<?php  echo  base_path().'es'?>">&raquo;&nbsp;Spanish</a></li>
            <li><a href="<?php  echo  base_path().'zh-hans'?>">&raquo;&nbsp;Chinese</a></li>
            <li><a href="<?php  echo  base_path().'ko'?>">&raquo;&nbsp;Korean</a></li>

            </ul>

        </li>
    <!--    <li><a href="<?php /* echo  base_path().'user/login'*/?>">USA<span>+</span></a>

        <ul>

            <li><a href="<?php /* echo  base_path().'user/login'*/?>">&raquo;&nbsp;Spain</a></li>

        </ul>



        </li>-->
        </ul>
		   
	
		  <?php } 
		  
		   if($lang_name=='en')
		   {
		  
		  ?>	
		  
		     <ul>
       <li> <a href="http://www.shopencore3.com/" target="_blank">shop</a></li>
        <?php
        global $user;

       // if (!$user->uid ) { ?>
           <li> <a href="https://www.shopencore3.com/login" target="_blank">Member Login</a></li>

        <?php  // }
       // else
        //{
            ?>
            <!--<li><a href="<?php /* echo  base_path().'user/logout'*/?>">Logout</a></li>-->
        <?php // } ?>
        <li><a href="<?php  echo  base_path()?>">English<span>+</span></a>

        <ul>

            <li><a href="<?php  echo  base_path().'es'?>">&raquo;&nbsp;Spanish</a></li>
            <li><a href="<?php  echo  base_path().'zh-hans'?>">&raquo;&nbsp;Chinese</a></li>
            <li><a href="<?php  echo  base_path().'ko'?>">&raquo;&nbsp;Korean</a></li>

            </ul>

        </li>
    <!--    <li><a href="<?php /* echo  base_path().'user/login'*/?>">USA<span>+</span></a>

        <ul>

            <li><a href="<?php /* echo  base_path().'user/login'*/?>">&raquo;&nbsp;Spain</a></li>

        </ul>



        </li>-->
        </ul>
		   
		  
		  
		  
		   <?php } 
		   
		   
		   if($lang_name=='es')
		   {
		   ?>
		   
		   		     <ul style="width:270px">
       <li> <a href="http://www.shopencore3.com/" target="_blank">tienda</a></li>
        <?php
        global $user;

       // if (!$user->uid ) { ?>
           <li> <a href="https://www.shopencore3.com/login" target="_blank">Entrar miembros</a></li>

        <?php  // }
       // else
        //{
            ?>
            <!--<li><a href="<?php /* echo  base_path().'user/logout'*/?>">Logout</a></li>-->
        <?php // } ?>
        <li><a href="<?php  echo  base_path()?>">English<span>+</span></a>

        <ul>

            <li><a href="<?php  echo  base_path().'es'?>">&raquo;&nbsp;Spanish</a></li>
            <li><a href="<?php  echo  base_path().'zh-hans'?>">&raquo;&nbsp;Chinese</a></li>
            <li><a href="<?php  echo  base_path().'ko'?>">&raquo;&nbsp;Korean</a></li>

            </ul>

        </li>
    <!--    <li><a href="<?php /* echo  base_path().'user/login'*/?>">USA<span>+</span></a>

        <ul>

            <li><a href="<?php /* echo  base_path().'user/login'*/?>">&raquo;&nbsp;Spain</a></li>

        </ul>



        </li>-->
        </ul>
		   
		   
		   <?php } ?>
    </div>


    <div class="menuwrapper">

        <div class="mainmenu">



            <div class="collapsiblemenu">&#9776; Menu</div>


                <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
                    <div class="navbar-collapse collapse">
                        <nav role="navigation">
                            <?php if (!empty($primary_nav)): ?>
                                <?php print render($primary_nav); ?>
                            <?php endif; ?>
                            <?php if (!empty($secondary_nav)): ?>
                                <?php //print render($secondary_nav); ?>
                            <?php endif; ?>
                            <?php if (!empty($page['navigation'])): ?>
                                <?php //print render($page['navigation']); ?>
                            <?php endif; ?>
                        </nav>
                    </div>
                <?php endif; ?>

                <!--       <li><a href="#"> Shop</a>
                      <ul class="hidden">
                           <li><a href="#">Financing</a></li>

                       </ul>
                       </li>  -->


            <div class="clear"></div>
        </div>


        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    <?php

    $x=arg();

    $cur=current_path();
    //var_dump($x);
	
	//exit;
    ?>

    <div class="callbacks_container" style="margin-bottom:0px; padding-bottom:0px;">


        <?php


if(!$x[1]){

    if($x[0]!='banner-listing' &&  $x[0]!='video-listing' && $x[0]!='news-listing' && $x[0]!='job-listing' && $x[0]!='faq-listing' && $x[0]!='product-banner-listing')
    print views_embed_view('banner_slide','block'); ?>

<a href="javascript:void(0)"  style="text-decoration: none" id="scdown"><div class="bannertext">More About Encore 3</div></a>
<?php }

 else if($x[1]=='22') { ?>
     <img src="<?php echo $themeurl ?>/images/careers-banner.jpg" alt="#" />

         <?php }

        else if($x[1]=='7'){

        ?>
        <img src="<?php echo $themeurl ?>/images/contactbanner.png" alt="#" />
<?php }

        else if($x[1]=='4'){

        ?>
        <img src="<?php echo $themeurl ?>/images/missionbanner.png" alt="#" />

        <?php
        }

        else if($x[1]=='8')
        {
        ?>
        <img src="<?php echo $themeurl ?>/images/supportbanner.png" alt="#" />

        <?php }

        else if($x[1]=='29')
        {
        ?>
            <img src="<?php echo $themeurl ?>/images/faq.jpg" alt="#" />
        <?php }

        else if($x[1]=='30')

        {

        ?>
            <img src="<?php echo $themeurl ?>/images/productbanner.png" alt="#" />

        <?php }

        else if($x[1]=='27'){
        ?>

        <img src="<?php echo $themeurl ?>/images/businessbanner.png" alt="#" />

        <?php }

        else if($x[1]=='28') {
        ?>

        <img src="<?php echo $themeurl ?>/images/aboutbanner.png" alt="#" />

        <?php }

        else if($x[1]=='33') {
        ?>
        <img src="<?php echo $themeurl ?>/images/termsbanner.png" alt="#" />

        <?php }

        else if($x[1]=='34'){
        ?>

        <img src="<?php echo $themeurl ?>/images/privacybanner.png" alt="#" />

        <?php } 
		
		 else if($x[1]=='46'){
        ?>

        <img src="<?php echo $themeurl ?>/images/mediamainbanner.png" alt="#" />

        <?php } 
		
			 else if($x[1]=='47'){
        ?>

        <img src="<?php echo $themeurl ?>/images/webinarbanner.png" alt="#" />

        <?php } 
		
		else if($x[1]=='72'){
		
		?>
		<img src="<?php echo $themeurl ?>/images/productbanner-s.jpg" alt="#" />
		
<?php 

		}
		
		else if($x[1]=='70')
		{
		
?>
<img src="<?php echo $themeurl ?>/images/productbanner-c.jpg" alt="#" />

		<?php } 
		
		else if($x[1]=='71')
		{
		?>

		<img src="<?php echo $themeurl ?>/images/productbanner-k.jpg" alt="#" />
		<?php } 
		
		else if($x[1]=='75'){
		
		?>
		<img src="<?php echo $themeurl ?>/images/businessbanner-s.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='73'){
		
		?>
		<img src="<?php echo $themeurl ?>/images/businessbanner-c.jpg" alt="#" />
		<?php } 
		
		else if($x[1]=='74'){
		
		?>
		
		<img src="<?php echo $themeurl ?>/images/businessbanner-k.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='78')
		{
		?>
		
		<img src="<?php echo $themeurl ?>/images/missionbanner-s.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='76')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/missionbanner-c.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='77')
		{
		?>
		
		<img src="<?php echo $themeurl ?>/images/missionbanner-k.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='81')
		{
		?>
		
		<img src="<?php echo $themeurl ?>/images/aboutbanner-s.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='79')
		{
		?>
		
		<img src="<?php echo $themeurl ?>/images/aboutbanner-c.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='80')
			
			{
		?>
		<img src="<?php echo $themeurl ?>/images/aboutbanner-k.jpg" alt="#" />
		
		
			<?php }

			else if($x[1]=='84')
			{
			?>
			
			<img src="<?php echo $themeurl ?>/images/supportbanner.png" alt="#" />
			
			<?php } 
			
			else if($x[1]=='82'){
			?>
			
			<img src="<?php echo $themeurl ?>/images/supportbanner.png" alt="#" />
			
			<?php } 
			
			
			else if($x[1]=='83'){
			?>
		
		<img src="<?php echo $themeurl ?>/images/supportbanner.png" alt="#" />
		
		<?php } 
		
		else if($x[1]=='89')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/webinarbanner-s.png" alt="#" />
		
		<?php }

		else if($x[1]=='88')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/webinarbanner-k.png" alt="#" />
		
		<?php } 
		
		else if($x[1]=='50')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/webinarbanner-c.png" alt="#" />
		
		
		<?php } 
		
		
		else if($x[1]=='85')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/mediamainbanner-c.png" alt="#" />
		
		<?php }

		else if($x[1]=='86')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/mediamainbanner-k.png" alt="#" />
		
		<?php } 
		
		else if($x[1]=='87')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/mediamainbanner-s.png" alt="#" />
		
		
		<?php } 
		
		else if($x[1]=='92'){
		?>
		
		<img src="<?php echo $themeurl ?>/images/termsbanner-s.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='91')
		{
		?>
		<img src="<?php echo $themeurl ?>/images/termsbanner-k.jpg" alt="#" />
		<?php } 
		
		else if($x[1]=='90')
		{
		?>
		
		<img src="<?php echo $themeurl ?>/images/termsbanner-c.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='95'){
		?>
		
		<img src="<?php echo $themeurl ?>/images/privacybanner-s.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='94')
		{
		?>
		
		<img src="<?php echo $themeurl ?>/images/privacybanner-k.jpg" alt="#" />
		
		<?php } 
		
		else if($x[1]=='93'){
		?>
		
		<img src="<?php echo $themeurl ?>/images/privacybanner-c.jpg" alt="#" />
		
		<?php } ?>
      <!--  <ul class="rslides" id="slider4">
            <li>
                <img src="images/banner1.png" alt="">

            </li>
            <li>
                <img src="images/banner2.png" alt="">


            </li>
            <li>
                <img src="images/banner3.png" alt="">


            </li>

            <li>
                <img src="images/banner4.png" alt="">


            </li>
        </ul>-->
       <!-- <h2>scroll down to find out how</h2>-->




    </div>
    <div class="clear"></div>




</div>

<div class="main-wrapper">
<?php

print render($page['content']);

?>

    <div class="footer-menu">
        <div class="footernav-con">
           <!-- <a href="<?php /*echo $GLOBALS['base_url'] */?>">Home</a>-->
		   
		   <?php 
		   if($lang_name=='zh-hans')
		   {
		   
		   ?>

           <a href="<?php  echo  base_path().'faq'?>">常见问题解答</a>
           <a href="<?php  echo  base_path().'zh-hans/node/85'?>">媒体</a>
           <a href="<?php  echo  base_path().'zh-hans/node/50'?>">网络研讨会</a>
            <a href="<?php  echo  base_path().'zh-hans/node/90'?>">使用条款</a>
            <a href="<?php  echo  base_path().'zh-hans/node/93'?>">隐私声明</a>
           <!-- <a href="<?php /* echo  base_path().'careers'*/?>">Career Opportunity</a>-->
            <a href="<?php  echo  base_path().'zh-hans/contact-us'?>">联系我们</a>

		   <?php } 
		   
		 if($lang_name=='ko')
		 {
			?>
			
			<a href="<?php  echo  base_path().'faq'?>">자주 묻는 질문 의</a>
           <a href="<?php  echo  base_path().'ko/node/86'?>">미디어</a>
           <a href="<?php  echo  base_path().'ko/node/88'?>">웹 세미나</a>
            <a href="<?php  echo  base_path().'ko/node/91'?>">이용 약관</a>
            <a href="<?php  echo  base_path().'ko/node/94'?>">개인 정보 보호 정책</a>
           <!-- <a href="<?php /* echo  base_path().'careers'*/?>">Career Opportunity</a>-->
            <a href="<?php  echo  base_path().'ko/contact-us'?>">문의</a>
			
			
		 <?php }

			 if($lang_name=='es')
			 {

		 ?>	
		 <a href="<?php  echo  base_path().'faq'?>">preguntas frecuentes</a>
           <a href="<?php  echo  base_path().'es/node/87'?>">medios de comunicación</a>
           <a href="<?php  echo  base_path().'es/node/89'?>">Webinar</a>
            <a href="<?php  echo  base_path().'es/node/92'?>">Condiciones de uso</a>
            <a href="<?php  echo  base_path().'es/node/95'?>">Declaración De Privacidad</a>
           <!-- <a href="<?php /* echo  base_path().'careers'*/?>">Career Opportunity</a>-->
            <a href="<?php  echo  base_path().'es/contact-us'?>">contáctenos</a>
		 
			 <?php } 
			 
			if($lang_name=='en')
			{
			 ?>
			  <a href="<?php  echo  base_path().'faq'?>">FAQ's</a>
           <a href="<?php  echo  base_path().'media'?>">Media</a>
           <a href="<?php  echo  base_path().'webinar'?>">Webinar</a>
            <a href="<?php  echo  base_path().'terms-condition'?>">Terms of Use</a>
            <a href="<?php  echo  base_path().'privacy-policy'?>">Privacy Statement</a>
           <!-- <a href="<?php /* echo  base_path().'careers'*/?>">Career Opportunity</a>-->
            <a href="<?php  echo  base_path().'contact-us'?>">Contact Us</a>
			 
			<?php } ?>
        </div>

        <a href="#" class="bottomarrow"><img src="<?php echo $themeurl ?>/images/arrowbottom.png" alt="#" /></a>

        <div class="clear"></div>
    </div>

    </div>


<div class="footer-block">
    <div class="main-wrapper">
        <div class="cright">Copyright 2015 Powered By Encore3. All Rights Reserved.</div>

        <?php
		
		
		//print render($page['footer']);
        global $user;

        if (!$user->uid ) { ?>


        <a href="<?php  echo $GLOBALS['base_url']?>/user/login" class="userlog">login</a>
        <?php }
        else
        {
        ?>
        <a href="<?php  echo  base_path()?>/user/logout" class="userlog1">logout</a>
        <?php } ?>



   <!--     <div class="sicon">
            <a href="#"><img src="<?php /* echo $themeurl*/?>/images/fi1.png"  alt="#"/></a>
            <a href="#"><img src="<?php /*echo $themeurl */?>/images/fi2.png"  alt="#"/></a>
            <a href="#"><img src="<?php /*echo $themeurl */?>/images/fi3.png"  alt="#"/></a>
        </div>-->

        <div class="clear"></div>
    </div>

</div>