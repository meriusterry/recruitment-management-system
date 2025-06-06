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
                            <h2 class="text-xl font-bold text-gray-800 mb-6">Documents</h2>

                          
                    </div>
                    
                </div>
            </div>
        </main>
    </div>

    <!-- Tailwind and AlpineJS Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

</x-app-layout>
