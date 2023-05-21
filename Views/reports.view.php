<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
if (isAdmin()) {
    
}

use Clive\Core\Mantle\Paginator; ?>

<div class="m-2">


    <div class="grid grid-cols-1 md:grid-cols-6 items-start px-4 xl:p-0 gap-y-2 md:gap-4">
        <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
            <div class="flex justify-between items-center -mb-2">
                <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Policies</h2>
                <a href="/reports/policies" class="text-sm text-blue-500 tracking-wide hover:underline">More</a>
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
                               
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>


        </div>

        <div class="col-span-3 bg-white pt-2 px-4  rounded-xl border border-gray-50 flex flex-col space-y-6">
            <div class="flex justify-between items-center -mb-2">
                <a href="/clients" class=" font-semibold text-gray-600 font-bold tracking-wide">All Clients</a>
                <a href="/reports/clients" class="text-sm text-blue-500 tracking-wide hover:underline">More</a>
            </div>
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="w-full table-collapse">
                        <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                            <tr>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Full Names</th>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">National ID</th>
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
                              
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>



        <div class="col-span-3 bg-white pt-2 px-4 rounded-xl border border-gray-50 flex flex-col space-y-4">
            <div class="flex justify-between items-center">
                <a href="/insurers" class=" font-semibold text-gray-600 font-bold tracking-wide">All Insurers</a>
                <a href="/reports/insurers" class="text-sm text-blue-500 tracking-wide hover:underline">More</a>
            </div>
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-auto">
                    <table class="w-full table-collapse">
                        <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                            <tr>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Name</th>

                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                                <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light">Date added</th>
                            </tr>
                        </thead>
                        <tbody class="align-baseline">
                            <?php if (!empty($insurers)) : ?>
                                <?php foreach (Paginator::paginate($insurers, 5) as $insurer) : ?>
                                    <tr class="group cursor-pointer hover:bg-gray-50">
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= strlen($insurer->name) > 7 ? substr($insurer->name, 0, 7) . '' : $insurer->name;  ?></td>
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $insurer->email; ?></td>
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= date("jS F Y ", strtotime($insurer->updated_at)); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr class="group cursor-pointer hover:bg-gray-50">
                                    <td colspan="5" class=" text-center text-sm p-3 border-t border-grey-light whitespace-no-wrap">
                                        <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                            Looks like there are no insurers, <a href="/insurers/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add </a> or come back when they have been added</h2>
                                    </td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php if (!empty($insurers)) : ?>
                        <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm leading-5 text-gray-700">
                                        Showing
                                        <span class="font-medium"><?= Paginator::$start; ?></span>
                                        to
                                        <span class="font-medium"><?= Paginator::$end; ?></span>
                                        of
                                        <span class="font-medium"><?= count($insurers) ?></span>
                                        results
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
            <div class="flex justify-between items-center -mb-2">
                <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Users</h2>
                <a href="/reports/user" class="text-sm text-blue-500 tracking-wide hover:underline">More</a>
            </div>
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="w-full table-collapse">
                        <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                            <tr>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Names</th>

                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Username</th>
                                <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light text-center">Role</th>
                                <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light"></th>
                            </tr>
                        </thead>
                        <tbody class="align-baseline">
                            <?php if (!empty($users)) : ?>
                                <?php foreach (Paginator::paginate($users, 5) as $user) : ?>
                                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->full_names; ?></td>
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->email; ?></td>
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->username; ?></td>
                                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $user->role; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr class="group cursor-pointer hover:bg-gray-50">
                                    <td colspan="5" class=" text-center text-sm p-3 border-t border-grey-light whitespace-no-wrap">
                                        <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                            Looks like there are no users, <a href="/users/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add </a> or come back when they have been added</h2>
                                    </td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php if (!empty($users)) : ?>
                        <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm leading-5 text-gray-700">
                                        Showing
                                        <span class="font-medium"><?= Paginator::$start; ?></span>
                                        to
                                        <span class="font-medium"><?= Paginator::$end; ?></span>
                                        of
                                        <span class="font-medium"><?= count($users) ?></span>
                                        results
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>


        </div>

    </div>

</div>