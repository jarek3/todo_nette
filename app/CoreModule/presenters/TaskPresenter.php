<?php

namespace App\CoreModule\Presenters;

use App\CoreModule\Model\TaskManager;
use App\Presenters\BasePresenter;
use Nette\Application\AbortException;
use Nette\Application\BadRequestException;
use Nette\Application\UI\Form;
use Exception;
use Nette\Utils\ArrayHash;
use Nette\UnexpectedValueException;
use Nette\Utils\DateTime;
/**
 * Presenter pro akce s položkami.
 * @package App\CoreModule\Presenters
 */
class TaskPresenter extends BasePresenter
{
const DONE = 1;
    public $done = self::DONE;

    /** @var string URL výchozí položky. */
    private $defaultTaskUrl;

    /** @var TaskManager Model pro správu úkolů. */
    private $taskManager;
        
    /**
    * Konstruktor s nastavením URL výchozího úkolu a injektovaným modelem pro správu položek.
    * @param string         $defaultTaskUrl URL výchozí položky
    * @param TaskManager $taskManager    automaticky injektovaný model pro správu položek
    */
    public function __construct($defaultTaskUrl, TaskManager $taskManager)
    {
	parent::__construct();
	$this->defaultTaskUrl = $defaultTaskUrl;
	$this->taskManager = $taskManager;
    }

    /**
    * Načte a předá úkol do šablony podle jeho URL.
    * @param string|null $url URL úkolu
    * @throws BadRequestException Jestliže položka s danou URL nebyla nalezena.
    */
    public function renderDefault($task_id = null)
    {
        if (!$task_id) $task_id = $this->defaultTaskUrl; // Pokud není zadané ID.

    // Pokusí se načíst úkoly s daným ID a pokud nebude nalezen vyhodí chybu 404.
    if (!($task = $this->taskManager->getTask($task_id)))
        $this->redirect('Task:list');
    }

    /** Načte a předá seznam úkolů do šablony. */
    public function renderList()
    {
	$this->template->tasks = $this->taskManager->getTasks();
    }

    /**
    * Odstraní úkol.
    * @param string|null $url URL úkolu
    * @throws AbortException
    */
    public function actionRemove($url = null)
    {    
      $this->taskManager->removeTask($url);
      $this->flashMessage('The task has been successfully removed.');

      $this->redirect('Task:list');
    }

    /**
    * Vykresluje formulář pro editaci položky podle zadaného ID.
    * Pokud ID není zadáno, nebo položka s daným ID neexistuje, vytvoří se nová.
    * @param int|null $task_id ID položky
    */
    public function actionEditor($task_id=0)
    {
	if ($task_id)
           {
            if (!($task = $this->taskManager->getTask($task_id)))
                $this->flashMessage('The task has not been found.'); // Výpis chybové hlášky.
			
            else 
                {
                $task = $this->taskManager->getTask($task_id)->toArray();
                if (!empty($task['deadline'])) $task['deadline'] = $task['deadline']->format('d.m.Y');
                $this['editorForm']->setDefaults($task);
                }                        
            }        
    }
     
    /**
    * Vytváří a vrací formulář pro editaci položek.
    * @return Form formulář pro editaci položek
    */
    protected function createComponentEditorForm()
    {
        // Vytvoření formuláře a definice jeho polí.  
        $form = $this->formFactory->create();              
        $form->addHidden('task_id');
        $form->addText('name', 'Name');
        $form->addText('description', 'Description');
        $form->addText('deadline', 'Deadline');
        //$form->addText('done', 'Done');
        $form->addRadioList('done', 'Done', ['NO'=>'no', 'YES'=>'yes']);;
        $form->addSubmit('save', 'Save task');

        // Funkce se vykonaná při úspěšném odeslání formuláře a zpracuje zadané hodnoty.
        $form->onSuccess[] = function (Form $form, ArrayHash $values)
        {
            try            
            {    
                $this->taskManager->saveTask($values);
                $this->flashMessage('The task was saved successfully.');
                $this->redirect('Task:list');
            } 
            catch (UnexpectedValueException $e)
            {
                $this->flashMessage('Please enter an existing date.');
            }
       };

    return $form;
    }
}