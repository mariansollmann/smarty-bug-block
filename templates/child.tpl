{extends file='parent.tpl'}

{block name='content'}
	{{'Hello from child'|escape}|escape}
{/block}
