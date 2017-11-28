<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DayExpense $dayExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dayExpense->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dayExpense->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Day Expenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dayExpenses form large-9 medium-8 columns content">
    <?= $this->Form->create($dayExpense) ?>
    <fieldset>
        <legend><?= __('Edit Day Expense') ?></legend>
        <?php
            echo $this->Form->control('date_');
            echo $this->Form->control('expenses_id', ['options' => $expenses]);
            echo $this->Form->control('quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
