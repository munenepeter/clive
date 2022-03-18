<?php

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>



<div class="">
    <p class="text-sm font-medium bg-orange-100 p-4 leading-loose">
        <span class="w-full block mb-2 border-b border-orange-200 pb-2 mb-2 text-orange-400 font-bold uppercase tracking-widest">Add Client</span> Please fill in all the fields
    </p>
    <form method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">

        <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
            <div class="col-span-full sm:col-span-3">
                <label for="firstname" class="text-sm">First name</label>
                <input id="firstname" name="first_name" type="text" placeholder="First name" class="w-full rounded-md bg-blue-100 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
            </div>
            <div class="col-span-full sm:col-span-3">
                <label for="lastname" class="text-sm">Last name</label>
                <input id="lastname" name="last_name" type="text" placeholder="Last name" class="w-full rounded-md bg-blue-100 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
            </div>
            <div class="col-span-full sm:col-span-3">
                <label for="username" class="text-sm">Username</label>
                <input id="username" name="username" type="text" placeholder="Username" class="w-full rounded-md bg-blue-100 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
            </div>

            <div class="col-span-full sm:col-span-3">
                <label for="email" class="text-sm">Email</label>
                <input id="email" name="email" type="email" placeholder="Email" class="w-full rounded-md bg-blue-100 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
            </div>
            <div class="col-span-full sm:col-span-3">
                <label for="password" class="text-sm">Password</label>
                <input id="password" name="password" type="password" placeholder="Password" class="w-full rounded-md bg-blue-100 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
            </div>
            <div class="col-span-full sm:col-span-3">
                <label for="role" class="text-sm">Role</label>
                <input id="role" name="role" type="text" placeholder="admin, guest or user" class="w-full rounded-md bg-blue-100 border-2 border-blue-200 w-full p-3 rounded bg-gray-300">
            </div>
            <div class="col-span-full sm:col-span-3">
                <input type="submit" class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer" value="Create User">
            </div>
        </div>


    </form>
</div>