<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>



<div class="p-4 bg-white border rounded-lg m-4">
    <p class="text-sm font-medium bg-orange-100 p-4 leading-loose">
        <span class="w-full block mb-2 border-b border-orange-200 pb-2 mb-2 text-orange-400 font-bold uppercase tracking-widest">Add Client</span> Please fill in all the fields
    </p>
    <form method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">

        <div class="grid grid-cols-3 gap-2 ">
            <div class="mt-2">
                <label for="names" class="text-sm">Full Names</label>
                <input id="names" name="names" type="text" placeholder="Full Names" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            <div class="mt-2">
                <label for="national_id" class="text-sm">National ID</label>
                <input id="national_id" name="national_id" type="text" placeholder="National ID" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            <div class="mt-2">
                <label for="username" class="text-sm">KRA PIN</label>
                <input id="username" name="username" type="text" placeholder="Username" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            <div class="mt-2">
                <label for="email" class="text-sm">Email</label>
                <input id="email" name="email" type="email" placeholder="Email" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            <div class="mt-2">
                <label for="phone_number" class="text-sm">Phone Number</label>
                <input id="phone_number" name="phone_number" type="text" placeholder="2547 000 000" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            <div class="mt-2">
                <label for="address" class="text-sm">Home Address</label>
                <input id="address" name="address" type="text" placeholder="Ongata Rongai" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            
            <div class="col-span-full sm:col-span-3 mt-2">
                <input type="submit" class="bg-blue-500 text-white text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer" value="Create Client">
            </div>
        </div>


    </form>
</div>

</body>
</html>