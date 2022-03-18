<?php

use Clive\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/dash-nav.view.php'; 
include_once 'sections/sidebar.view.php';?>


<div class="flex-grow flex flex-col">
    
    <div class="flex-grow flex flex-col">
      <div class="flex-grow">
        <div class="bg-white">
          <div class="px-12">
            <div class="flex justify-between py-6">
              <div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                        Everything at a Glance</h2>
                    <a href="#" class="text-xs text-gray-800 font-semibold uppercase">More</a>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Clients</p>
                            <h3 class="mt-1 text-lg text-blue-500 font-bold">818</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span>
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
                            <p class="text-xs text-gray-600 tracking-wide">On-going Policies</p>
                            <h3 class="mt-1 text-lg text-green-500 font-bold">18</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Updated 3 Hours ago</span>
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
                            <h3 class="mt-1 text-lg text-yellow-500 font-bold">23</h3>
                            <span class="mt-4 text-xs text-gray-600">Last Updated 4 Mins ago</span>
                        </div>
                        <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 w-auto h-8 md:h-6 xl:h-8 object-cover" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                        </div>
                    </div>
                </div>
                
            </div>
                <div class="flex mt-3">
                  <p class="text-sm font-medium bg-orange-100 p-4 leading-loose">
                    <span class="w-full block mb-2 border-b border-orange-200 pb-2 mb-2 text-orange-400 font-bold uppercase tracking-widest">System Update</span> The ability to add numbers to the BobRTC phonebook requires an XP score above 785XP and your account must be active for an extended period of time. Contact a TLS, Scammer.info or BobRTC moderator for more details.</p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <div class="px-12 py-8 mx-auto max-w-4xl">
          <div>
            <div class="flex items-baseline justify-between">
              <div>
                <h2 class="text-lg">
                  Welcome To BobRTC!
                </h2>
                <div class="mt-2 text-sm text-gray-700">
                  Take your first steps into a serverless future.
                </div>
              </div>
              <!---->
            </div>
                            <div class="mt-4">
              <div class="px-6 py-4 bg-white shadow-md rounded-lg flex justify-between">
                <div class="flex justify-between text-sm font-medium uppercase tracking-wide">
                    <svg
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="-mt-1 mr-4 h-6 w-6">
                      <path
                        d="M5 8h14a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1zm1 2v7h12v-7H6z"
                        class="fill-current text-gray-400"
                      ></path>
                      <path
                        d="M6 12a4 4 0 0 1-4-4 1 1 0 0 1 .1-.45l2-4A1 1 0 0 1 5 3h14a1 1 0 0 1 .9.55l2 4c.06.14.1.3.1.45a4 4 0 0 1-7 2.65 3.99 3.99 0 0 1-6 0A3.99 3.99 0 0 1 6 12z"
                        class="fill-current text-gray-600"
                      ></path>
                    
                    </svg>
                  <p>IRS Scam</p>
                              </div>
                    <div
                      class="ml-3 font-semibold text-sm text-gray-600 uppercase tracking-wider"
                    >
                      <a href="#" class=""
                         >+1 (844) 483-4444</a>
                    </div>
                  </div>
                
                              </div>
            </div>
            <div class="mt-4">
              <div class="px-6 py-4 bg-white shadow-md rounded-lg">
                <div>
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="h-6 w-6"
                    >
                      <path
                        d="M5 8h14a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1zm1 2v7h12v-7H6z"
                        class="fill-current text-gray-400"
                      ></path>
                      <path
                        d="M6 12a4 4 0 0 1-4-4 1 1 0 0 1 .1-.45l2-4A1 1 0 0 1 5 3h14a1 1 0 0 1 .9.55l2 4c.06.14.1.3.1.45a4 4 0 0 1-7 2.65 3.99 3.99 0 0 1-6 0A3.99 3.99 0 0 1 6 12z"
                        class="fill-current text-gray-600"
                      ></path>
                    </svg>
                    <div
                      class="ml-3 font-semibold text-sm text-gray-600 uppercase tracking-wider"
                    >
                      <a href="/app/account/billing" class=""
                        >Choose A Billing Plan</a
                      >
                    </div>
                  </div>
                  <div class="mt-3 mb-8 max-w-2xl text-sm text-gray-700">
                    Before creating your first project, you will need to
                    subscribe to a billing plan. It's one, simple monthly
                    fee, regardless of how many projects, deployments,
                    teams, or team members you have.
                    <strong
                      >To choose a plan, visit your
                      <a href="#" class="underline hover:text-gray-900"
                        >account settings</a
                      >.</strong
                    >
                  </div>
                </div>
                <div>
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="h-6 w-6"
                    >
                      <path
                        d="M8.23 10.77a7.01 7.01 0 1 1 5 5L11 18H9v2H7v2.03H2V17l6.23-6.23zM17 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                        class="fill-current text-gray-400"
                      ></path>
                      <path
                        d="M6.2 18.7a1 1 0 1 1-1.4-1.4l4-4a1 1 0 1 1 1.4 1.4l-4 4z"
                        class="fill-current text-gray-600"
                      ></path>
                    </svg>
                    <div
                      class="ml-3 font-semibold text-sm text-gray-600 uppercase tracking-wider"
                    >
                      <a href="/app/team/settings/cloud-providers" class=""
                        >Connect An AWS Account</a
                      >
                    </div>
                  </div>
                  <div class="mt-3 mb-8 max-w-2xl text-sm text-gray-700">
                    To get started,
                    <a
                      href="/app/team/settings/cloud-providers"
                      class="font-bold underline hover:text-gray-900"
                      >you'll need to link an AWS account</a
                    >. Once connected, we will be able to provision and
                    manage your serverless infrastructure while you focus on
                    building something amazing. To learn more about
                    retrieving your AWS credentials, check out
                    <a
                      href="https://docs.test.build/1.0/introduction.html#linking-with-aws"
                      target="_blank"
                      class="font-bold underline"
                      >our documentation</a
                    >.
                  </div>
                </div>
                <div class="flex items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="h-6 w-6"
                  >
                    <path
                      d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"
                      class="fill-current text-gray-400"
                    ></path>
                    <polygon
                      points="21 6 12 10 12 22 21 18"
                      class="fill-current text-gray-600"
                    ></polygon>
                  </svg>
                  <div
                    class="ml-3 font-semibold text-sm text-gray-600 uppercase tracking-wider"
                  >
                    Create Your First Project
                  </div>
                </div>
                <div class="mt-3 max-w-2xl text-sm text-gray-700">
                  It is organized around projects. Projects can contain as
                  many environments as you wish and each environment
                  receives its very own URL. To create a project,
                  <a
                    href="https://docs.test.build/1.0/introduction.html#installing-the-test-cli"
                    target="_blank"
                    class="font-bold underline"
                    >install the App CLI</a
                  >, login, and run the
                  <code class="bg-gray-200 font-mono text-xs"
                    >test init</code
                  >
                  command. To learn more, check out our documentation.
                </div>
                <div class="mt-8 flex items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="h-6 w-6"
                  >
                    <path
                      d="M12 21a2 2 0 0 1-1.41-.59l-.83-.82A2 2 0 0 0 8.34 19H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4a5 5 0 0 1 4 2v16z"
                      class="fill-current text-gray-400"
                    ></path>
                    <path
                      d="M12 21V5a5 5 0 0 1 4-2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-4.34a2 2 0 0 0-1.42.59l-.83.82A2 2 0 0 1 12 21z"
                      class="fill-current text-gray-600"
                    ></path>
                  </svg>
                  <div
                    class="ml-3 font-semibold text-sm text-gray-600 uppercase tracking-wider"
                  >
                    <a href="https://docs.test.build" target="_blank"
                      >Keep Digging Deeper</a
                    >
                  </div>
                </div>
                <div class="mt-3 max-w-2xl text-sm text-gray-700">
                  It has
                  <a
                    href="https://docs.test.build"
                    target="_blank"
                    class="font-bold underline hover:text-gray-900"
                    >thorough documentation</a
                  >
                  to show you the ropes. Start digging in to learn how to
                  create projects, deployment environments, manage
                  databases, scale caches, validate certificates, and more.
                </div>
              </div>
            </div>
          </div>
          <!---->
        </div>
      </div>
    </div>
    </div>
    </div>


<div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
    <div class="flex justify-between items-center -mb-2">
        <h2 class=" font-semibold text-gray-600 font-bold tracking-wide">Users</h2>
        <a href="adduser" class="text-sm text-blue-500 tracking-wide hover:underline">Add User</a>
    </div>
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
            <table class="w-full table-collapse">
                <thead class="bg-gradient-to-r from-red-50 to-blue-50">
                    <tr>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">First Name</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Last Name</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Email</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light">Username</th>
                        <th class="text-sm text-left uppercase font-semibold text-grey-darker p-3 bg-grey-light text-center">Role</th>
                        <th class="text-sm uppercase font-semibold text-grey-darker p-3 bg-grey-light">Actions</th>
                    </tr>
                </thead>
                <tbody class="align-baseline">
                    <?php foreach ($users as $user) : ?>
                        <tr class="group cursor-pointer hover:bg-grey-lightest">
                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->first_name; ?></td>
                            <td class="text-sm p-3 border-t border-grey-light whitespace-no-wrap"><?= $user->last_name; ?></td>
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