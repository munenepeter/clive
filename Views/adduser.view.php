<?php include_once 'base.view.php'; ?>

<?php include_once 'sections/dash-nav.view.php'; ?>


<section class="p-4 bg-gray-50">
    <div class="fixed bottom-4 right-4 xl:right-20">
    <?php
        if (isset($e)) {
            foreach ($e as $error) {
                echo $error;
            }
        }
        ?>
    </div>
    <div class="m-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 px-4 xl:p-0 gap-6 xl:gap-6">
        <div class="bg-white p-6 rounded-xl shadow border border-gray-50">
            <div class="flex justify-between items-start">
                <div class="flex flex-col">
                    <p class="text-md text-gray-600 tracking-wide">Active Users</p>
                    <h3 class="mt-1 text-lg text-blue-500 font-bold">3</h3>
                    <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span>
                </div>
                <div class="bg-blue-500 p-2 md:p-2 xl:p-4 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 shadow rounded-xl border border-gray-50">
            <div class="flex justify-between items-start">
                <div class="flex flex-col">
                    <p class="text-md text-gray-600 tracking-wide">Inactive Users</p>
                    <h3 class="mt-1 text-lg text-red-500 font-bold">1</h3>
                    <span class="mt-4 text-xs text-gray-500">Last Updated 2 Hours ago</span>
                </div>
                <div class="bg-red-500 p-2 md:p-2 xl:p-4 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-12 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <form novalidate="" action="" method="post" class="bg-white container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-md ">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">User information</p>
                <p class="text-xs">To crate a new user please fill in all the details correctly</p>
            </div>
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
                <!-- first_name, last_name, username, email, password, role -->
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
        </fieldset>

    </form>
</section>