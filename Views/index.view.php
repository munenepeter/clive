<?php include_once 'base.view.php'; ?>

<?php include_once 'sections/nav.view.php'; ?>

<?php if(!auth()) :?>
<section class="py-4 bg-gradient-to-r from-red-50 to-blue-50">
	<div class="container flex flex-col items-center px-4 py-8 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
		<h1 class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-blue-500 text-4xl font-bold leading-none sm:text-5xl p-2">Clive Insurance Agency</h1>
		<p class="px-8 mt-8 mb-12 text-lg">Your mordern insurance partner!</p>
		<div class="flex flex-wrap justify-center">
			<button class=""></button>
			<a href="" class="px-8 py-3 m-2 text-lg font-semibold text-blue-700 hover:text-blue-800 hover:underline">Get Qoute</a>

			<button class="px-8 py-3 m-2 text-lg border bg-blue-700 hover:bg-blue-600 rounded-full text-gray-50 border-gray-100">Learn more</button>
		</div>
	</div>
</section>
<section class="py-8 bg-gradient-to-r from-red-100 to-blue-100">
	<div class="container mx-auto">
		<div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
			<h2 class="text-2xl font-bold leading-none sm:text-4xl">We are Here to Help</h2>
			<p class="px-6 my-4">As a leading insurance Agent, Clive Insurance Agency believes that being accessible to the client is of critical importance. We strive to ensure your peace-of-mind through insurance that takes into cognisance your protection with seamless interaction at a time when it is most needed.</p>
		</div>
		<div class="grid grid-cols-5 p-4 md:p-8">
			<div class="mb-4 flex justify-center px-4 col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start">
				<button class="p-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3  border-blue-400 text-blue-400 font-bold">Kenya Orient</button>
				<button class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-blue-300 text-blue-600 hover:border-blue-400 hover:text-blue-400 hover:font-bold">Monarch</button>
				<button class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-blue-300 text-blue-600 hover:border-blue-400 hover:text-blue-400 hover:font-bold">Canon</button>
				<button class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-blue-300 text-blue-600 hover:border-blue-400 hover:text-blue-400 hover:font-bold">Britam</button>
			</div>
			<div class="grid gap-12 py-4 text-center sm:grid-cols-2 col-span-full md:col-span-4 md:text-left">
				<div class="flex flex-col items-center justify-center space-y-3 md:justify-start md:items-start">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
					</svg>
					<h5 class="text-xl font-semibold">Trucks</h5>
					<p>Superior protection for your truck. We will get you back on your feet in the shortest time possible with our ULTIMATE comprehensive cover now with ENHANCED BENEFITS.</p>
				</div>
				<div class="flex flex-col items-center justify-center space-y-3 md:justify-start md:items-start">
					<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-violet-400">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
					</svg>
					<h5 class="text-xl font-semibold">Matatus & PSVs</h5>
					<p>Excess Free Insurance with Free Countrywide 24 Hour Motor Accident Assistance. EXCESS FREE means, NO extra charges in case you are involved in an accident</p>
				</div>
				<div class="flex flex-col items-center justify-center space-y-3 md:justify-start md:items-start">
					<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-violet-400">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
					</svg>
					<h5 class="text-xl font-semibold">Motor Bikes</h5>
					<p>Excess Free Insurance with Free Countrywide 24 Hour Motor Accident Assistance. EXCESS FREE means, NO extra charges in case you are involved in an accident</p>
				</div>
				<div class="flex flex-col items-center justify-center space-y-3 md:justify-start md:items-start">
					<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-violet-400">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
					</svg>
					<h5 class="text-xl font-semibold">Personal</h5>
					<p>Excess Free Insurance with Free Countrywide 24 Hour Motor Accident Assistance. EXCESS FREE means, NO extra charges in case you are involved in an accident</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-6 bg-gray-800 text-gray-50">
	<div class="container flex flex-col justify-center p-4 mx-auto space-y-8 md:p-10 lg:space-y-0 lg:space-x-12 lg:justify-between lg:flex-row">
		<div class="flex flex-col space-y-4 text-center lg:text-left">
			<h1 class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-blue-500 text-5xl font-bold leading-none">Get free weekly tips</h1>
			<p class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-blue-500 text-lg">Subscribe to my weekly newsletter to find out about the latest and greatest news about just about everything!</p>
		</div>
		<div class="flex flex-row items-center self-center justify-center flex-shrink-0 shadow-md lg:justify-end">
			<div class="flex flex-row">
				<input type="text" placeholder="example@email.com" class="w-3/5 p-3 bg-blue-100 rounded-l-lg sm:w-2/3">
				<button type="button" class="w-2/5 p-3 font-semibold rounded-r-lg sm:w-1/3 bg-purple-400 text-blue-900">Subscribe</button>
			</div>
		</div>
	</div>
</section>
<div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32">
	<div class="flex flex-col justify-between">
		<div class="space-y-2">
			<h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
			<div class="text-gray-400">Have something you want? Text us.</div>
		</div>
		<img src="../static/imgs/doodle.svg" alt="Contact our customer support" class="p-6 h-52 md:h-64">
	</div>
	<form novalidate="" class="space-y-6 ng-untouched ng-pristine ng-valid">
		<div>
			<label for="name" class="text-sm">Full name</label>
			<input id="name" type="text" placeholder="" class="bg-blue-200 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
		</div>
		<div>
			<label for="email" class="text-sm">Email</label>
			<input id="email" type="email" class="bg-blue-200 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
		</div>
		<div>
			<label for="message" class="text-sm">Message</label>
			<textarea id="message" rows="3" class="bg-blue-200 border-2 border-blue-200 w-full p-3 rounded bg-gray-300"></textarea>
		</div>
		<button type="submit" class="w-full p-3 text-sm font-bold tracking-wide uppercase rounded bg-blue-500 text-gray-900">Send Message</button>
	</form>
</div>
<?php endif;?>

<?php include_once 'sections/footer.view.php'; ?>