<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection $inspection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inspection'), ['action' => 'edit', $inspection->inspection_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inspection'), ['action' => 'delete', $inspection->inspection_id], ['confirm' => __('Are you sure you want to delete # {0}?', $inspection->inspection_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inspections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inspection'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inspections view content">
            <h3><?= h($inspection->inspection_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Inspection Description') ?></th>
                    <td><?= h($inspection->inspection_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $inspection->has('user') ? $this->Html->link($inspection->user->user_id, ['controller' => 'Users', 'action' => 'view', $inspection->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Apartment') ?></th>
                    <td><?= $inspection->has('apartment') ? $this->Html->link($inspection->apartment->apartment_id, ['controller' => 'Apartments', 'action' => 'view', $inspection->apartment->apartment_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Inspection Id') ?></th>
                    <td><?= $this->Number->format($inspection->inspection_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inspection Datetime') ?></th>
                    <td><?= h($inspection->inspection_datetime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
