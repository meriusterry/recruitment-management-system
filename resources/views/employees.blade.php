<x-app-layout>
  
    
    <div x-data="{ open: false }" class="flex relative">
        <!-- Main content -->
        <main class="flex-1 py-0 ">
            <div class="bg-white dark:bg-white overflow-hidden shadow-sm">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <div class="bg-white p-4 rounded shadow">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-semibold text-gray-700">Employee List</h3>
                           
                            <h3 class="font-semibold text-gray-700">Add search and filter</h3>
                         
                            <div class="space-x-1">
                                <button @click="open = true" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    + Add Employee
                                </button>
                            </div>
                        </div>
  
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto text-sm text-left text-gray-600">
                                <thead class="bg-gray-100 text-gray-900">
                                    <tr>
                                        <th class="px-4 py-2 font-medium">Employee Name</th>
                                        <th class="px-4 py-2 font-medium">Position</th>
                                        <th class="px-4 py-2 font-medium">Email</th>
                                        <th class="px-4 py-2 font-medium">Contact</th>
                                        <th class="px-4 py-2 font-medium">User Type</th>
                                        <th class="px-4 py-2 font-medium">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Dummy data: Replace with loop for dynamic content -->
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">Terry Ntuli</td>
                                        <td class="px-4 py-2">Software Developer</td>
                                        <td class="px-4 py-2">terry@gmail.com</td>
                                        <td class="px-4 py-2">0935052387</td>
                                        <td class="px-4 py-2">Admin</td>
                                        <td class="px-4 py-2"><button class="text-blue-600 hover:underline">✏️</button></td>
                                    </tr>
                                   
                             
                                    <!-- More rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
  
        <!-- Modal -->
        <div
            x-show="open"
            x-transition
           class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-50 pl-40 bg-gray-700"
        >
            <div @click.away="open = false"
                 class="relative bg-white w-full max-w-3xl  shadow-lg p-4 overflow-hidden">
  <!-- Reflection from top -->
  <div class="absolute top-0 left-0 w-full h-6 bg-gradient-to-b from-white/70 to-transparent pointer-events-none rounded-t-lg z-10"></div>
          
                <div class="relative z-20 flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-700">Create Employee</h2>
                    <button @click="open = false" class="text-gray-600 hover:text-gray-900 text-2xl leading-none">
                        &times;
                    </button>
                </div>

                <form method="POST" action="#" >
                    @csrf
                    <div class="grid grid-cols-2 gap-4 mb-4 mt-2 ">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" name="first_name" class="mt-1 block w-full border p-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Surname</label>
                            <input type="text" name="surname" class="mt-1 block w-full border p-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" class="mt-1 block w-full border p-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Contact</label>
                            <input type="text" name="mobile" class="mt-1 block w-full border p-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Position</label>
                            <input type="text" name="position" class="mt-1 block w-full border p-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Department</label>
                            <input type="text" name="department" class="mt-1 block w-full border p-2" required>
                        </div>
                    </div>
  
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">User Type</label>
                            <select name="user_type" class="mt-1 block w-full border p-2" required>
                                <option value="Admin">Admin</option>
                                <option value="Manager">HR</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" class="mt-1 block w-full border p-2" required>
                        </div>
                    </div>
  
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 hover:bg-blue-700 rounded">
                            Submit
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
        <!-- End Modal -->
    </div>

   
  </x-app-layout>
  