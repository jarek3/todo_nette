<?php
// source: C:\xampp\htdocs\Records_nette\app\CoreModule/templates/Administration/default.latte

use Latte\Runtime as LR;

class Template707156e30b extends Latte\Runtime\Template
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
		?>Administrace webu<?php
	}


	function blockDescription($_args)
	{
		?>Administrace webu.<?php
	}


	function blockContent($_args)
	{
		extract($_args);
		?><p>Vítejte v administraci! Jste přihlášeni jako <b><?php echo LR\Filters::escapeHtmlText($username) /* line 4 */ ?></b>.</p>
<?php
		if (!$user->isInRole('admin')) {
?><p>Nemáte administrátorská oprávnění, požádejte administrátora webu, aby vám je přidělil.</p>
<?php
		}
		?><h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Item:editor")) ?>">Editor položek</a></h2>
<h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Item:list")) ?>">Seznam položek</a></h2>
<h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("logout")) ?>">Odhlásit</a></h2>
<?php
	}

}
