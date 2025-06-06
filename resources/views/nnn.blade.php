<x-app-layout>
    <div x-data="{ open: false }" class="flex relative min-h-screen">
       

        <!-- Main Content -->
        <main class="flex-1 py-0">
            <div class="bg-white dark:bg-white overflow shadow-sm">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <div class="flex space-x-6 mt-4 mb-2 border-b border-gray-200 pb-2">
                        <a href="#" class="font-bold text-blue-600 hover:border-b-2 hover:border-blue-600 pb-1 transition">Resume</a>
                        <a href="{{ route('documents') }}" class="font-bold text-blue-600 hover:border-b-2 hover:border-blue-600 pb-1 transition">Documents</a>
                        <a href="{{ route('nnn') }}" class="font-bold text-md text-blue-600 hover:border-b-2 hover:border-blue-600 pb-1 transition">Process</a>
                    </div>

                   
                        <div class="bg-white p-4 shadow rounded-sm col-span-3 pl-4 ">
                            <h2 class="text-xl font-bold text-gray-800 mb-6">Job Application Process</h2>

                            <div class="flex items-center justify-between space-x-4 overflow-x-auto">
                                <!-- Step 1 -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-20 h-20 rounded-full bg-orange-500 text-white flex items-center justify-center text-2xl font-bold">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800 mt-2">Pending</p>
                                </div>

                                <div class="h-1 w-10 bg-orange-500"></div>

                                <!-- Step 2 -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-20 h-20 rounded-full bg-blue-500 text-white flex items-center justify-center text-2xl font-bold">
                                        <i class="fas fa-pen"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800 mt-2">Review</p>
                                </div>

                                <div class="h-1 w-10 bg-blue-500"></div>

                                <!-- Step 3 -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-20 h-20 rounded-full bg-green-500 text-white flex items-center justify-center text-2xl font-bold">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800 mt-2">Shortlisted</p>
                                </div>

                                <div class="h-1 w-10 bg-green-500"></div>

                                <!-- Step 4 -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-20 h-20 rounded-full bg-pink-500 text-white flex items-center justify-center text-2xl font-bold">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800 mt-2">Interview</p>
                                </div>

                                <div class="h-1 w-10 bg-pink-500"></div>

                                <!-- Step 5 -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-20 h-20 rounded-full bg-teal-500 text-white flex items-center justify-center text-2xl font-bold">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-800 mt-2">Offer</p>
                                </div>
                            </div>
                            <div class="flex  gap-2 mt-8 justify-end">
                                <button type="submit"
                                    class="bg-green-600 text-white px-4 py-2  hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    Shortlist
                                </button>
                                <button type="submit"
                                    class="bg-red-600 text-white px-4 py-2  hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                    Reject
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>

    <!-- Tailwind and AlpineJS Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

</x-app-layout>
