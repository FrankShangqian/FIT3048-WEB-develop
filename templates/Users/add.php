<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('user_fname');
                    echo $this->Form->control('user_lname');
                    echo $this->Form->control('user_prefername');
                    echo $this->Form->control('user_phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('user_type', ['options' => ['admin' => 'Admin', 'contractor' => 'Contractor']]);
                    echo $this->Form->control('user_address');
                    echo $this->Form->control('user_image',['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
