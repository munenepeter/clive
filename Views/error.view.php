<?php include_once 'base.view.php';?>

<section class="flex items-center h-full p-16 dark:bg-coolGray-900 dark:text-coolGray-100">
	<div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
		<div class="max-w-md text-center">
			<h2 class="mb-8 font-extrabold text-9xl text-red-600">
				<span class="sr-only">Error</span><?= $code;?>
			</h2>
			<p class="text-2xl font-semibold md:text-3xl">Sorry, There seems to be an error!</p>
            <p class="mt-4 mb-8 dark:text-coolGray-400"><?= $message;?></p>
			<!-- <p class="mt-4 mb-8 dark:text-coolGray-400">But dont worry, you can find plenty of other things on our homepage.</p> -->
			<a rel="noopener noreferrer" href="/" class="px-8 py-3 font-semibold rounded bg-blue-400 text-coolGray-900">Back to homepage</a>
		</div>
	</div>
</section>