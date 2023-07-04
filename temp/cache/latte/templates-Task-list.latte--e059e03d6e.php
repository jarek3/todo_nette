<?php
// source: C:\xampp\htdocs\todo_nette\app\CoreModule/templates/Task/list.latte

use Latte\Runtime as LR;

class Templatee059e03d6e extends Latte\Runtime\Template
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
		if (isset($this->params['task'])) trigger_error('Variable $task overwritten in foreach on line 9');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
		?>List of items<?php
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
    <tr><th>Name</th><th>Description</th><th>Deadline</th><th>Done</th><?php
		if ($user->isInRole('admin')) {
?><th colspan="2">Administration</th>
    </tr><?php
		}
?>

 </thead>
<?php
		$iterations = 0;
		foreach ($tasks as $task) {
?>    <tbody>
        <tr>
            <h2><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Task:", [$task->task_id])) ?>"></a></h2>
            <td><?php echo LR\Filters::escapeHtmlText($task->name) /* line 12 */ ?></td><td><?php echo LR\Filters::escapeHtmlText($task->description) /* line 12 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText(call_user_func($this->filters->dateczech, $task->deadline)) /* line 12 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText($task->done) /* line 12 */ ?></td>
            <br>
<?php
			if ($user->isInRole('admin')) {
				?>                <td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("editor", [$task->task_id])) ?>">Edit</a></td>
                <td><a onClick="return confirm('Opravdu chcete smazat?');" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("remove", [$task->task_id])) ?>">Remove</a></td>
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
