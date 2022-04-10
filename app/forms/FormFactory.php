<?php

namespace App\Forms;

use Nette\Application\UI\Form;
use Nette\SmartObject;

/**
 * Továrna na vytváření formulářů.
 * @package App\Forms
 */
class FormFactory
{
    use SmartObject;

    /**
     * Vytváří a vrací nový formulář s výchozím nastavením.
     * @return Form nový formulář s výchozím nastavením
     */
    public function create()
    {
        $form = new Form;
        // Prostor pro výchozí nastavení.
        return $form;
    }
}