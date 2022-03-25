<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>



<div class="p-4 bg-white border rounded-lg m-4">
    <p class="text-sm font-medium bg-orange-100 p-4 leading-loose">
        <span class="w-full block mb-2 border-b border-orange-200 pb-2 mb-2 text-orange-400 font-bold uppercase tracking-widest">Add Insurer</span> Please fill in all the fields
    </p>
    <form method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">

        <div class="grid grid-cols-3 gap-2 ">
            <div class="mt-2">

            <label for="name" class="text-sm">Insurer Name</label>
                <div class="relative">
                    <select name="name" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                        <option class="text-gray-900 text-sm rounded-lg">--Choose Insurer Name--</option>
                        <?php if(!empty($insurers)):?>
                            <?php foreach($insurers as $insurer):?>
                          <option class="text-gray-900 text-sm rounded-lg" value="<?=ucwords(strtolower($insurer))?>"><?=ucwords(strtolower($insurer))?></option>
                        <?php endforeach;?>
                        <?php endif;?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

            </div>
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

</body>
</html>