<?php
// source: C:\xampp\htdocs\Records_nette\app/templates/@layout.latte

use Latte\Runtime as LR;

class Template7b49195546 extends Latte\Runtime\Template
{
	public $blocks = [
		'css' => 'blockCss',
		'head' => 'blockHead',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'css' => 'html',
		'head' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="cs">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php
		$this->renderBlock('description', $this->params, function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'htmlAttr', $this->filters->filterContent('striptags', $_fi, $s));
		});
?>">

	<title><?php
		$this->renderBlock('title', $this->params, function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striptags', $_fi, $s));
		});
?></title>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('css', get_defined_vars());
?>

	<?php
		$this->renderBlock('head', get_defined_vars());
?>
    </head>

    <body>
	<header>
		<h1>Elektronická evidence osob v Nette</h1>
	</header>

<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>	<p class="message"><?php echo LR\Filters::escapeHtmlText($flash->message) /* line 27 */ ?></p>
<?php
			$iterations++;
		}
?>

	<nav>
            <ul>				
		<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Item:list")) ?>">Seznam položek</a></li>
		<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Contact:")) ?>">Kontakt</a></li>
                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Administration:")) ?>">Administrace</a></li>
            </ul>
	</nav>
	<br clear="both">

	<item>
		<header>
                    <h1><?php
		$this->renderBlock('title', $this->params, 'html');
?></h1>
		</header>
		<section>
                    <?php
		$this->renderBlock('content', $this->params, 'html');
?> 
		</section>
	</item>

	<footer>
		<p>
                     <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Administration:")) ?>">Administrace</a> 							
		</p>
                
                <p>
                     <a href="http://www.itnetwork.cz" target="_blank">itnetwork.cz</a>
                </p>   
	</footer>

<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
    </body>
</html><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 27');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockCss($_args)
	{
		extract($_args);
		?>		<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/css/style.css">
<?php
	}


	function blockHead($_args)
	{
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 59 */ ?>/js/main.js"></script>
<?php
	}

}
