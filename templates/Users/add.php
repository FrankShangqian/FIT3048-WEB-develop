<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add User</title>
    <?= $this->Html->css(['styles']) ?>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<div class="col-lg-6" style="float:none;margin:auto;">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Back'), ['action' => 'index']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80 ">
        <div class="users form content">
            <?= $this->Form->create($user,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                        <?php echo $this->Form->control('user_fname', ['class' => 'form-control col-md-6', 'label' => 'First Name']); ?>
                        <?php echo $this->Form->control('user_lname', ['class' => 'form-control col-md-6', 'label' => 'Last Name']); ?>
                        <?php echo $this->Form->control('user_prefername', ['class' => 'form-control', 'label' => 'Prefer Name']); ?>
                        <?php echo $this->Form->control('user_phone', ['class' => 'form-control', 'label' => 'Phone Number']); ?>
                        <?php echo $this->Form->control('email', ['class' => 'form-control', 'label' => 'Email']); ?>
                        <?php echo $this->Form->control('password', ['class' => 'form-control', 'label' => 'Password']); ?>
                        <?php echo $this->Form->control('user_type', ['class' => 'form-control', 'label' => 'Account Type', 'options' => ['admin' => 'Admin', 'contractor' => 'Contractor']]); ?>
                        <?php echo $this->Form->control('user_address', ['class' => 'form-control', 'label' => 'Address']); ?>
                        <?php echo $this->Form->control('user_image', ['type' => 'file', 'class' => 'form-control', 'label' => 'Address']); ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-secondary btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
