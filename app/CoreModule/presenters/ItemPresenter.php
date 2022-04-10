<?php

namespace App\CoreModule\Presenters;

use App\CoreModule\Model\ItemManager;
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
class ItemPresenter extends BasePresenter
{
    /** @var string URL výchozí položky. */
    private $defaultItemUrl;

    /** @var ItemManager Model pro správu položek. */
    private $itemManager;
        
    /**
    * Konstruktor s nastavením URL výchozí položky a injektovaným modelem pro správu položek.
    * @param string         $defaultItemUrl URL výchozí položky
    * @param ItemManager $itemManager    automaticky injektovaný model pro správu položek
    */
    public function __construct($defaultItemUrl, ItemManager $itemManager)
    {
	parent::__construct();
	$this->defaultItemUrl = $defaultItemUrl;
	$this->itemManager = $itemManager;                
    }

    /**
    * Načte a předá položku do šablony podle její URL.
    * @param string|null $url URL položky
    * @throws BadRequestException Jestliže položka s danou URL nebyla nalezena.
    */
    public function renderDefault($item_id = null)
    {
        if (!$item_id) $item_id = $this->defaultItemUrl; // Pokud není zadané ID.

    // Pokusí se načíst položku s daným ID a pokud nebude nalezena vyhodí chybu 404.
    if (!($item = $this->itemManager->getItem($item_id)))        
        $this->redirect('Item:list');        
    }

    /** Načte a předá seznam položek do šablony. */
    public function renderList()
    {
	$this->template->items = $this->itemManager->getItems();
    }

    /**
    * Odstraní položku.
    * @param string|null $url URL položky
    * @throws AbortException
    */
    public function actionRemove($url = null)
    {
	$this->itemManager->removeItem($url);
	$this->flashMessage('Položka byla úspěšně odstraněna.');
	$this->redirect('Item:list');
    }

    /**
    * Vykresluje formulář pro editaci položky podle zadaného ID.
    * Pokud ID není zadáno, nebo položka s daným ID neexistuje, vytvoří se nová.
    * @param int|null $item_id ID položky
    */
    public function actionEditor($item_id=0)
    {
	if ($item_id) 
           {
            if (!($item = $this->itemManager->getItem($item_id)))
                $this->flashMessage('Položka nebyla nalezena.'); // Výpis chybové hlášky.
			
            else 
                {
                $item = $this->itemManager->getItem($item_id)->toArray();            
                if (!empty($item['birthdate'])) $item['birthdate'] = $item['birthdate']->format('d.m.Y');  
                $this['editorForm']->setDefaults($item); 
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
        $form->addHidden('item_id');   		
        $form->addText('name', 'Jméno');
        $form->addText('surname', 'Příjmení');    
        $form->addText('birthdate', 'Datum narození');     
        $form->addText('superpower', 'Superschopnost');
        $form->addSubmit('save', 'Uložit položku');

        // Funkce se vykonaná při úspěšném odeslání formuláře a zpracuje zadané hodnoty.
        $form->onSuccess[] = function (Form $form, ArrayHash $values)
        {
            try            
            {    
                $this->itemManager->saveItem($values);
                $this->flashMessage('Položka byla úspěšně uložena.');
                $this->redirect('Item:list');
            } 
            catch (UnexpectedValueException $e)
            {
                $this->flashMessage('Zadejte prosím existující datum.');     
            }
       };

    return $form;
    }
}