<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DayExpense $dayExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Day Expense'), ['action' => 'edit', $dayExpense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Day Expense'), ['action' => 'delete', $dayExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dayExpense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Day Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Day Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dayExpenses view large-9 medium-8 columns content">
    <h3><?= h($dayExpense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Expense') ?></th>
            <td><?= $dayExpense->has('expense') ? $this->Html->link($dayExpense->expense->name, ['controller' => 'Expenses', 'action' => 'view', $dayExpense->expense->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dayExpense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($dayExpense->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date ') ?></th>
            <td><?= h($dayExpense->date_) ?></td>
        </tr>
    </table>
</div>
