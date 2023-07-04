<?php
// source: C:\xampp\htdocs\todo_nette\app\CoreModule/templates/Administration/default.latte

use Latte\Runtime as LR;

class Templateeed9e82451 extends Latte\Runtime\Template
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
		?>Site administration<?php
	}


	function blockDescription($_args)
	{
		?>Site administration.<?php
	}


	function blockContent($_args)
	{
		extract($_args);
		?><p>Welcome to the administration! You are logged in as <b><?php echo LR\Filters::escapeHtmlText($username) /* line 4 */ ?></b>.</p>
<?php
		if (!$user->isInRole('admin')) {
?><p>Nemáte administrátorská oprávnění, požádejte administrátora webu, aby vám je přidělil.</p>
<?php
		}
		?><h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Task:editor")) ?>">Item editor</a></h2>
<h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Task:list")) ?>">List of tasks</a></h2>
<h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("logout")) ?>">Log out</a></h2>
<?php
	}

}
