<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Apartment> $apartments
 */
?>
<div class="apartments index content">
    <div class="card-body">
        <h3><?= __('Apartments') ?></h3>
        <?= $this->Html->link(__('New Apartment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('apartment_id') ?></th>
                    <th><?= $this->Paginator->sort('apartment_address') ?></th>
                    <th><?= $this->Paginator->sort('apartment_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apartments as $apartment) : ?>
                    <tr>
                        <td><?= $this->Number->format($apartment->apartment_id) ?></td>
                        <td><?= h($apartment->apartment_address) ?></td>
                        <td><?= h($apartment->apartment_type) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $apartment->apartment_id], ['class' => 'badge bg-yellow-soft text-black']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $apartment->apartment_id], ['class' => 'badge bg-yellow-soft text-yellow']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $apartment->apartment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $apartment->apartment_id), 'class' => 'badge bg-red-200 text-red']) ?>
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
