<?php
// source: C:\xampp\htdocs\Records_nette\app\CoreModule/templates/Item/default.latte

use Latte\Runtime as LR;

class Templatec0e213ff26 extends Latte\Runtime\Template
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
		extract($_args);
		echo LR\Filters::escapeHtmlText($item->title) /* line 1 */;
	}


	function blockDescription($_args)
	{
		extract($_args);
		echo LR\Filters::escapeHtmlText($items->description) /* line 2 */;
	}


	function blockContent($_args)
	{
		extract($_args);
		echo $item->content /* line 4 */;
	}

}
