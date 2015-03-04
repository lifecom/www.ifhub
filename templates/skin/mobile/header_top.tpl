<nav id="header" class="clearfix">
	<div class="icon-userbar userbar-trigger" id="userbar-trigger"></div>

<!--	<h1 class="site-name" {if $iUserCurrentCountTalkNew}style="margin-right: 132px"{/if}><a href="{cfg name='path.root.web'}">{cfg name='view.name'}</a></h1> -->
	<h1 class="site-name"><a href="{cfg name='path.root.web'}"><span style2="color:#B22222" style="background-color:#CD1713;color:white;padding-left:3px;padding-right:3px;">if</span>Hub<span style="color:#8F8F8F;">.ru</span></a></h1>

	{hook run='userbar_nav'}
	
	<ul class="nav-userbar">
		{hook run='userbar_item'}

		{if $iUserCurrentCountTalkNew}
			<li class="item-messages slide-trigger" id="item-messages" onclick="ls.tools.slide($('#messages'), $(this), true);"><a href="{router page='talk'}"></a></li>
		{/if}

		<li class="item-search slide-trigger" id="item-search" onclick="ls.tools.slide($('#search'), $(this), true);"></li>

		{if $oUserCurrent}
			<li class="item-submit item-primary slide-trigger" id="item-submit" onclick="ls.tools.slide($('#write'), $(this), true);"></li>
		{else}
			<li class="item-auth item-primary slide-trigger" id="item-auth" onclick="ls.tools.slide($('#window_login_form'), $(this), true);"></li>
		{/if}
	</ul>
</nav>


{if $oUserCurrent}
	{include file='window_write.tpl'}
{else}
	{include file='window_login.tpl'}
{/if}


<form action="{router page='search'}topics/" class="slide search-header" id="search">
	<div class="input-holder input-holder-text">
		<input type="text" placeholder="{$aLang.search}" maxlength="255" name="q" class="input-text input-width-full">
	</div>
	<div class="input-holder">
		<button type="submit" class="button button-primary">{$aLang.search_submit}</button>
	</div>
</form>


{hook run='header_banner_begin'}
{hook run='header_banner_end'}