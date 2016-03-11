<section class="container-fluid wow fadeIn"  data-wow-duration="0.5s"  style="margin:0px;padding:0px;">
    	

<div class="parallax-window"  data-position-y="bottom" data-parallax="scroll" data-image-src="<?=PUBLICPATH;?>uploads/lg/<?=$content->articlesIMG?>"></div>
</section>
<style>
.parallax-window .title{color:#1f1f1f;text-transform:uppercase;;font-weight:bold;text-align:center;padding-top:0px}
.parallax-window .subtitle{color:#1f1f1f;font-size:32px;font-weight:300;text-align:center;padding-top:0px}
.parallax-window .logo{text-align:center;padding-top:100px}
.parallax-window .logo img{height:100px}
.btn-trans{background:rgba(139,106,0,0.8)}
.btn-trans:hover{background:rgba(217,136,0,0.9)}
</style>
<style>

  .parallax-window {
  background-position:center bottom;
    min-height: 450px;
    margin-top:0px;
    background: transparent;
}
</style>
<section class="container wow fadeInUp"  data-wow-duration="0.5s"   >
	<div class="row"  >
		<div class="col-xs-12">	
			<h3 style="color:#d9a300;border-bottom:2px #d9a300 solid;text-transform:uppercase" ><?=$content->articlesTITLE?></h3>
			<?php if(!isset($documentos)){?>
			<h5  style="color:#4d4d4d;text-transform:uppercase"><?=$content->articlesSUBTITLE?></h5>
			<div ><?=$content->articlesTEXT?></div>
			<?php }?>		
			
		</div>
		<div class="col-xs-12">	
		
			<div style="clear:both">
				<br/><br/>
				
			</div>
		</div>
	</div><!--/row-->
 </section>