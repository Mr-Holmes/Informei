<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table czellpadding="0" cellspacing="0">
        <thead class="">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->username) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
        </nav>
</div>


<div class="form-control">

    <?= 
    $this->Form->create($product, array('url'=>$this->Html->url(array('controller'=>'Product', 'action'=>'add'))));
    $this->Form->create($product, array('action' => '')) ; ?>
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
