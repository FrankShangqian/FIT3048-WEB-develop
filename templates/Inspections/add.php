<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inspection $inspection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $apartments
 */
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add User</title>
    <?= $this->Html->css(['styles']) ?>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<div class="col-lg-6" style="float:none;margin:auto;">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inspections form content">
            <?= $this->Form->create($inspection) ?>
            <fieldset>
                <legend><?= __('Add Inspection') ?></legend>
                <?php
                    echo $this->Form->control('inspection_datetime', ['class' => 'form-control col-md-6', 'label' => 'Date of Inspection']);
                    echo $this->Form->control('inspection_description', ['class' => 'form-control col-md-6', 'label' => 'Inspection Description']);
                    echo $this->Form->control('user_id', ['options' => $users,'class' => 'form-control col-md-6', 'label' => 'Contractor ID']);
                    echo $this->Form->control('apartment_id', ['options' => $apartments, 'class' => 'form-control col-md-6', 'label' => 'Apartment ID']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-secondary btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
