<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<div class="card" style="width:30rem">
		<div class="container">
	 		<div class="card-body">
				<div class="Form-control">
					<?= $this->Flash->render('auth') ?>
					<?= $this->Form->create() ?>
					<fieldset>
						<legend><?= __('Login:') ?></legend>
						<?= $this->Form->control('username',['class' => 'form-control','data-toggle' => 'tooltip','data-placement' => 'top','title' => 'Nome do Usuario']) ?>
						<?= $this->Form->control('password',['class' => 'form-control','data-toggle' => 'tooltip','data-placement' => 'top','title' => 'Senha']) ?>
					</fieldset>
					<?= $this->Form->button(__('Login'),['class' => 'form-control btn btn-primary	']); ?>
					<?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</div>