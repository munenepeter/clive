<?php

use Clive\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
include_once 'sections/sidebar.view.php'; ?>


<div class="flex-grow flex flex-col">

    <div class="flex-grow flex flex-col">
        <div class="flex-grow">
            <div class="bg-white">
                <div class="px-2">
                    <div class="pt-4">
                        <div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 xl:p-0 gap-4 xl:gap-6 ">

                                <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider text-center">
                                    Everything at a Glance</h2>


                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">Clients</p>
                                            <h3 class="mt-1 text-lg text-blue-500 font-bold">818</h3>
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
                                            <p class="text-xs text-gray-600 tracking-wide">On-going Policies</p>
                                            <h3 class="mt-1 text-lg text-green-500 font-bold">18</h3>
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
                                            <h3 class="mt-1 text-lg text-yellow-500 font-bold">23</h3>
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
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Names</th>

                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Username</th>
                                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light text-center">Role</th>
                                                        <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="align-baseline">
                                                    <?php foreach ($users as $user) : ?>
                                                        <tr class="group cursor-pointer hover:bg-grey-lightest">
                                                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->first_name . ' ' . $user->last_name; ?></td>
                                                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->email; ?></td>
                                                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->username; ?></td>
                                                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $user->role; ?></td>
                                                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible">
                                                                <p class="md:text-base text-gray-800 flex items-center gap-2">

                                                                    <a @click="showModal = true" href="viewuser?user_id<?= "$user->user_id&uname=$user->username" ?>"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                        </svg>
                                                                    </a>

                                                                    <a href="edituser?user_id<?= "$user->user_id&uname=$user->username" ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                    </a>
                                                                    <?php if (isAdmin()) : ?>
                                                                        <a href="deleteuser?user_id<?= "$user->user_id&uname=$user->username" ?>">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                            </svg>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                            <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                                    <div>
                                                        <p class="text-sm leading-5 text-gray-700">
                                                            Showing
                                                            <span class="font-medium"><?= Paginator::$start; ?></span>
                                                            to
                                                            <span class="font-medium"><?= Paginator::$end; ?></span>
                                                            of
                                                            <span class="font-medium"><?= count($allusers) ?></span>
                                                            results
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class="relative z-0 inline-flex shadow-sm">
                                                            <?php Paginator::showLinks($allusers); ?>
                                                        </span>
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
            <div class="px-12 py-8 mx-auto max-w-4xl">


                <div class="mt-4">

                </div>
            </div>
            <!---->
        </div>
    </div>
</div>
</div>
</div>