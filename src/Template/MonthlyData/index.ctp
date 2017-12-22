<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthlyData[]|\Cake\Collection\CollectionInterface $monthlyData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Monthly Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monthlyData index large-9 medium-8 columns content">
    <h3><?= __('Monthly Data') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gross_profit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gross_expense') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liquid_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monthlyData as $monthlyData): ?>
            <tr>
                <td><?= $this->Number->format($monthlyData->id) ?></td>
                <td><?= $this->Number->format($monthlyData->month) ?></td>
                <td><?= $this->Number->format($monthlyData->year) ?></td>
                <td><?= $this->Number->format($monthlyData->gross_profit) ?></td>
                <td><?= $this->Number->format($monthlyData->gross_expense) ?></td>
                <td><?= $this->Number->format($monthlyData->liquid_total) ?></td>
                <td><?= $monthlyData->has('user') ? $this->Html->link($monthlyData->user->name, ['controller' => 'Users', 'action' => 'view', $monthlyData->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $monthlyData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monthlyData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monthlyData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthlyData->id)]) ?>
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
