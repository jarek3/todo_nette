<?php
// source: C:\xampp\htdocs\Records_nette\app/config/config.neon 
// source: C:\xampp\htdocs\Records_nette\app/config/config.local.neon 

class Container_10378b66c2 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Security\IAuthorizator' => [1 => ['security.authorizator']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'App\Model\DatabaseManager' => [1 => ['25_App_CoreModule_Model_ItemManager', 'authenticator']],
			'App\CoreModule\Model\ItemManager' => [1 => ['25_App_CoreModule_Model_ItemManager']],
			'App\Forms\FormFactory' => [1 => ['26_App_Forms_FormFactory']],
			'App\Forms\SignInFormFactory' => [1 => ['27_App_Forms_SignInFormFactory']],
			'App\Forms\SignUpFormFactory' => [1 => ['28_App_Forms_SignUpFormFactory']],
			'Nette\Security\IAuthenticator' => [1 => ['authenticator']],
			'App\Model\UserManager' => [1 => ['authenticator']],
			'DateTime' => [1 => ['30_Nette_Utils_DateTime']],
			'DateTimeInterface' => [1 => ['30_Nette_Utils_DateTime']],
			'JsonSerializable' => [1 => ['30_Nette_Utils_DateTime']],
			'Nette\Utils\DateTime' => [1 => ['30_Nette_Utils_DateTime']],
			'App\Presenters\BasePresenter' => [
				1 => [
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\UI\Presenter' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'ArrayAccess' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.4',
					'application.5',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'31_App_CoreModule_Presenters_ContactPresenter',
					'32_App_CoreModule_Presenters_ItemPresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'App\CoreModule\Presenters\ContactPresenter' => [1 => ['31_App_CoreModule_Presenters_ContactPresenter']],
			'App\CoreModule\Presenters\ItemPresenter' => [1 => ['32_App_CoreModule_Presenters_ItemPresenter']],
			'App\CoreModule\Presenters\AdministrationPresenter' => [1 => ['application.1']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.2']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.3']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.4']],
			'App\Presenters\SignPresenter' => [1 => ['application.5']],
			'NetteModule\ErrorPresenter' => [1 => ['application.6']],
			'NetteModule\MicroPresenter' => [1 => ['application.7']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'25_App_CoreModule_Model_ItemManager' => 'App\CoreModule\Model\ItemManager',
			'26_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'27_App_Forms_SignInFormFactory' => 'App\Forms\SignInFormFactory',
			'28_App_Forms_SignUpFormFactory' => 'App\Forms\SignUpFormFactory',
			'30_Nette_Utils_DateTime' => 'Nette\Utils\DateTime',
			'31_App_CoreModule_Presenters_ContactPresenter' => 'App\CoreModule\Presenters\ContactPresenter',
			'32_App_CoreModule_Presenters_ItemPresenter' => 'App\CoreModule\Presenters\ItemPresenter',
			'application.1' => 'App\CoreModule\Presenters\AdministrationPresenter',
			'application.2' => 'App\Presenters\Error4xxPresenter',
			'application.3' => 'App\Presenters\ErrorPresenter',
			'application.4' => 'App\Presenters\HomepagePresenter',
			'application.5' => 'App\Presenters\SignPresenter',
			'application.6' => 'NetteModule\ErrorPresenter',
			'application.7' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'authenticator' => 'App\Model\UserManager',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.authorizator' => 'Nette\Security\IAuthorizator',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		],
		'tags' => [
			'inject' => [
				'31_App_CoreModule_Presenters_ContactPresenter' => true,
				'32_App_CoreModule_Presenters_ItemPresenter' => true,
				'application.1' => true,
				'application.2' => true,
				'application.3' => true,
				'application.4' => true,
				'application.5' => true,
				'application.6' => true,
				'application.7' => true,
			],
			'nette.presenter' => [
				'31_App_CoreModule_Presenters_ContactPresenter' => 'App\CoreModule\Presenters\ContactPresenter',
				'32_App_CoreModule_Presenters_ItemPresenter' => 'App\CoreModule\Presenters\ItemPresenter',
				'application.1' => 'App\CoreModule\Presenters\AdministrationPresenter',
				'application.2' => 'App\Presenters\Error4xxPresenter',
				'application.3' => 'App\Presenters\ErrorPresenter',
				'application.4' => 'App\Presenters\HomepagePresenter',
				'application.5' => 'App\Presenters\SignPresenter',
				'application.6' => 'NetteModule\ErrorPresenter',
				'application.7' => 'NetteModule\MicroPresenter',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.authorizator' => 'security.authorizator',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => 'C:\xampp\htdocs\Records_nette\app',
			'wwwDir' => 'C:\xampp\htdocs\Records_nette\www',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => 'C:\xampp\htdocs\Records_nette\app/../temp',
			'defaultItemUrl' => 'uvod',
			'contactEmail' => 'admin@localhost.cz',
		];
	}


	public function createService__25_App_CoreModule_Model_ItemManager(): App\CoreModule\Model\ItemManager
	{
		$service = new App\CoreModule\Model\ItemManager($this->getService('database.default.context'));
		return $service;
	}


	public function createService__26_App_Forms_FormFactory(): App\Forms\FormFactory
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	public function createService__27_App_Forms_SignInFormFactory(): App\Forms\SignInFormFactory
	{
		$service = new App\Forms\SignInFormFactory($this->getService('26_App_Forms_FormFactory'), $this->getService('security.user'));
		return $service;
	}


	public function createService__28_App_Forms_SignUpFormFactory(): App\Forms\SignUpFormFactory
	{
		$service = new App\Forms\SignUpFormFactory($this->getService('26_App_Forms_FormFactory'), $this->getService('authenticator'));
		return $service;
	}


	public function createService__30_Nette_Utils_DateTime(): Nette\Utils\DateTime
	{
		$service = new Nette\Utils\DateTime;
		return $service;
	}


	public function createService__31_App_CoreModule_Presenters_ContactPresenter(): App\CoreModule\Presenters\ContactPresenter
	{
		$service = new App\CoreModule\Presenters\ContactPresenter('admin@localhost.cz', $this->getService('mail.mailer'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('26_App_Forms_FormFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createService__32_App_CoreModule_Presenters_ItemPresenter(): App\CoreModule\Presenters\ItemPresenter
	{
		$service = new App\CoreModule\Presenters\ItemPresenter('uvod', $this->getService('25_App_CoreModule_Model_ItemManager'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('26_App_Forms_FormFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__1(): App\CoreModule\Presenters\AdministrationPresenter
	{
		$service = new App\CoreModule\Presenters\AdministrationPresenter(
			$this->getService('27_App_Forms_SignInFormFactory'),
			$this->getService('28_App_Forms_SignUpFormFactory')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('26_App_Forms_FormFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('26_App_Forms_FormFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\ErrorPresenter
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('26_App_Forms_FormFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\SignPresenter
	{
		$service = new App\Presenters\SignPresenter(
			$this->getService('27_App_Forms_SignInFormFactory'),
			$this->getService('28_App_Forms_SignUpFormFactory')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('26_App_Forms_FormFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): NetteModule\ErrorPresenter
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__7(): NetteModule\MicroPresenter
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = true;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		$service = new Nette\Application\LinkGenerator(
			$this->getService('routing.router'),
			$this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory')
		);
		return $service;
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'C:\xampp\htdocs\Records_nette\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceAuthenticator(): App\Model\UserManager
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\IJournal
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\Records_nette\app/../temp/cache/journal.s3db');
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\IStorage
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\Records_nette\app/../temp/cache', $this->getService('cache.journal'));
		return $service;
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=cosmonauts', 'root', null, ['lazy' => true]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, true, 'default');
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Context
	{
		$service = new Nette\Database\Context(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
		return $service;
	}


	public function createServiceHttp__context(): Nette\Http\Context
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		return $service;
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_10378b66c2 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\xampp\htdocs\Records_nette\app/../temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\ITemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null
		);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\IMailer
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	public function createServiceRouting__router(): Nette\Application\IRouter
	{
		$service = App\RouterFactory::createRouter();
		return $service;
	}


	public function createServiceSecurity__authorizator(): Nette\Security\IAuthorizator
	{
		$service = new Nette\Security\Permission;
		$service->addRole('guest', null);
		$service->addRole('member', ['guest']);
		$service->addRole('admin', null);
		$service->addResource('Core:Administration');
		$service->addResource('Core:Item');
		$service->addResource('Core:Contact');
		$service->allow('guest', 'Core:Administration', 'login');
		$service->allow('guest', 'Core:Administration', 'register');
		$service->allow('guest', 'Core:Item', 'default');
		$service->allow('guest', 'Core:Item', 'list');
		$service->allow('guest', 'Core:Contact');
		$service->allow('member', 'Core:Administration', 'default');
		$service->allow('member', 'Core:Administration', 'logout');
		$service->addResource('Error');
		$service->allow('admin');
		$service->allow('guest', 'Error');
		return $service;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.userStorage'),
			$this->getService('authenticator'),
			$this->getService('security.authorizator')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		$service = Tracy\Debugger::getBar();
		return $service;
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		$service = Tracy\Debugger::getBlueScreen();
		return $service;
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		$service = Tracy\Debugger::getLogger();
		return $service;
	}


	public function initialize()
	{
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		Nette\Forms\Validator::$messages[Nette\Forms\Form::REQUIRED] = 'Povinné pole.';
		Nette\Forms\Validator::$messages[Nette\Forms\Form::EMAIL] = 'Neplatná emailová adresa.';
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::getLogger($this->getService('tracy.logger'))->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer'), null), 'send'];
		if ($tmp = $this->getByType("Nette\Http\Session", false)) { $tmp->start(); Tracy\Debugger::dispatch(); };
	}
}
