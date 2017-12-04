<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(__('Deletar Despesa'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?> </li>
        <li><?= $this->Html->link(__('Editar Despesas'), ['action' => 'edit', $expense->id]) ?> </li>
        <li><?= $this->Html->link(__('Nova Despesa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Despesas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="expenses view large-9 medium-8 columns content">
    <h3><?= h($expense->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($expense->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome de Usuário') ?></th>
          <td><?= $expense->has('user') ? $this->Html->link($expense->user->username, ['controller' => 'Users', 'action' => 'view', $expense->user->id]) : '' ?></
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($expense->valor) ?></td>
        </tr>
    </table>
</div>