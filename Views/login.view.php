<?php

use Clive\Core\Mantle\Request;
include_once 'base.view.php'; ?>
<center>
	<div class="mt-28 w-full max-w-md p-8 space-y-3 rounded-xl bg-white border border-blue-700">
		<h1 class="text-2xl font-bold text-center">Login</h1>
		<h2 class="text-xl font-bold text-center">Welcome back!</h2>
		<p class="text-gray-800">Please fill in to continue to your account</p>
		<form novalidate="" action="" method="post" class="space-y-6 ng-untouched ng-pristine ng-valid">
			<div class="space-y-1 text-sm">
				<label for="email" class="block text-left text-gray-800">Email</label>
				<input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-3 rounded-md border border-blue-700 bg-gray-200 text-blue-900" required>
			</div>
			<div class="space-y-1 text-sm">
				<label for="password" class="block text-left text-gray-800">Password</label>
				<input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-3 rounded-md border border-blue-700 bg-gray-200 text-blue-900" required>
				<div class="flex justify-end text-xs text-blue-400 hover:text-blue-600">
					<a rel="noopener noreferrer" href="#">Forgot Password?</a>
				</div>
			</div>
			<button type="submit" name="submit" class="block w-full p-3 text-center rounded-md text-gray-900 bg-blue-400">Sign in</button>
			<p class="text-red-800">
				<?php
				if(isset($e)){
					foreach ($e as $error) {
						echo $error;
					}
				}
				
				?>
			</p>
		</form>
	</div>

</center>