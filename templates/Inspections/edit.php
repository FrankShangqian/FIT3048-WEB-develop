<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection $inspection
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $apartments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inspection->inspection_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inspection->inspection_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inspections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inspections form content">
            <?= $this->Form->create($inspection) ?>
            <fieldset>
                <legend><?= __('Edit Inspection') ?></legend>
                <?php
                    echo $this->Form->control('inspection_datetime');
                    echo $this->Form->control('inspection_description');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('apartment_id', ['options' => $apartments]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
