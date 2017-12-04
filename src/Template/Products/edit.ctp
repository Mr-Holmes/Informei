<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Tem certeza que deseja apagar ?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Editar Produto') ?></legend>
        <?php
            echo $this->Form->control('descrição');
            echo $this->Form->control('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
