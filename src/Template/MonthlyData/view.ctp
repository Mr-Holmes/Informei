<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthlyData $monthlyData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monthly Data'), ['action' => 'edit', $monthlyData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monthly Data'), ['action' => 'delete', $monthlyData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthlyData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Monthly Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monthly Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monthlyData view large-9 medium-8 columns content">
    <h3><?= h($monthlyData->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $monthlyData->has('user') ? $this->Html->link($monthlyData->user->name, ['controller' => 'Users', 'action' => 'view', $monthlyData->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monthlyData->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= $this->Number->format($monthlyData->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($monthlyData->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gross Profit') ?></th>
            <td><?= $this->Number->format($monthlyData->gross_profit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gross Expense') ?></th>
            <td><?= $this->Number->format($monthlyData->gross_expense) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liquid Total') ?></th>
            <td><?= $this->Number->format($monthlyData->liquid_total) ?></td>
        </tr>
    </table>
</div>
