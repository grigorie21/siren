<?php

namespace CRMManager;

use Exception;

class CRMClient {
	/**
	 * @throws Exception
	 */
	protected string $driverName;
	protected array $credentials;
	protected $driver;

	public function __constructor(string $driverName, array $credentials){
		$this->driverName = $driverName;
		$this->credentials = $credentials;
	}

	public function initDriver():void
	{
		if ($this->driver){
			return;
		}

		$drv = (new $this->driverName);
		$drv->setCredentials($this->credentials);
		$this->driver = $drv;
	}

	public function publish(array $clientEntity):void
	{
		$this->initDriver();
		$this->driver->sendUserInfo($clientEntity);
	}
}