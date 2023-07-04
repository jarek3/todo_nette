<?php

namespace App\CoreModule\Presenters;

use App\Presenters\BasePresenter;
use Nette\Application\UI\Form;
use Nette\Mail\IMailer;
use Nette\Mail\Message;
use Nette\Mail\SendException;
use Nette\Utils\ArrayHash;

/**
 * Presenter pro kontaktní formulář.
 * @package App\CoreModule\Presenters
 */
class ContactPresenter extends BasePresenter
{
    /** @var string Kontaktní email, na který se budou posílat emaily z kontaktního formuláře. */
    private $contactEmail;

    /** @var IMailer Služba Nette pro odesílání emailů. */
    private $mailer;

    /**
     * Konstruktor s nastavením kontaktního emailu a injektovanou Nette službou pro odesílání emailů.
     * @param string  $contactEmail kontaktní email
     * @param IMailer $mailer       automaticky injektovaná Nette služba pro odesílání emailů
     */
    public function __construct($contactEmail, IMailer $mailer)
    {
        parent::__construct();
        $this->contactEmail = $contactEmail;
        $this->mailer = $mailer;
    }

    /**
     * Vytváří a vrací kontaktní formulář.
     * @return Form kontaktní formulář
     */
    protected function createComponentContactForm()
    {
        $form = new Form;
        $form ->getElementPrototype()->setAttribute('novalidate', true);
        $form ->addEmail('email', 'Your email address')->setRequired();
        $form ->addText('y', 'Enter the current year')->setOmitted()->setRequired()
              ->addRule(Form::EQUAL, 'Antispam filled in incorrectly.', date("Y"));
        $form ->addTextArea('message', 'Message')->setRequired()
              ->addRule(Form::MIN_LENGTH, 'The message must be at least %d characters long.', 10);
        $form ->addSubmit('send', 'Submit');

        // Funkce se vykoná při úspěšném odeslání kontaktního formuláře a odešle email.
        $form->onSuccess[] = function (Form $form, ArrayHash $values) {
            try {
                $mail = new Message;
                $mail->setFrom($values->email)
                    ->addTo($this->contactEmail)
                    ->setSubject('Email z webu')
                    ->setBody($values->message);
                $this->mailer->send($mail);
                $this->flashMessage('Email has been sent successfully, we will reply you soon.');
                $this->redirect('this');
            } catch (SendException $e) {
                $this->flashMessage('Email failed to send.');
            }
        };

        return $form;
    }
}