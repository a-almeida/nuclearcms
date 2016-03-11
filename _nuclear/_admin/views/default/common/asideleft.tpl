<header>
	<li class="list-group-item active">
     	<button class="btn btn-default btn-lg" onclick="toggleleft();"><i class="fa fa-remove"></i></button>
    	<div><i class="fa fa-bars"></i> Menu</div>
  	</li>
</header>
<section>
	<ul class="list-group">
 		<nav class="sidebar-nav">
			<ul class="metismenu" id="menu">
				{if isset($sidebar)}
			        {foreach from=$sidebar->item key=fokey item=foo }
				    <li>
				      	<a href="{if !isset($foo->childs)}{$baseurl}{$foo->url}{/if}" class="{if $active==$foo->url}active{/if}">
				      		<span class="{$foo->icon}"></span>
				      		{$foo->label->$langkey}      	
						   	{if isset($foo->childs)}
						   	<span class="glyphicon arrow"></span></a>
						   	<ul aria-expanded="{if $active==$foo->url}true{else}false{/if}" class="collapse {if $active==$foo->url}in{/if}">
						   		{foreach from=$foo->childs->item key=fokey2 item=foo2 }
						      		<li class="{if $active|cat:'/'|cat:$ncontrol==$foo2->url}active{/if}"><a href="{$baseurl}{$foo2->url}"><span class="{$foo2->icon}"></span> {$foo2->label->$langkey}</a></li>
						       	{/foreach}
						    </ul>
							{/if}
							{if isset($foo->module)&& $foo->module=='articles'}
								{if isset($articlesgroup)}
							   	<span class="glyphicon arrow"></span></a>
							   	<ul aria-expanded="{if $active==$foo->url}true{else}false{/if}" class="collapse {if $active==$foo->url}in{/if}">
							   		{foreach from=$articlesgroup key=fokey2 item=foo2 }
							      		<li class="{if $naction==$foo2->groupsSLUG}active{/if}"><a href="{$baseurl}cms/articles/group/{$foo2->groupsSLUG}"  style="text-transform:uppercase"><span class="{$foo2->groupsICON}"></span> {$foo2->groupsNAME}</a></li>
							       	{/foreach}
							    </ul>
								{/if}
							{/if}
					 	 </a>					   					   		
			   		</li>	
			     	{/foreach}
		      	 {/if}	
		      	 {if isset($restrict)}
			        {foreach from=$restrict->item key=fokey item=foo }
				    <li>
				      	<a href="{if !isset($foo->childs)}{$baseurl}{$foo->url}{/if}" class="{if $active==$foo->url}active{/if}">
				      		<span class="{$foo->icon}"></span>
				      		{$foo->label->$langkey}		      	
						   	{if isset($foo->childs)}
						   	<span class="glyphicon arrow"></span></a>
						   	<ul aria-expanded="{if $active==$foo->url}true{else}false{/if}" class="collapse {if $active==$foo->url}in{/if}">
						   		{foreach from=$foo->childs->item key=fokey2 item=foo2 }
						      		<li class="{if $active|cat:'/'|cat:$nmethod==$foo2->url}active{/if}"><a href="{$baseurl}{$foo2->url}"><span class="{$foo2->icon}"></span> {$foo2->label->$langkey}{$base_url}</a></li>
						       	{/foreach}
						    </ul>
							{/if}
					 	 </a>					   					   		
			   		</li>	
			     	{/foreach}
		      	 {/if}	
		      	 
            <li class="active"><a href="{$baseurl}users/login/logout" class="bg1">Logout</a></li>
			</ul>
		</nav>
	</ul>
</section>
