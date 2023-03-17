<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Inspection> $inspections
 */
?>
<div class="inspections index content">
    <?= $this->Html->link(__('New Inspection'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inspections') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('inspection_id') ?></th>
                    <th><?= $this->Paginator->sort('inspection_datetime') ?></th>
                    <th><?= $this->Paginator->sort('inspection_description') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('apartment_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inspections as $inspection): ?>
                <tr>
                    <td><?= $this->Number->format($inspection->inspection_id) ?></td>
                    <td><?= h($inspection->inspection_datetime) ?></td>
                    <td><?= h($inspection->inspection_description) ?></td>
                    <td><?= $inspection->has('user') ? $this->Html->link($inspection->user->user_id, ['controller' => 'Users', 'action' => 'view', $inspection->user->user_id]) : '' ?></td>
                    <td><?= $inspection->has('apartment') ? $this->Html->link($inspection->apartment->apartment_id, ['controller' => 'Apartments', 'action' => 'view', $inspection->apartment->apartment_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inspection->inspection_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inspection->inspection_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inspection->inspection_id], ['confirm' => __('Are you sure you want to delete # {0}?', $inspection->inspection_id)]) ?>
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
</div>
