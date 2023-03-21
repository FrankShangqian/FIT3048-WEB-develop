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
    <div class="column-responsive column-80 ">
        <div class="users form content">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $user->user_id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'side-nav-item']
                ) ?>
                <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <?php echo $this->Form->control('user_fname', ['class' => "form-control", 'label' => 'First Name']); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('user_lname', ['class' => "form-control", 'label' => 'Last Name']); ?>
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <?php echo $this->Form->control('user_prefername', ['class' => "form-control", 'label' => 'Prefer Name']); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('user_phone', ['class' => "form-control", 'label' => 'Phone Number']); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <?php echo $this->Form->control('email', ['class' => "form-control", 'label' => 'Email']); ?>
                </div>
                <div class="mb-3">
                    <?php echo $this->Form->control('password', ['class' => "form-control", 'label' => 'Password']); ?>
                </div>
                <div class="mb-3">
                    <?php echo $this->Form->control('user_type', ['class' => "form-control", 'label' => 'Account Type', 'options' => ['admin' => 'Admin', 'contractor' => 'Contractor']]); ?>
                </div>
                <div class="mb-3">
                    <?php echo $this->Form->control('user_address', ['class' => "form-control", 'label' => 'Address']); ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>