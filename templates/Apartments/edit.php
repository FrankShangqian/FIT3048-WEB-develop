<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apartment $apartment
 */
?>
<div class="col-lg-6" style="float:none;margin:auto;">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $apartment->apartment_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $apartment->apartment_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Apartments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="apartments form content">
            <?= $this->Form->create($apartment) ?>
            <fieldset>
                <legend><?= __('Edit Apartment') ?></legend>
                <?php
                    echo $this->Form->control('apartment_address');
                    echo $this->Form->control('apartment_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
