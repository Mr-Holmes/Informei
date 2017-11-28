<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DayExpense[]|\Cake\Collection\CollectionInterface $dayExpenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Day Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dayExpenses index large-9 medium-8 columns content">
    <h3><?= __('Day Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expenses_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dayExpenses as $dayExpense): ?>
            <tr>
                <td><?= $this->Number->format($dayExpense->id) ?></td>
                <td><?= h($dayExpense->date_) ?></td>
                <td><?= $dayExpense->has('expense') ? $this->Html->link($dayExpense->expense->name, ['controller' => 'Expenses', 'action' => 'view', $dayExpense->expense->id]) : '' ?></td>
                <td><?= $this->Number->format($dayExpense->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dayExpense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dayExpense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dayExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dayExpense->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
