<?php

use Clive\Models\Insurer;
use Clive\Models\Client;
use Clive\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
if (isAdmin()) {
    include_once 'sections/sidebar.view.php';
} ?>


<div class="flex-grow flex flex-col">

    <div class="flex-grow flex flex-col">
        <div class="flex-grow">
            <div class="bg-white">
                <div class="px-2">
                    <div class="pt-4">
                        <div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 xl:p-0 gap-4 xl:gap-6 ">
                                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                        Everything at a Glance</h2>

                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">All Clients</p>
                                            <h3 class="mt-1 text-lg text-blue-500 font-bold"><?= count(Client::all()); ?></h3>
                                            <!-- <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span> -->
                                        </div>
                                        <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">Insurers</p>
                                            <h3 class="mt-1 text-lg text-green-500 font-bold"><?= count(Insurer::all()); ?></h3>
                                            <!-- <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span> -->
                                        </div>
                                        <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">Expired Policies</p>
                                            <h3 class="mt-1 text-lg text-yellow-500 font-bold"><?= (!empty($expired)) ? $expired : 0 ?></h3>
                                            <!-- <span class="mt-4 text-xs text-gray-600">Last Updated 4 Mins ago</span> -->
                                        </div>
                                        <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 border-b border-orange-200"></div>


                            <div class="px-4 py-2 bg-white shadow-full rounded-lg text-gray-700">
                                <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                                    <div class="flex justify-between items-center -mb-2">
                                        <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Clients</h2>
                                        <a href="/clients/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add a Client</a>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                                            <table class="w-full table-collapse">
                                                <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                                                    <tr>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Full Names</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">National ID</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">KRA PIN</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Phone Number</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Address</th>
                                                        <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="align-baseline">
                                                    <?php if (!empty($clients)) : ?>
                                                        <?php foreach (Paginator::paginate($clients, 5) as $client) : ?>
                                                            <tr class="group cursor-pointer hover:bg-gray-50">
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $client->full_names; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $client->email; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $client->national_id; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $client->kra_pin; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $client->phone_number; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $client->home_address; ?></td>
                                                                
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else : ?>
                                                        <tr class="group cursor-pointer hover:bg-gray-50">
                                                            <td colspan="5" class=" text-center text-sm p-3 border-t border-grey-light whitespace-no-wrap">
                                                                <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                                                    Looks like there are no clients, <a href="/clients/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add </a> or come back when they have been added</h2>
                                                            </td>
                                                        </tr>

                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                            <?php if (!empty($clients)) : ?>
                                                <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                                                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                                        <div>
                                                            <p class="text-sm leading-5 text-gray-700">
                                                                Showing
                                                                <span class="font-medium"><?= Paginator::$start; ?></span>
                                                                to
                                                                <span class="font-medium"><?= Paginator::$end; ?></span>
                                                                of
                                                                <span class="font-medium"><?= count($clients) ?></span>
                                                                results
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="relative z-0 inline-flex shadow-sm">
                                                                <?php Paginator::showLinks($clients); ?>
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
           
            <!---->
        </div>
    </div>
</div>
</div>
</div>