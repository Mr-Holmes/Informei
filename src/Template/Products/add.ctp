<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="form-control">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Adicionar Produto') ?></legend>
        <?php
            echo $this->Form->control('description',['class' => 'form-control']);
            echo $this->Form->control('valor',['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' => 'form-control btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>