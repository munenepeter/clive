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
                                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                                    <h2 class="ml-2 text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                        Everything at a Glance Users</h2>

                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role of User</label>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option>All</option>
                                        <option>Admin</option>
                                        <option>Guest</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">Admins</p>
                                            <h3 class="mt-1 text-lg text-green-500 font-bold"><?= (!empty($admins)) ? $admins : 0 ?></h3>
                                            <!-- <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span> -->
                                        </div>
                                        <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">Regular users</p>
                                            <h3 class="mt-1 text-lg text-yellow-500 font-bold"><?= (!empty($regular_users)) ? $regular_users : 0 ?></h3>
                                            <!-- <span class="mt-4 text-xs text-gray-600">Last Updated 4 Mins ago</span> -->
                                        </div>
                                        <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 border-b border-orange-200"></div>


                            <div class="px-4 py-2 bg-white shadow-full rounded-lg text-gray-700">
                                <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                                    <div class="flex justify-between items-center -mb-2">
                                        <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Users</h2>
                                        <a href="/users/adduser" class="text-sm text-blue-500 tracking-wide hover:underline">Add a user</a>
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
                                                        <div>
                                                            <span class="relative z-0 inline-flex shadow-sm">
                                                                <?php Paginator::showLinks($users); ?>
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