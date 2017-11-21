<?php $__env->startSection('content'); ?>
<h1>Veja, edite e delete as informações feitas</h1>
<hr>
<?php if(!$coops->isEmpty()): ?>
<table class="table table-bordered table-hover">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Endereço</th>
		<th>Telefone</th>
	</tr>
<?php $__currentLoopData = $coops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($coop->id); ?></td>
		<td><?php echo e($coop->nome); ?></td>
		<td><?php echo e($coop->endereco); ?></td>
		<td><?php echo e($coop->telefone); ?></td>
		<td><a href="/admin/coop/edit=<?php echo e($coop->id); ?>" class="btn btn-warning btn-sm">Editar</a></td>
		<td><a href="/admin/coop/delete=<?php echo e($coop->id); ?>" class="btn btn-danger btn-sm">Deletar</a></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php else: ?>
	<h3>Não há nenhum registro para editar</h3>
<?php endif; ?>

<?php if(Session::has('success')): ?>
	<p class="alert alert-success">Cooperativa apagada com sucesso</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.template.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>