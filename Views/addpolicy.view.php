<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>



<div class="p-4 bg-white border rounded-lg m-4">
    <p class="text-sm font-medium bg-orange-100 p-4 leading-loose">
        <span class="w-full block mb-2 border-b border-orange-200 pb-2 mb-2 text-orange-400 font-bold uppercase tracking-widest">Add a Policy</span> Please fill in all the fields
    </p>
    <form method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">

        <div class="grid grid-cols-3 gap-2 ">
            <!-- <div class="mt-2">
                <label for="policy_name" class="text-sm">Policy Name</label>
                <input id="policy_name" name="policy_name" type="text" placeholder="Policy Name" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div> -->
            <div class="mt-2">
                <label for="policy_no" class="text-sm">Policy Number</label>
                <input id="policy_no" name="policy_no" type="text" placeholder="Policy Number" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>

            <div class="mt-2">
                <label for="policy_type" class="text-sm">Policy Type</label>
                <div class="relative">
                    <select name="policy_type" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                        <option class="text-gray-900 text-sm rounded-lg">--Policy Type--</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="Comprehensive">Comprehensive</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="Third Party">Third Party</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <label for="policy_price" class="text-sm">Policy Price</label>
                <input id="policy_price" name="policy_price" type="text" placeholder="Policy Price" class="p-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
            </div>
            <div class="mt-2">
                <label for="policy_status" class="text-sm">Policy Status</label>
                <div class="relative">
                    <select name="policy_status" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                        <option class="text-gray-900 text-sm rounded-lg">--Policy Status--</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="On-going">On-going</option>
                        <option class="text-gray-900 text-sm rounded-lg" value="Expired">Expired</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <label for="insurers" class="block mb-2 text-sm font-medium text-gray-900 ">Insurer</label>

                <div class="relative">
                    <select name="insurer" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                        <option class="text-gray-900 text-sm rounded-lg">--Select Insurer --</option>
                        <?php if (!empty($insurers)) : ?>
                            <?php foreach ($insurers as $insurer) : ?>
                                <option class="text-gray-900 text-sm rounded-lg" value="<?= ucwords(strtolower($insurer->id)) ?>"><?= ucwords(strtolower($insurer->name)) ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <label for="client_nat_id" class="text-sm">Client's Name</label>

                <div class="relative">
                    <select name="client_nat_id" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                        <option class="text-gray-900 text-sm rounded-lg">--Select Client--</option>
                        <?php if (!empty($clients)) : ?>
                            <?php foreach ($clients as $client) : ?>
                                <option class="text-gray-900 text-sm rounded-lg" value="<?= ucwords($client->national_id) ?>"><?= ucwords(strtolower($client->full_names)) ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>

            </div>
            <div class="col-span-full sm:col-span-3 mt-2">
                <input type="submit" class="bg-blue-500 text-white text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer" value="Create Policy">
            </div>
            <a href="javascript:history.back()">Go back</a>
        </div>


    </form>
</div>

</body>

</html>