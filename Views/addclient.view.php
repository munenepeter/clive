<?php

use Clive\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; ?>



<div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
    <div class="flex justify-between items-center -mb-2">
        <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Clients</h2>
        <a href="/clients/create" class="text-sm text-blue-500 tracking-wide hover:underline">Add Client</a>
    </div>
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
            <table class="w-full table-collapse">
                <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                    <tr>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Full Names</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Onboarding Date</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Policy Due Date</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light text-center">Amount Owing</th>
                        <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light">Actions</th>
                    </tr>
                </thead>
                <tbody class="align-baseline">
                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Dang Van Thanh</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Sep, 11 2018</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">2 days ago</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">$100.00</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible">
                            <p class="md:text-base text-gray-800 flex items-center gap-2">

                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </p>
                        </td>
                    </tr>
                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Hanux Huynh</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Sep, 15 2018</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">6 days ago</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">$450.00</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm">
                            <p class="md:text-base text-gray-800 flex items-center gap-2">

                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </p>
                        </td>
                    </tr>
                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Dinh Ngoc Thien Thao</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Sep, 19 2018</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">10 days ago</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">$600.00</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible">
                            <p class="md:text-base text-gray-800 flex items-center gap-2">

                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </p>
                        </td>
                    </tr>
                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Cao Thai Sang</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Aug, 11 2018</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">1 month ago</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">$150.00</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm">
                            <p class="md:text-base text-gray-800 flex items-center gap-2">

                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </p>
                        </td>
                    </tr>
                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Xuan Hoi Nghi</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Jul, 11 2018</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">2 months ago</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">$700.00</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm group-hover:visible">
                            <p class="md:text-base text-gray-800 flex items-center gap-2">

                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </p>
                        </td>
                    </tr>
                    <tr class="group cursor-pointer hover:bg-grey-lightest">
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Bao Thien Ha</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">Jul, 11 2018</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap">2 months ago</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-center">$650.00</td>
                        <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap text-sm">
                            <p class="md:text-base text-gray-800 flex items-center gap-2">

                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>