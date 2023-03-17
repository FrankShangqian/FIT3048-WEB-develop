<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apartment $apartment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Apartment'), ['action' => 'edit', $apartment->apartment_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Apartment'), ['action' => 'delete', $apartment->apartment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $apartment->apartment_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Apartments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Apartment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="apartments view content">
            <h3><?= h($apartment->apartment_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Apartment Address') ?></th>
                    <td><?= h($apartment->apartment_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apartment Type') ?></th>
                    <td><?= h($apartment->apartment_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apartment Id') ?></th>
                    <td><?= $this->Number->format($apartment->apartment_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
