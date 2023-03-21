<!-- in /templates/Users/login.php -->
<?php
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->meta('icon') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team member</title>
    <?= $this->Html->css(['log_styles', 'normalize.min', 'cake']) ?>
    <link rel="stylesheet" type="text/css" href="styles.css?version=51">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <main>
        <div class="row">

            <div class="colm-form">
                <div class="elementor-widget-container">
                    <a href="<?= $this->Url->build('/') ?>">
                        <img class="center" width="185" height="150" src="https://www.monoapartments.com/wp-content/uploads/2021/09/mono-apartments-logo.svg" /> </a>
                </div>
                <div class="form-container">
                    <?= $this->Form->create() ?>
                    <fieldset>
                        <?= $this->Form->control('email', ['required' => true]) ?>
                        <?= $this->Form->control('password', ['required' => true]) ?>
                    </fieldset>
                    <?= $this->Form->submit(__('Login'), ['class' => 'btn-new']); ?>
                    <?= $this->Form->end() ?>
                    <?= $this->Html->link("Create ACCOUNT", ['action' => 'add'], ['class' => 'btn-new']) ?>
                    <a class="btn-new" href="<?= $this->Url->build('/') ?>">Home page</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>