<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->image_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->image_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="images view content">
            <h3><?= h($image->image_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Inspection') ?></th>
                    <td><?= $image->has('inspection') ? $this->Html->link($image->inspection->inspection_id, ['controller' => 'Inspections', 'action' => 'view', $image->inspection->inspection_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Apartment') ?></th>
                    <td><?= $image->has('apartment') ? $this->Html->link($image->apartment->apartment_id, ['controller' => 'Apartments', 'action' => 'view', $image->apartment->apartment_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Id') ?></th>
                    <td><?= $this->Number->format($image->image_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
