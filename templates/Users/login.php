<!-- in /templates/Users/login.php -->
<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
	$error = null;
	$connected = false;
	try {
		$connection = ConnectionManager::get($name);
		$connected = $connection->connect();
	} catch (Exception $connectionError) {
		$error = $connectionError->getMessage();
		if (method_exists($connectionError, 'getAttributes')) {
			$attributes = $connectionError->getAttributes();
			if (isset($attributes['message'])) {
				$error .= '<br />' . $attributes['message'];
			}
		}
	}
	return compact('connected', 'error');
};


if (!Configure::read('debug')) :
	throw new NotFoundException(
		'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
	);
endif;

$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team member</title>
    <link rel="stylesheet" href="log_styles.css">
    <?= $this->Html->css(['log_styles']) ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container">
                    <?= $this->Form->create() ?>
                    <fieldset>
                        <?= $this->Form->control('email', ['required' => true]) ?>
                        <?= $this->Form->control('password', ['required' => true]) ?>
                    </fieldset>
                    <?= $this->Form->submit(__('Login', ['class' => 'btn-login'])); ?>
                    <?= $this->Form->end() ?>
                    <?= $this->Html->link("CREATE ACCOUNT", ['action' => 'add'], ['class' => 'btn-new']) ?>
                    <a class="btn-new" href="<?= $this->Url->build('/') ?>">Back To Home</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
