<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense[]|\Cake\Collection\CollectionInterface $expenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="expenses index large-9 medium-8 columns content">
    <h3><?= __('Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expense): ?>
            <tr>
                <td><?= $this->Number->format($expense->id) ?></td>
                <td><?= h($expense->description) ?></td>
                <td><?= $this->Number->format($expense->valor) ?></td>
                <td><?= $expense->has('user') ? $this->Html->link($expense->user->username, ['controller' => 'Users', 'action' => 'view', $expense->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?>
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
