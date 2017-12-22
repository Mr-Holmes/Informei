<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthlyData $monthlyData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monthlyData->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monthlyData->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Monthly Data'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monthlyData form large-9 medium-8 columns content">
    <?= $this->Form->create($monthlyData) ?>
    <fieldset>
        <legend><?= __('Edit Monthly Data') ?></legend>
        <?php
            echo $this->Form->control('month');
            echo $this->Form->control('year');
            echo $this->Form->control('gross_profit');
            echo $this->Form->control('gross_expense');
            echo $this->Form->control('liquid_total');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
