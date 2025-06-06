<x-app-layout>
 
  
    <div x-data="{ open: false }" class="flex">
        <!-- Main content -->
        <main class="flex-1 py-0 ">
            <div class="bg-white dark:bg-white overflow-hidden shadow-sm">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <div class="bg-white p-4 rounded shadow">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-semibold text-gray-700">Applicants List</h3>
                            <div class="space-x-1">
                               
                            </div>
                        </div>
  
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto text-sm text-left text-gray-600">
                                <thead class="bg-gray-100 text-gray-900">
                                    <tr>
                                        <th class="px-4 py-2 font-medium">Applicant Name</th>
                                        <th class="px-4 py-2 font-medium">Email</th>
                                        <th class="px-4 py-2 font-medium">ID Number</th>
                                        <th class="px-4 py-2 font-medium">Gender</th>
                                        <th class="px-4 py-2 font-medium">Date</th>
                                        <th class="px-4 py-2 font-medium">Status</th>
                                        <th class="px-4 py-2 font-medium">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Dummy data: Replace with loop for dynamic content -->
                                    @foreach($applications  as $applicant)
                                    <tr class="border-t">
                                        <td class="px-4 py-2">{{ $applicant->user->name }}</td>
                                        <td class="px-4 py-2">{{ $applicant->user->email }}</td>
                                        <td class="px-4 py-2">{{ $applicant->cv->street_address }}</td>

                                        <td class="px-4 py-2">{{ $applicant->cv->gender }}</td>
                                        <td class="px-4 py-2">{{ $applicant->cv->created_at }}</td>
                                        <td class="px-4 py-2">{{ $applicant->status }}</td>
                                        <td class="px-4 py-2">
                                         
                                            <a href="{{ route('process', ['id' => $applicant->user->id]) }}" class="text-blue-600 hover:underline">
                                                👁️
                                            </a>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                           
                                            </td>
                                    </tr>
                                    @endforeach


                                    <!-- More rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
  
    

  </x-app-layout>
  