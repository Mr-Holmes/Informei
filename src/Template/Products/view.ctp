<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(__('Deletar Produto'), ['action' => 'delete', $product->id], ['confirm' => __('Tem certeza que deseja apagar ?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($product->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= $product->has('user') ? $this->Html->link($product->user->username, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($product->valor) ?></td>
        </tr>
    </table>
</div>