<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>
<div class="container">
    
    <div class="form-control">
        <?= $this->Form->create($expense) ?>
        <fieldset>
            <legend><?= __('Adicionar despesa') ?></legend>
            <?php
                echo $this->Form->control('description',['class' => 'form-control']);
                echo $this->Form->control('valor',['class' => 'form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class' => ' form-control btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<style type="text/css">
    .container {
    width: 100%;
    padding-right: inherit;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 40px;
}
</style>