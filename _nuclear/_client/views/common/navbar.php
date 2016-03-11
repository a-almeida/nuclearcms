
<nav class="navbar navbar-default navbar-fixed-top affix-top" data-spy="affix" data-offset-top="100" role="navigation">
     <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url();?>" style="color:#fff"><img src="<?=PUBLICPATH?>uploads/sm/<?=$project['logotipo'];?>" ></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">  
          	<?php foreach($navigation as $key=>$menu){ ?>
          			<li <?php if(isset($content) && (
          					
          					
          					'page/'.$content->articlesSLUG==$menu->menuLINK
          					||
          					$content->articlesSLUG==$menu->menuLINK
          					||
          					(($menu->menuLINK=='' && $content->articlesSLUG=='home') || ($menu->menuLINK=='home' && $content->articlesSLUG=='home'))
          					
          					)){echo "class='active'";}?> ><a href="<?php
          			if($menu->menuNAME=='github')
          			{
          				echo $menu->menuLINK.'" target="_blank" ';
          			}else{
          					echo PUBLICPATH.$menu->menuLINK.'" ';
          			}?> onclick="closenav();"><?=$menu->menuNAME;?></a></li>	
          	<?php } ?>
	      </ul>
        </div><!--/.navbar-collapse -->
    </div>
 </nav>
 <style>

body{margin-top:50px}
 </style>