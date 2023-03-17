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
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->user_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User Fname') ?></th>
                    <td><?= h($user->user_fname) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Lname') ?></th>
                    <td><?= h($user->user_lname) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Prefername') ?></th>
                    <td><?= h($user->user_prefername) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Phone') ?></th>
                    <td><?= h($user->user_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Email') ?></th>
                    <td><?= h($user->user_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Password') ?></th>
                    <td><?= h($user->user_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Type') ?></th>
                    <td><?= h($user->user_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Address') ?></th>
                    <td><?= h($user->user_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
