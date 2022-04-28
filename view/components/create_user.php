	<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
		<div class="max-w-md w-full space-y-8">
			<div>
				<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Crear Usuario</h2>
			</div>

			<form class="mt-8 space-y-6" action="<?php echo (BASE_URL . DEFAULT_SERVER . ADMIN_ROUTE . CREATE); ?>" method="POST">
				<input type="hidden" name="remember" value="true" />
				<div class="rounded-md shadow-sm -space-y-px">
					<div>
						<label for="email-address" class="">Usuario</label>
						<input id="email-address" name="user" type="text" autocomplete="text" required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Su usuario" />
					</div>
					<div>
						<label for="password" class="">Contraseña</label>
						<input id="password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contraseña" />
					</div>
					<div>

						<label for="type" class="">Tipo de usuario</label>
						<select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Tipo de usuario" name="type">
							<option value="<?php echo (USER_TYPE) ?>" selected><?php echo (USER_TYPE) ?></option>
							<option value="<?php echo (ADMIN_TYPE) ?>"><?php echo (ADMIN_TYPE) ?></option>
						</select>
					</div>
				</div>
				<div>
					<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
						Enviar
					</button>
				</div>
			</form>
		</div>
	</div>
