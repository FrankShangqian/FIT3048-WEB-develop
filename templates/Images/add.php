<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 * @var \Cake\Collection\CollectionInterface|string[] $inspections
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
    <div class="column-responsive column-80">
        <div class="images form content">
            <div class="side-nav">
                <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <?= $this->Form->create($image) ?>
            <fieldset>
                <legend><?= __('Add Image') ?></legend>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <?php echo $this->Form->control('inspection_id', ['options' => $inspections, 'class' => 'form-control col-md-6', 'label' => 'Inspection ID']); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $this->Form->control('apartment_id', ['options' => $apartments, 'class' => 'form-control col-md-6', 'label' => 'Apartment ID']); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <?php echo $this->Form->control('image_photo', ['type' => 'file', 'class' => 'form-control', 'label' => 'Address']); ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>