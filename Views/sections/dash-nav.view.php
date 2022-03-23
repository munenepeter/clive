<?php

use Clive\Core\Mantle\Session; ?>
<nav class="bg-gradient-to-r from-red-50 to-blue-50 -mt-8 -mb-8 ">
    <div class="flex lg:justify-between lg:items-center container m-6 lg:m-8 p-4">
        <a href="/dashboard" class="lg:flex items-start gap-2 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="hover:text-blue-800 hover:border-blue-800 w-8 h-8 text-violet-400">
                <path d="M27.912 7.289l-10.324-5.961c-0.455-0.268-1.002-0.425-1.588-0.425s-1.133 0.158-1.604 0.433l0.015-0.008-10.324 5.961c-0.955 0.561-1.586 1.582-1.588 2.75v11.922c0.002 1.168 0.635 2.189 1.574 2.742l0.016 0.008 10.322 5.961c0.455 0.267 1.004 0.425 1.59 0.425 0.584 0 1.131-0.158 1.602-0.433l-0.014 0.008 10.322-5.961c0.955-0.561 1.586-1.582 1.588-2.75v-11.922c-0.002-1.168-0.633-2.189-1.573-2.742zM27.383 21.961c0 0.389-0.211 0.73-0.526 0.914l-0.004 0.002-10.324 5.961c-0.152 0.088-0.334 0.142-0.53 0.142s-0.377-0.053-0.535-0.145l0.005 0.002-10.324-5.961c-0.319-0.186-0.529-0.527-0.529-0.916v-11.922c0-0.389 0.211-0.73 0.526-0.914l0.004-0.002 10.324-5.961c0.152-0.090 0.334-0.143 0.53-0.143s0.377 0.053 0.535 0.144l-0.006-0.002 10.324 5.961c0.319 0.185 0.529 0.527 0.529 0.916z"></path>
                <path d="M22.094 19.451h-0.758c-0.188 0-0.363 0.049-0.515 0.135l0.006-0.004-4.574 2.512-5.282-3.049v-6.082l5.282-3.051 4.576 2.504c0.146 0.082 0.323 0.131 0.508 0.131h0.758c0.293 0 0.529-0.239 0.529-0.531v-0.716c0-0.2-0.11-0.373-0.271-0.463l-0.004-0.002-5.078-2.777c-0.293-0.164-0.645-0.26-1.015-0.26-0.39 0-0.756 0.106-1.070 0.289l0.010-0.006-5.281 3.049c-0.636 0.375-1.056 1.055-1.059 1.834v6.082c0 0.779 0.422 1.461 1.049 1.828l0.009 0.006 5.281 3.049c0.305 0.178 0.67 0.284 1.061 0.284 0.373 0 0.723-0.098 1.027-0.265l-0.012 0.006 5.080-2.787c0.166-0.091 0.276-0.265 0.276-0.465v-0.716c0-0.293-0.238-0.529-0.529-0.529z"></path>
            </svg>
        </a>
     
        <ul class="flex items-center space-x-4 text-sm font-semibold">
            <li><a href="/users" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Manage Users</a></li>
            <li><a href="/clients" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Manage Clients</a></li>
            <li><a href="/policies" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Manage Policies</a></li>
            <li><a href="/insurers" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Manage Insurers</a></li>

        </ul>
        <ul class="flex items-center gap-6">
            <li>
                <div class="relative" x-data="{ isOpen: false}">
                    <a @click="isOpen = !isOpen" @keydown.escape="isOpen = false" class="flex items-center px-4">
                        <span class="mr-2"> <?= ucfirst(Session::get('user')); ?></span>
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path>
                        </svg>
                    </a>
                    <ul x-show="isOpen" @click.away="isOpen = false" class="absolute font-normal bg-white shadow overflow-hidden bg-gradient-to-r from-red-50 to-blue-50 rounded w-28 border mt-2 py-1 right-0 z-20 divide-y">
                        <?php if (auth()) : ?>
                            <li>
                                <a href="/profile" class="flex items-center px-3 py-3 hover:bg-blue-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="ml-2"><?= "Profile" ?></span>
                                </a>
                            </li>
                            <?php if(ucfirst(Session::get('user')) === "Admin"):?>
                             <li>
                                <a href="/users/adduser" class="flex items-center px-3 py-3 hover:bg-blue-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="ml-2"><?= ucfirst('add user'); ?></span>
                                </a>
                            </li>
                             <?php endif; ?>
                            <li>
                                <a href="/logout" class="flex items-center px-3 py-3 hover:bg-blue-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span class="ml-2">Logout</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (!auth()) : ?>
                            <li>
                                <a href="/login" class="flex items-center px-3 py-3 hover:bg-blue-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                    <span class="ml-2">Login</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</nav>