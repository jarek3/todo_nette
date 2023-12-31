<?php

namespace App\Forms;

use App\Model\DuplicateNameException;
use App\Model\UserManager;
use Nette\Application\UI\Form;
use Nette\SmartObject;
use Nette\Utils\ArrayHash;

/**
 * Továrna na registrační formulář.
 * @package App\Forms
 */
class SignUpFormFactory
{
    use SmartObject;

    /** @var FormFactory Továrna na formuláře. */
    private $formFactory;

    /** @var UserManager Model pro správu uživatelů. */
    private $userManager;

    /**
     * Konstruktor s injektovanou továrnou na formuláře a modelem pro správu uživatelů.
     * @param FormFactory $factory     automaticky injektovaná továrna na formuláře
     * @param UserManager $userManager automaticky injektovaný model pro správu uživatelů
     */
    public function __construct(FormFactory $factory, UserManager $userManager)
    {
        $this->formFactory = $factory;
        $this->userManager = $userManager;
    }

    /**
     * Vytváří a vrací registrační formulář.
     * @param callable $onSuccess specifická funkce, která se vykoná po úspěšném odeslání formuláře
     * @return Form registrační formulář
     */
    public function create(callable $onSuccess)
    {
        $form = $this->formFactory->create();
        $form->addText('username', 'Jméno')->setRequired();
        $form->addPassword('password', 'Heslo');
        $form->addPassword('password_repeat', 'Heslo znovu')->setOmitted()->setRequired(false)
            ->addRule(Form::EQUAL, 'Hesla nesouhlasí.', $form['password']);
        $form->addText('y', 'Zadejte aktuální rok (antispam)')->setOmitted()->setRequired()
            ->addRule(Form::EQUAL, 'Chybně vyplněný antispam.', date("Y"));
        $form->addSubmit('register', 'Registrovat');

        $form->onSuccess[] = function (Form $form, ArrayHash $values) use ($onSuccess) {
            try {
                // Zkusíme zaregistrovat nového uživatele.
                $this->userManager->register($values->username, $values->password);
                $onSuccess($form, $values); // Zavoláme specifickou funkci.
            } catch (DuplicateNameException $e) {
                // Přidáme chybovou zprávu alespoň do formuláře.
                $form['username']->addError($e->getMessage());
            }
        };

        return $form;
    }
}