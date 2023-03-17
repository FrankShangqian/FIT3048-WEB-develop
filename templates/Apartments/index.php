<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Apartment> $apartments
 */
?>
<div class="apartments index content">
    <?= $this->Html->link(__('New Apartment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Apartments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('apartment_id') ?></th>
                    <th><?= $this->Paginator->sort('apartment_address') ?></th>
                    <th><?= $this->Paginator->sort('apartment_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apartments as $apartment): ?>
                <tr>
                    <td><?= $this->Number->format($apartment->apartment_id) ?></td>
                    <td><?= h($apartment->apartment_address) ?></td>
                    <td><?= h($apartment->apartment_type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $apartment->apartment_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $apartment->apartment_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $apartment->apartment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $apartment->apartment_id)]) ?>
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
