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
                                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                        Everything at a Glance</h2>

                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col">
                                            <p class="text-xs text-gray-600 tracking-wide">Polices</p>
                                            <h3 class="mt-1 text-lg text-blue-500 font-bold"><?= (!empty($allpolicies)) ? count($allpolicies) : 0 ?></h3>
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
                                            <h3 class="mt-1 text-lg text-green-500 font-bold"><?= (!empty($on_going)) ? $on_going : 0 ?></h3>
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
                                            <h3 class="mt-1 text-lg text-yellow-500 font-bold"><?= (!empty($expired_policies)) ? count($expired_policies) : 0 ?></h3>
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
                                                        <?php foreach ($policies as $policy) : ?>
                                                            <tr class="group cursor-pointer hover:bg-gray-50">
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $policy->policy_no; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $policy->policy_type; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $policy->policy_price; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $policy->policy_status; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center"><?= $policy->insurer; ?></td>
                                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible">
                                                                    <div class="md:text-base text-gray-800 flex items-center gap-2">
                                                                        <div x-data="{ open: false }">
                                                                            <a @click.prevent="open = true" href="viewuser?user_id<?= "$policy->id&uname=$policy->policy_no" ?>">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                                </svg>
                                                                            </a>
                                                                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);" x-show="open">
                                                                                <div class="text-left bg-gray-50 h-auto p-2 md:max-w-xl md:p-4 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">

                                                                                    <div class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                                                        <div class="bg-cover h-32" style="background-image: url('https://images.unsplash.com/photo-1522093537031-3ee69e6b1746?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a634781c01d2dd529412c2d1e2224ec0&auto=format&fit=crop&w=2098&q=80');"></div>
                                                                                        <div class="border-b px-4 pb-6 my-2">
                                                                                            <div class="text-center sm:text-left sm:flex mb-4">
                                                                                                <img class="h-32 w-32 rounded-full border-4 border-white -mt-16 mr-4" src="https://ui-avatars.com/api/?background=random&name=<?= $policy->policy_no; ?>" alt="">
                                                                                                <div class="py-2">
                                                                                                    <h3 class="font-bold text-2xl mb-4 text-gray-500 "><?= " $policy->policy_no;" ?></h3>
                                                                                                    <div class="space-y-2">

                                                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                                                                            </svg>
                                                                                                            <span class="font-medium text-gray-500 "><?= ucfirst($policy->policy_no); ?></span>
                                                                                                        </div>
                                                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                                                            </svg>
                                                                                                            <span class="text-blue-700 hover:underline dark:text-blue-500"><?= $policy->policy_type; ?></span>
                                                                                                        </div>
                                                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                                                            </svg>
                                                                                                            <span class="text-sm font-medium text-gray-500 ">Added <?= $policy->created_at; ?></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="sm:px-6 sm:flex sm:flex-row-reverse">

                                                                                            <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div x-data="{ open: false }">
                                                                            <a @click.prevent="open = true" href="edituser?user_id<?= "$policy->id&uname=$policy->policy_no" ?>">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                </svg>
                                                                            </a>
                                                                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center " style="background-color: rgba(0,0,0,.5);" x-show="open">
                                                                                <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded-lg bg-gray-50  mx-2 md:mx-0" @click.away="open = false">
                                                                                    <h2 class="text-2xl text-green-500">Editing <?= " $policy->policy_no"; ?></h2>
                                                                                    <form class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                                                        <div class="flex space-x-4">
                                                                                            <div class="mb-6">
                                                                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Policy Number</label>
                                                                                                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $policy->policy_no"; ?>" required>
                                                                                            </div>
                                                                                            <div class="mb-6">
                                                                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Policy Price</label>
                                                                                                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $policy->policy_price"; ?>" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex space-x-4">
                                                                                            <div class="mb-6">
                                                                                            <div class="mb-6">
                                                                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Policy Status</label>
                                                                                                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $policy->policy_status"; ?>" required>
                                                                                            </div>
                                                                                                <label for="policy_type" class="block mb-2 text-sm font-medium text-gray-900 ">Policy Type</label>
                                                                                                <div class="relative">
                                                                                                    <select name="policy_type" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                                                                                                        <option class="text-gray-900 text-sm rounded-lg"><?= " $policy->policy_type"; ?></option>
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
                                                                                          
                                                                                            
                                                                                        </div>
                                                                                        <div class="mb-6">
                                                                                                <label for="policy_type" class="block mb-2 text-sm font-medium text-gray-900 ">Policy Insurer</label>
                                                                                                <div class="relative">
                                                                                                    <select name="policy_type" class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                                                                                                        <option class="text-gray-900 text-sm rounded-lg"><?= " $policy->insurer"; ?></option>
                                                                                                        <option class="text-gray-900 text-sm rounded-lg" value="Kenya Orient">Kenya Orient</option>
                                                                                                        <option class="text-gray-900 text-sm rounded-lg" value="Monarch">Monarch</option>
                                                                                                        <option class="text-gray-900 text-sm rounded-lg" value="Cannon">Cannon</option>
                                                                                                    </select>
                                                                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </form>

                                                                                    <div class="bg-gray-50  sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                                                                                        <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php if (isAdmin()) : ?>
                                                                            <div x-data="{ open: false }">
                                                                                <a @click.prevent="open = true" href="deleteuser?user_id<?= "$policy->id&uname=$policy->policy_no" ?>">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                                    </svg>
                                                                                </a>
                                                                                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);" x-show="open">
                                                                                    <div class="text-left bg-gray-50 h-auto p-2 md:max-w-xl md:p-2 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
                                                                                        <div class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                                                            <div class="sm:flex sm:items-start">
                                                                                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                                                    <!-- Heroicon name: outline/exclamation -->
                                                                                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Delete <?= ucfirst($policy->policy_no); ?></h3>
                                                                                                    <div class="mt-2">
                                                                                                        <p class="text-sm text-gray-500">Are you sure you want to delete this Policy (<span class="font-medium "><?= ucfirst($policy->policy_no); ?></span>)? All of <span class="font-medium "><?= ucfirst("$policy->policy_no's"); ?></span> data will be permanently removed. This action cannot be undone!</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
                                                                                                <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </td>
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
                                            <?php if (!empty($allpolicies)) : ?>
                                                <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                                                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                                        <div>
                                                            <p class="text-sm leading-5 text-gray-700">
                                                                Showing
                                                                <span class="font-medium"><?= Paginator::$start; ?></span>
                                                                to
                                                                <span class="font-medium"><?= Paginator::$end; ?></span>
                                                                of
                                                                <span class="font-medium"><?= count($allpolicies) ?></span>
                                                                results
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="relative z-0 inline-flex shadow-sm">
                                                                <?php Paginator::showLinks($allpolicies); ?>
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