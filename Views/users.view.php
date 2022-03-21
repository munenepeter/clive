<?php

use Clive\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>



<div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
    <div class="flex justify-between items-center -mb-2">
        <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Users</h2>
        <a href="/users/adduser" class="text-sm text-blue-500 tracking-wide hover:underline">Add User</a>
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
                                <div class="md:text-base text-gray-800 flex items-center gap-2">
                                    <div x-data="{ open: false }">
                                        <a @click.prevent="open = true" href="viewuser?user_id<?= "$user->user_id&uname=$user->username" ?>">
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
                                                            <img class="h-32 w-32 rounded-full border-4 border-white -mt-16 mr-4" src="https://ui-avatars.com/api/?background=random&name=<?= " $user->first_name + $user->last_name"; ?>" alt="">
                                                            <div class="py-2">
                                                                <h3 class="font-bold text-2xl mb-4 text-gray-500 "><?= " $user->first_name $user->last_name"; ?></h3>
                                                                <div class="space-y-2">
                                                                    <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                        </svg>
                                                                        <span class="font-medium text-gray-500 "><?= ucfirst($user->role); ?></span>
                                                                    </div>
                                                                    <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                                        </svg>
                                                                        <span class="font-medium text-gray-500 "><?= ucfirst($user->username); ?></span>
                                                                    </div>
                                                                    <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                        </svg>
                                                                        <span class="text-blue-700 hover:underline dark:text-blue-500"><?= $user->email; ?></span>
                                                                    </div>
                                                                    <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                        </svg>
                                                                        <span class="text-sm font-medium text-gray-500 ">Joined <?= date("jS M Y h:i:s"); ?></span>
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
                                        <a @click.prevent="open = true" href="edituser?user_id<?= "$user->user_id&uname=$user->username" ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center " style="background-color: rgba(0,0,0,.5);" x-show="open">
                                            <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded-lg bg-gray-50  mx-2 md:mx-0" @click.away="open = false">
                                                <h2 class="text-2xl text-green-500">Editing <?= " $user->first_name"; ?></h2>
                                                <form class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                    <div class="flex space-x-4">
                                                        <div class="mb-6">
                                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Firstname</label>
                                                            <input type="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $user->first_name"; ?>" required>
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name</label>
                                                            <input type="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $user->last_name"; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="flex space-x-4">
                                                        <div class="mb-6">
                                                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                                                            <input type="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $user->username"; ?>" required>
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $user->email"; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-6">
                                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>

                                                        <div class="relative">
                                                            <select class="block appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                                                <option class="text-gray-900 text-sm rounded-lg"><?= " $user->role"; ?></option>
                                                                <option class="text-gray-900 text-sm rounded-lg">

                                                                    Admin
                                                                </option>
                                                                <option class="text-gray-900 text-sm rounded-lg">User</option>
                                                                <option class="text-gray-900 text-sm rounded-lg">Guest</option>
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
                                    <?php if (!isAdmin()) : ?>
                                        <div x-data="{ open: false }">
                                            <a @click.prevent="open = true" href="deleteuser?user_id<?= "$user->user_id&uname=$user->username" ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);" x-show="open">
                                                <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
                                                    <h2 class="text-2xl text-red-500">Deleting a User</h2>
                                                    <p class="mt-6">Now will be attemptin gto delete user wit an ID of <?= $user->user_id; ?> </p>
                                                    <div class="flex justify-center mt-8">
                                                        <button class="bg-red-700 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none" @click="open = false">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <div class="border border-t bg-white px-4 py-3 flex items-center justify-between sm:px-6">

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