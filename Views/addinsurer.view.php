<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>


<main class="container mx-w-6xl mx-auto p-4 border rounded-lg px-2 bg-gray-100 ">
<div class="p-4 bg-white border rounded-lg m-4"> 
        <p class="text-sm font-medium bg-orange-100 p-4 leading-loose">
            <span class="w-full block mb-2 border-b border-orange-200 pb-2 mb-2 text-orange-400 font-bold uppercase tracking-widest">Add Insurer</span> Please fill in all the fields
        </p>
        <form method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">

            <div class="grid grid-cols-3 gap-2 ">
                <div class="mt-2">
                    <label for="name" class="text-sm">Insurer Name</label>
                    <input id="name" name="name" type="name" placeholder="Insurer Name" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>

                </div>
                <div class="mt-2">
                    <label for="email" class="text-sm">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                </div>
                <div class="mt-2">
                    <label for="business_no" class="text-sm">Business Number</label>
                    <input id="business_no" name="business_no" type="text" placeholder="Business Number" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                </div>
                <div class="col-span-full sm:col-span-3 mt-2">
                    <input type="submit" class="bg-blue-500 text-white text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer" value="Create Insurer">
                </div>
            </div> 
        </form>

</div>
</main>

</body>

</html>