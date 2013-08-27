<div>
    <h2>Le contenu de client.tpl</h2>
	
	
	{foreach from=$allclients item=client}
		{$client.NomClient} /
		{$client.RaisonSociale} |
    {/foreach}
	
</div>