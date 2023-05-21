<?php

use Clive\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
 ?>


<div class="flex-grow flex flex-col">

    <div class="flex-grow flex flex-col">
        <div class="flex-grow">
            <div class="bg-white">
                <div class="px-2">
                    <div class="pt-4">
                        <div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 xl:p-0 gap-4 xl:gap-6 ">
                                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                                    <h2 class="ml-2 text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                        Everything at a Glance</h2>

                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Policy Type</label>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option>All</option>
                                        <option class="text-gray-900 text-sm rounded-lg" value="Comprehensive">Comprehensive</option>
                                        <option class="text-gray-900 text-sm rounded-lg" value="Third Party">Third Party</option>
                                    </select>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Policy Status</label>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option>All</option>
                                        <option class="text-gray-900 text-sm rounded-lg" value="On-going">On-going</option>
                                        <option class="text-gray-900 text-sm rounded-lg" value="Expired">Expired</option>
                                    </select>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Policy Insurer</label>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option>All</option>
                                        <?php if (!empty($insurers)) : ?>
                                            <?php foreach ($insurers as $insurer) : ?>
                                                <option class="text-gray-900 text-sm rounded-lg" value="<?= ucwords(strtolower($insurer)) ?>"><?= ucwords(strtolower($insurer)) ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Filter</button>

                            <div class="mt-4 border-b border-orange-200"></div>


                            <div class="px-4 py-2 bg-white shadow-full rounded-lg text-gray-700">
                                <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                                    <div class="flex justify-between items-center -mb-2">
                                        <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Policies</h2>
                                        <a href="/policies/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add a Policy</a>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                                            <table class="w-full table-collapse">
                                                <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                                                    <tr>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Policy Number</th>

                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Policy Type</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Policy Price</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Policy Status</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Policy Insurer</th>
                                                        <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="align-baseline">
                                                    <?php if (!empty($policies)) : ?>
                                                        <?php foreach (Paginator::paginate($policies, 5) as $policy) : ?>
                                                            <tr class="group cursor-pointer hover:bg-gray-50">
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $policy->policy_no; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $policy->policy_type; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $policy->policy_price; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $policy->policy_status; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $policy->insurer; ?></td>

                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else : ?>
                                                        <tr class="group cursor-pointer hover:bg-gray-50">
                                                            <td colspan="5" class=" text-center text-sm p-3 border-t border-grey-light whitespace-no-wrap">
                                                                <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                                                    Looks like there are no policies, <a href="/policies/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add </a> or come back when they have been added</h2>
                                                            </td>
                                                        </tr>

                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                            <?php if (!empty($policies)) : ?>
                                                <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                                                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                                        <div>
                                                            <p class="text-sm leading-5 text-gray-700">
                                                                Showing
                                                                <span class="font-medium"><?= Paginator::$start; ?></span>
                                                                to
                                                                <span class="font-medium"><?= Paginator::$end; ?></span>
                                                                of
                                                                <span class="font-medium"><?= count($policies) ?></span>
                                                                results
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="relative z-0 inline-flex shadow-sm">
                                                                <?php Paginator::showLinks($policies); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>