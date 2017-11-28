<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DayProduct $dayProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Day Product'), ['action' => 'edit', $dayProduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Day Product'), ['action' => 'delete', $dayProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dayProduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Day Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Day Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dayProducts view large-9 medium-8 columns content">
    <h3><?= h($dayProduct->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $dayProduct->has('product') ? $this->Html->link($dayProduct->product->name, ['controller' => 'Products', 'action' => 'view', $dayProduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dayProduct->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($dayProduct->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date ') ?></th>
            <td><?= h($dayProduct->date_) ?></td>
        </tr>
    </table>
</div>
