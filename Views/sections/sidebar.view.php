<div class="font-sans text-gray-900 antialiased">
    <div class="h-screen flex bg-gray-200">

        <div class="flex-shrink-0 w-64 bg-gray-900">
            <a href="#">
                <div class="flex items-center h-16 px-4 bg-gray-900 text-xl text-white font-medium">

                    <svg xmlns="http://www.w3.org/2000/svg" class="relative w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>

                    <div class="ml-2" style="padding-top: 2px;">Admin</div>
                </div>
            </a>
            <div>
                <div class="px-2 py-2">
                    <div>
                        <!---->
                    </div>
                </div>
                <div class="px-6 py-6 text-white ">
                    <ul class="space-y-6">
                        <li> <a href="/clients" class="hover:underline p-2 ">
                                Clients
                            </a>
                        </li>
                        <li> <a href="/users" class="hover:underline p-2 ">
                                Users
                            </a>
                        </li>
                        <li> <a href="/policies" class="hover:underline p-2 ">
                              Policies
                            </a>
                        </li>
                        <li> <a href="/reports" class="hover:underline p-2 ">
                              Reports
                            </a>
                        </li>
                    </ul>


                </div>
                <!---->
                <div class="px-6 py-6 border-t border-gray-700">
                    <h4 class="text-sm text-gray-600 uppercase font-bold tracking-widest">
                        More
                    </h4>
                    <ul class="mt-3 text-white">
                        <li class="mt-3">
                            <a href="#" class="hover:underline">
                                Client Activity
                            </a>
                        </li>  
                      <li class="mt-3">
                            <a href="clients/invoices" class="hover:underline">
                                Invoices
                            </a>
                        </li>

                        <?php if (isAdmin()) : ?>

                            <li class="mt-3">
                                <a href="database" class="hover:underline">
                                    Query Database
                                </a>
                            </li> 
                            <li class="mt-3">
                                <a href="/system_log" class="hover:underline">
                                    System Logs
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>