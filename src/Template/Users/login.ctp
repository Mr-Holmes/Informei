	<div class="card" style="width:30rem">
		<div class="container">
			<center></center>
 			<div class="card-body">
				<div class="Form-control">
					<?= $this->Flash->render('auth') ?>
					<?= $this->Form->create() ?>
					<fieldset>
					<legend><?= __('Login:') ?></legend>
					<?= $this->Form->control('username',['class' => 'form-control']) ?>
					<?= $this->Form->control('password',['class' => 'form-control']) ?>
					</fieldset>
					<?= $this->Form->button(__('Login'),['class' => 'form-control btn btn-primary	']); ?>
					<?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
	
