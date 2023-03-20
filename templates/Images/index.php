<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Image> $images
 */
?>
<div class="images index content">
    <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Images') ?></h3>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('image_id') ?></th>
                        <th><?= $this->Paginator->sort('inspection_id') ?></th>
                        <th><?= $this->Paginator->sort('apartment_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($images as $image) : ?>
                        <tr>
                            <td><?= $this->Number->format($image->image_id) ?></td>
                            <td><?= $image->has('inspection') ? $this->Html->link($image->inspection->inspection_id, ['controller' => 'Inspections', 'action' => 'view', $image->inspection->inspection_id]) : '' ?></td>
                            <td><?= $image->has('apartment') ? $this->Html->link($image->apartment->apartment_id, ['controller' => 'Apartments', 'action' => 'view', $image->apartment->apartment_id]) : '' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $image->image_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->image_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->image_id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
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