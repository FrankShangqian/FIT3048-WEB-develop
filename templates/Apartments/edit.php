<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apartment $apartment
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
        <div class="apartments form content">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $apartment->apartment_id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $apartment->apartment_id), 'class' => 'side-nav-item']
                ) ?>
                <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <?= $this->Form->create($apartment) ?>
            <fieldset>
                <legend><?= __('Edit Apartment') ?></legend>
                <div class="mb-3">
                    <?php echo $this->Form->control('apartment_address', ['class' => 'form-control col-md-6', 'label' => 'Address']); ?>
                </div>
                <div class="mb-3">
                    <?php echo $this->Form->control('apartment_type', [
                        'class' => 'form-control col-md-6', 'label' => 'Room Type',
                        'options' => ['Studio' => 'Studio', '1B1B' => '1B1B', '2B1B' => '2B1B', '2B2B' => '2B2B']
                    ]); ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit') , ['class' => 'btn btn-primary btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>