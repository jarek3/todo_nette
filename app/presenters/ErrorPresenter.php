<?php

namespace App\Presenters;

use Nette\Application\BadRequestException;
use Nette\Application\IPresenter;
use Nette\Application\IResponse;
use Nette\Application\Request;
use Nette\Application\Responses\CallbackResponse;
use Nette\Application\Responses\ForwardResponse;
use Nette\Http;
use Nette\SmartObject;
use Tracy\ILogger;

/**
 * Presenter pro vlastní zpracování chyb na stránce.
 * @package App\Presenters
 */
class ErrorPresenter implements IPresenter
{
    use SmartObject;

    /** @var ILogger Služba pro logování. */
    private $logger;

    /**
     * Konstruktor s injektovanou službou pro logování.
     * @param ILogger $logger automaticky injektovaná Nette služba pro logování
     */
    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Zpracovává vyhozenou výjimku vygenerováním vlastní odpovědi.
     * @param Request $request originální požadavek, který způsobil výjimku
     * @return IResponse odpověď na vyhozenou výjimku
     */
    public function run(Request $request)
    {
        // Získání instance výjimky.
        $e = $request->getParameter('exception');

        // Pokud jde o chybu v dotazu, vrať jako odpověď přesměrování na vlastní chybovou stránku.
        if ($e instanceof BadRequestException)
            return new ForwardResponse($request->setPresenterName('Core:Item')->setParameters(['url' => 'chyba']));

        // Jinak se jedná o chybu serveru.
        $this->logger->log($e, ILogger::EXCEPTION); // Loguje výjimku.

        // Vrací jako odpověď chybovou stránku serveru.
        return new CallbackResponse(function (Http\IRequest $httpRequest, Http\IResponse $httpResponse) {
            // Pokud je jako odpověď očekáváno HTML, načti šablonu pro chybovou stránku serveru.
            if (preg_match('#^text/html(?:;|$)#', $httpResponse->getHeader('Content-Type')))
                require __DIR__ . '/../templates/Error/500.phtml';
        });
    }
}