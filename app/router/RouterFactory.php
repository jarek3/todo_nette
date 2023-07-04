<?php

namespace App;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Nette\StaticClass;

/**
 * Továrna na routovací pravidla.
 * Řídí směrování a generovaní URL adres v celé aplikaci.
 * @package App
 */
class RouterFactory
{
	use StaticClass;

	/**
	 * Vytváří a vrací seznam routovacích pravidel pro aplikaci.
	 * @return IRouter výsledný router pro aplikaci
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = new Route('kontakt', 'Core:Contact:default');
		$router[] = new Route('<action>', [
			'presenter' => 'Core:Administration',
			'action' => [
				Route::FILTER_STRICT => true,
				Route::FILTER_TABLE => [
					// řetězec v URL => akce presenteru
					'administrace' => 'default',
					'prihlaseni' => 'login',
					'odhlasit' => 'logout',
					'registrace' => 'register'
				]
			]
		]);
		$router[] = new Route('<action>[/<url>]', [
			'presenter' => 'Core:Task',
			'action' => [
				Route::FILTER_STRICT => true,
				Route::FILTER_TABLE => [
					// řetězec v URL => akce presenteru
					'seznam-ukolu' => 'list',
					'editor' => 'editor',
					'odstranit' => 'remove'
				]
			]
		]);
		$router[] = new Route('[<url>]', 'Core:Task:default');
		return $router;
	}
}
