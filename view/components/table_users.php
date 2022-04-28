<div class="w-full flex  justify-center">

	<h1 class="text-blue-500 text-align-center">Lista de Usuarios</h1>
</div>
<table class="min-w-full divide-y divide-gray-200">
	<thead class="bg-gray-50">
		<tr>
			<th wire:click="order('id')" scope="col" class="w-24 px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
				Usuario
			</th>
			<th wire:click="order('title')" scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
				Contraseña
			</th>
			<th wire:click="order('description')" scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase cursor-pointer">
				Tipo
			</th>
		</tr>
	</thead>
	<tbody class="bg-white divide-y divide-gray-200">

		<?php foreach ($users as $user_item) : ?>

			<tr>
				<td class="px-6 py-4">
					<div class="text-sm text-gray-900"><?php echo ($user_item->user) ?></div>
				</td>
				<td class="px-6 py-4">
					<div class="text-sm text-gray-900"><?php echo ($user_item->password) ?></div>
				</td>
				<td class="px-6 py-4">
					<div class="text-sm text-gray-500"><?php echo ($user_item->type) ?></div>
				</td>

			</tr>

		<?php endforeach; ?>
	</tbody>
</table>
