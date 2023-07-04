<?php
// source: C:\xampp\htdocs\Records_nette\app\CoreModule/templates/Contact/default.latte

use Latte\Runtime as LR;

class Template9a623328b1 extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
		?>Kontaktní formulář<?php
	}


	function blockDescription($_args)
	{
		?>Kontaktní formulář.<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<p>Kontaktujte nás odesláním formuláře níže.</p>
<?php
		/* line 6 */ $_tmp = $this->global->uiControl->getComponent("contactForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		
	}

}
