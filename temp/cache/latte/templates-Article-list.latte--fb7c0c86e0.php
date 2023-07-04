<?php
// source: C:\xampp\htdocs\Records_nette\app\CoreModule/templates/Item/list.latte

use Latte\Runtime as LR;

class Templatefb7c0c86e0 extends Latte\Runtime\Template
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
            <h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Item:", [$item->kosmonaut_id])) ?>"></a></h2>
            <td><?php echo LR\Filters::escapeHtmlText($item->jmeno) /* line 12 */ ?></td><td><?php echo LR\Filters::escapeHtmlText($item->prijmeni) /* line 12 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText(call_user_func($this->filters->dateczech, $item->datum_narozeni)) /* line 12 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText($item->superschopnost) /* line 12 */ ?>

            <br>
<?php
			if ($user->isInRole('admin')) {
				?>                <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("editor", [$item->kosmonaut_id])) ?>">Editovat</a></td>
                <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("remove", [$item->kosmonaut_id])) ?>">Odstranit</a></td>
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
