<?php use Clive\Core\Mantle\Session; include_once 'base.view.php'; ?>

<!-- <?php
// var_dump($user);
?> -->
<div class="bg-gradient-to-r from-red-50 to-blue-50 min-h-screen -mt-8 p-4"> 
  <div class="container mx-auto max-w-3xl mt-8"> 
    <h1 class="text-2xl font-bold text-gray-700 px-6 md:px-0">Account Settings</h1>
    <ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0">
      <li class="mr-8 text-gray-900 border-b-2 border-gray-800"><a href="#_" class="py-4 inline-block">Profile Info</a></li>
      <!-- <li class="mr-8 hover:text-gray-900"><a href="#_" class="py-4 inline-block">Security</a></li>
      <li class="mr-8 hover:text-gray-900"><a href="#_" class="py-4 inline-block">Billing</a></li> -->
    </ul>
    <form action="#" method="POST"> 
      <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
        <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
          <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide"><?=ucfirst(Session::get('user'));?>'s Info</h2>
          <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name, and Password.</p>
        </div>
        <div class="md:w-2/3 w-full">
          <div class="py-8 px-16">
            <label for="name" class="text-sm text-gray-600">First Name</label>
            <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="text" placeholder="<?=$user[0]->first_name;?>" name="name">
          </div>
          <hr class="border-gray-200">
          <div class="py-8 px-16">
            <label for="email" class="text-sm text-gray-600">Email Address </label>
            <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="email" name="email" placeholder="<?=$user[0]->email;?>">
          </div>
          <hr class="border-gray-200">
        </div>
        <div class="md:w-2/3 w-full">
          <div class="py-8 px-16">
            <label for="name" class="text-sm text-gray-600">Second Name</label>
            <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="text" placeholder="<?=$user[0]->last_name;?>" name="name">
          </div>
          <hr class="border-gray-200">
          <div class="py-8 px-16">
            <label for="email" class="text-sm text-gray-600">Password</label>
            <input t class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="password" name="email" placeholder="<?=$user[0]->password;?>">
          </div>
          <hr class="border-gray-200">
        </div>

      </div>
      <div class="p-16 bg-gray-300 clearfix rounded-b-lg border-t border-gray-200">
        <p class="float-left text-xs text-gray-500 tracking-tight mt-2">Click on Save to update your Profile Info</p>
        <input type="submit" class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer" value="Save">
      </div>
    </form>
  </div>
</div>