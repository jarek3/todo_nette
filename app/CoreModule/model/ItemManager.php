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
class ItemManager extends DatabaseManager
{
	/** Konstanty pro práci s databází. */
	const
		TABLE_NAME = 'item',
		COLUMN_ID = 'item_id';             
                 
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
	public function getItems()
	{
		return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_ID . ' DESC');
	}

	/**
	 * Vrátí položku z databáze podle její ID.
	 * @param string $item_id ID položky
	 * @return false|ActiveRow první položka, která odpovídá ID nebo false pokud položka s daným id neexistuje
	 */
	public function getItem($item_id)
	{  
		return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $item_id)->fetch();
             
	}   

	/**
	 * Uloží položku do systému.
	 * Pokud není nastaveno ID, vloží novou položku, jinak provede editaci položky s daným ID.
	 * @param array|ArrayHash $item položka
	 */
	public function saveItem($item)
        {   
            $item['birthdate']=$this->datumDb($item['birthdate']);
            if (empty($item[self::COLUMN_ID])) 
              {
                unset($item[self::COLUMN_ID]);
			$this->database->table(self::TABLE_NAME)->insert($item);
              } else
			$this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $item[self::COLUMN_ID])->update($item);
	}

	/**
	 * Odstraní položku s daným ID.
	 * @param string $item_id ID položky
	 */
	public function removeItem($item_id)
	{
		$this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $item_id)->delete();
	}      
}