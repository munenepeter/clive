<?php
include_once 'base.view.php';
include_once 'sections/dash-nav.view.php';
// if(isAdmin()){
//     include_once 'sections/sidebar.view.php';
// }
use Clive\Core\Mantle\Paginator;
?>




<div class="bg-gray-50 py-4">
    <!--  <div class="fixed bottom-4 right-4 xl:right-20">
        <a href="https://www.buymeacoffee.com/ejulfaey" target="_blank" class="transform duration-500 ease-in-out animate-bounce bg-yellow-400 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
            <img class="w-8 h-8 rounded" src="https://img.buymeacoffee.com/api/?name=Ejul&size=300&bg-image=bmc&background=5F7FFF" alt="buymeacoffee">
            Buy Me A Coffee
        </a>
    </div> -->

    <!-- End Nav -->
    <!-- Start Main -->
    <main class="container mx-w-6xl mx-auto pt-4 border rounded-lg px-2 bg-gray-100 ">
        <div class="flex flex-col space-y-4">
            <!-- Start Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                    <h2 class="text-xs ml-2 md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                        Everything at a Glance</h2>
                    <!-- <a href="#" class="text-xs text-gray-800 font-semibold uppercase">More</a> -->
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Clients</p>
                            <h3 class="mt-1 text-lg text-blue-500 font-bold"><?= (!empty($allclients)) ? count($allclients) : 0 ?></h3>
                            <!-- <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span> -->
                        </div>
                        <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Policies</p>
                            <h3 class="mt-1 text-lg text-green-500 font-bold"><?= (!empty($allpolicies)) ? count($allpolicies) : 0 ?></h3>
                            <!-- <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span> -->
                        </div>
                        <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
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
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Insurers</p>
                            <h3 class="mt-1 text-lg text-indigo-500 font-bold"><?= (!empty($allinsurers)) ? count($allinsurers) : 0 ?></h3>
                            <!-- <span class="mt-4 text-xs text-gray-500">Last Updated 1 Month ago</span> -->
                        </div>
                        <div class="bg-indigo-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Second Row -->
            <!-- Start Third Row -->
            <div class="grid grid-cols-1 md:grid-cols-5 items-start px-4 xl:p-0 gap-y-2 md:gap-6">
                <div class="col-span-2 bg-white pt-2 px-4 rounded-xl border border-gray-50 flex flex-col space-y-4">
                    <div class="flex justify-between items-center">
                    <a href="/insurers" class=" font-semibold text-gray-600 font-bold tracking-wide">All Insurers</a>
                        <a href="/insurers/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add Insurer</a>
                    </div>
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-auto">
                            <table class="w-full table-collapse">
                                <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                                    <tr>
                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Name</th>

                                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                                        <!-- <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light">Date added</th> -->
                                    </tr>
                                </thead>
                                <tbody class="align-baseline">
                                    <?php if (!empty($insurers)) : ?>
                                        <?php foreach ($insurers as $insurer) : ?>
                                            <tr class="group cursor-pointer hover:bg-gray-50">
                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $insurer->name; ?></td>
                                                <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $insurer->email; ?></td>
                                                <!-- <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= date("jS F Y ", $insurer->updated_at ); ?></td> -->
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
                            <?php if (!empty($allinsurers)) : ?>
                                <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                        <div>
                                            <p class="text-sm leading-5 text-gray-700">
                                                Showing
                                                <span class="font-medium"><?= Paginator::$start; ?></span>
                                                to
                                                <span class="font-medium"><?= Paginator::$end; ?></span>
                                                of
                                                <span class="font-medium"><?= count($allinsurers) ?></span>
                                                results
                                            </p>
                                        </div>
                                        <div>
                                            <span class="relative z-0 inline-flex shadow-sm">
                                                <?php Paginator::showLinks($allinsurers); ?>
                                            </span>
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
                        <a href="/clients/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add Client</a>
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
                                        <?php foreach ($clients as $client) : ?>
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
                            <?php if (!empty($allclients)) : ?>
                                <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                        <div>
                                            <p class="text-sm leading-5 text-gray-700">
                                                Showing
                                                <span class="font-medium"><?= Paginator::$start; ?></span>
                                                to
                                                <span class="font-medium"><?= Paginator::$end; ?></span>
                                                of
                                                <span class="font-medium"><?= count($allclients) ?></span>
                                                results
                                            </p>
                                        </div>
                                        <div>
                                            <span class="relative z-0 inline-flex shadow-sm">
                                                <?php Paginator::showLinks($allclients); ?>
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
       
        <!-- End Third Row -->
</div>
</main>
</div>
<!-- End Main -->