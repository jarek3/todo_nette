<?php
// source: C:\xampp\htdocs\Records_nette\app\CoreModule/templates/Item/list.latte

use Latte\Runtime as LR;

class Template00aded0445 extends Latte\Runtime\Template
{
	public $blocks = [
		'title' => 'blockTitle',
		'description' => 'blockDescription',
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'title' => 'html',
		'description' => 'html',
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('title', get_defined_vars());
		$this->renderBlock('description', get_defined_vars());
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 9');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
		?>Výpis položek<?php
	}


	function blockDescription($_args)
	{
		?>Výpis všech položek.<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<table>
     <thead>    
    <tr><th>Jméno</th><th>Příjmení</th><th>Datum narození</th><th>Superschopnost</th><?php
		if ($user->isInRole('admin')) {
?><th colspan="2">Administrace</th>
    </tr><?php
		}
?>

 </thead>
<?php
		$iterations = 0;
		foreach ($items as $item) {
?>    <tbody>
        <tr>
            <h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Item:", [$item->item_id])) ?>"></a></h2>
            <td><?php echo LR\Filters::escapeHtmlText($item->name) /* line 12 */ ?></td><td><?php echo LR\Filters::escapeHtmlText($item->surname) /* line 12 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText(call_user_func($this->filters->dateczech, $item->birthdate)) /* line 12 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText($item->superpower) /* line 12 */ ?></td>
            <br>
<?php
			if ($user->isInRole('admin')) {
				?>                <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("editor", [$item->item_id])) ?>">Editovat</a></td>
                <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("remove", [$item->item_id])) ?>">Odstranit</a></td>
<?php
			}
?>
   </tr>  </tbody>       
<?php
			$iterations++;
		}
		?></table><?php
	}

}
