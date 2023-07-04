<?php
// source: C:\xampp\htdocs\Records_nette\app\CoreModule/templates/Administration/login.latte

use Latte\Runtime as LR;

class Template3d3c819ffa extends Latte\Runtime\Template
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
		?>Přihlášení<?php
	}


	function blockDescription($_args)
	{
		?>Přihlášení do uživatelského účtu.<?php
	}


	function blockContent($_args)
	{
		extract($_args);
		/* line 5 */ $_tmp = $this->global->uiControl->getComponent("loginForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		?><p>Pokud ještě nemáte účet, <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("register")) ?>">zaregistrujte se</a>.</p><?php
	}

}
