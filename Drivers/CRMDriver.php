<?php

declare(strict_types=1);

interface CRMDriver {
	public function setCredentials(array $credentials):void;

	public function sendUserInfo(array $data);
}