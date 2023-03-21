<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <div class="card-body">
        <h3><?= __('Users') ?></h3>
        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <table class="table table-bordered" id="datatablesSimple">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('user_fname') ?></th>
                    <th><?= $this->Paginator->sort('user_lname') ?></th>
                    <th><?= $this->Paginator->sort('user_prefername') ?></th>
                    <th><?= $this->Paginator->sort('user_phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('user_type') ?></th>
                    <th><?= $this->Paginator->sort('user_address') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->user_id) ?></td>
                        <td><?= h($user->user_fname) ?></td>
                        <td><?= h($user->user_lname) ?></td>
                        <td><?= h($user->user_prefername) ?></td>
                        <td><?= h($user->user_phone) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->user_type) ?></td>
                        <td><?= h($user->user_address) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id], ['class' => 'badge bg-yellow-soft text-black']) ?>
                            <?php if ($this->Identity->get('email') == $user->email || $this->Identity->get('user_type') == 'admin') {
                                echo $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id], ['class' => 'badge bg-yellow-soft text-yellow']);
                                echo $this->Form->postLink(
                                    __('Delete'),
                                    ['action' => 'delete', $user->user_id],
                                    ['confirm' => __('Are you sure you want to delete it ?', $user->user_id), 'class' => 'badge bg-red-200 text-red']
                                );
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</div>