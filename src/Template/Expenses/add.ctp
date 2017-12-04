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
            <legend><?= __('Adicionar Despesa') ?></legend>
            <?php
                echo $this->Form->control('description',['class' => 'form-control']);
                echo $this->Form->control('valor',['class' => 'form-control']);
                $expense->username = $this->request->session()->read('Auth.User');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar'),['class' => ' form-control btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<style type="text/css">
    .container 
    {
        width: 100%;
        padding-right: inherit;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 40px;
}
</style>


