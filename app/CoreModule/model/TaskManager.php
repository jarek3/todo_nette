<?php

namespace App\CoreModule\Model;

use App\Model\DatabaseManager;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;
use Nette\Utils\DateTime;
use Exception;
use Nette\UnexpectedValueException;

/**
 * Model pro správu položek.
 * @package App\CoreModule\Model
 */
class TaskManager extends DatabaseManager
{
	/** Konstanty pro práci s databází. */
	const
		TABLE_NAME = 'task',
		COLUMN_ID = 'task_id';
    /**
     * @var mixed
     */
    private $done;

    public function datumDb($value, $format='Y-m-d')
        {   
        //pokud bude zadán měsíc textem v češtině
        $mesice = ['ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince'];
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];          
        $value= str_replace($mesice, $months, $value);
        
        //pokud bude datum  zadáno ve tvaru d/m/Y
        $a = explode("/", $value);
        if ($a[0]<32)        
        $value = implode( ".", $a);
        
        //odstranění případných mezer v zadání datumu
        $value = str_replace(" ", "", $value);       
        try{$datum = new DateTime($value);}
        
        catch(Exception $e){}
        $errors = DateTime::getLastErrors();
        
        // Vyvolání chyby
        if ($errors['warning_count'] + $errors['error_count'] > 0)
            throw new UnexpectedValueException(); //pokud zadám např. 29.2.2019
        return $datum->format('Y-m-d');
        }        

	/**
	 * Vrátí seznam všech položek v databázi seřazený sestupně od naposledy přidané.
	 * @return Selection seznam všech položek
	 */
	public function getTasks()
	{
		return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_ID . ' DESC');
	}

	/**
	 * Vrátí položku z databáze podle její ID.
	 * @param string $task_id ID položky
	 * @return false|ActiveRow první položka, která odpovídá ID nebo false pokud položka s daným id neexistuje
	 */
	public function getTask($task_id)
	{  
		return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $task_id)->fetch();
             
	}   

	/**
	 * Uloží položku do systému.
	 * Pokud není nastaveno ID, vloží novou položku, jinak provede editaci položky s daným ID.
	 * @param array|ArrayHash $task položka
	 */
	public function saveTask($task)
        {   
            $task['deadline']=$this->datumDb($task['deadline']);
            if (!empty($task[self::COLUMN_ID]))
              {
                unset($task[self::COLUMN_ID]);
			$this->database->table(self::TABLE_NAME)->insert($task);
              } else
			$this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $task[self::COLUMN_ID])->update($task);
	}

	/**
	 * Odstraní položku s daným ID.
	 * @param string $task_id ID položky
	 */
	public function removeTask($task_id)
	{

        $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $task_id)->delete();

	}

    public function getDone()
    {
        return $this->done;
    }
}