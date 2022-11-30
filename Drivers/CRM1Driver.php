<?php

class CRM1Driver implements CRMDriver
{
	protected array $credentials;

	/**
	 * @throws Exception
	 */
	public function setCredentials(array $credentials):void
	{
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

		$this->$credentials = $credentials;
	}

	public function sendUserInfo(array $data)
	{
        return;
	}
}
