<!DOCTYPE HTML>
<html lang="PT">
{$head}
<body>
	<div class="overlay"></div>
	{include file='common/navbar.tpl'}
	<aside class="left">
		{include file='common/asideleft.tpl'}		
	</aside>	
	<section class="contents hideright">
		<header style="background:rgba(0,0,0,0.5);">
		{if isset($breadcrumb)}
	   		<ol class="breadcrumb" style="margin-left: 50px;background:rgba(0,0,0,0);line-height:35px;" >
			     {foreach from=$breadcrumb key=fokey item=foo }
			      <li><a href="{$baseurl}{$foo}" style="color:#fff">{$fokey}</a></li>
			     {/foreach}
			</ol>
		{/if}
  		</header>  		  
		<article class="container-fluid" id="conteudo">
		{$content}
		</article>
	</section>
		
	{$footer}
	{$scripts}
	</body>
</html>