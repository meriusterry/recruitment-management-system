<x-app-layout>
    <div x-data="{ open: false, data: {} }" class="flex">

        <!-- Main content -->
        <main class="flex-1 p-0">
            <div class="bg-white dark:bg-white overflow-hidden shadow-sm">
                <div class="p-4 text-gray-900 dark:text-gray-100">

                    <div class="bg-white p-4 rounded shadow">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-semibold text-gray-700">Vacancy List</h3>
                            <div class="space-x-1">
                                <button
                                    @click="open = true; data = {}"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    + Create Vacancy
                                </button>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto text-sm text-left text-gray-600">
                                <thead class="bg-gray-100 text-gray-900">
                                    <tr>
                                        <th class="px-4 py-2 font-medium">Id</th>
                                        <th class="px-4 py-2 font-medium">Vacancy Title</th>
                                        <th class="px-4 py-2 font-medium">Description</th>
                                        <th class="px-4 py-2 font-medium">Requirements</th>
                                        <th class="px-4 py-2 font-medium">Salary</th>
                                        <th class="px-4 py-2 font-medium">Location</th>
                                        <th class="px-4 py-2 font-medium">Closing Date</th>
                                        <th class="px-4 py-2 font-medium">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($data as $data)
                                    <tr class="border-t">
                                        <td class="px-4 py-2">{{ $data->id }}</td>
                                        <td class="px-4 py-2">{{ $data->job_title }}</td>
                                        <td class="px-4 py-2 max-w-xs">
                                            <p class="line-clamp-2">{{ $data->job_description }}</p>
                                        </td>
                                        <td class="px-4 py-2 max-w-xs">
                                            <p class="line-clamp-2">{{ $data->requirements }}</p>
                                        </td>
                                        <td class="px-4 py-2">R{{ $data->salary_rate }}</td>
                                        <td class="px-4 py-2 max-w-xs">
                                            <p class="line-clamp-2">{{ $data->location }}</p>
                                        </td>
                                        <td class="px-4 py-2 {{ \Carbon\Carbon::parse($data->closing_date)->lt(\Carbon\Carbon::today()) ? 'text-red-600 font-semibold' : '' }}">
                                            {{ $data->closing_date }}
                                        </td>
                                        <td class="px-4 py-2">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('applicants', ['job' => $data->id]) }}" class="flex items-center text-blue-600 hover:underline">
                                                    👁️
                                                </a>

                                                <button
                                                    @click="open = true; data = {
                                                        job_title: '{{ $data->job_title }}',
                                                        location: '{{ $data->location }}',
                                                        salary_rate: '{{ $data->salary_rate }}',
                                                        closing_date: '{{ $data->closing_date }}',
                                                        job_description: @js($data->job_description),
                                                        requirements: @js($data->requirements)
                                                    }"
                                                    class="flex items-center text-blue-600 hover:underline">
                                                    ✏️
                                                </button>

                                                <form action="{{ route('vacancy.destroy', $data->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="flex items-center text-black hover:text-red-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7L5 7M6 7V19a2 2 0 002 2h8a2 2 0 002-2V7M10 11V17M14 11V17M9 7V4h6v3" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div
                        x-show="open"
                        x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-50 pl-40 bg-gray-700"
                    >
                        <div @click.away="open = false"
                            class="relative bg-white w-full max-w-3xl shadow-lg p-4 overflow-hidden">

                            <div class="absolute top-0 left-0 w-full h-6 bg-gradient-to-b from-white/70 to-transparent pointer-events-none rounded-t-lg z-10"></div>

                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-bold text-gray-700">Create/Edit Vacancy</h2>
                                <button @click="open = false" class="text-gray-600 hover:text-gray-900 text-2xl leading-none">
                                    &times;
                                </button>
                            </div>

                            <form action="{{ route('vacancies.store') }}" method="POST">
                                @csrf
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Job Title</label>
                                        <input type="text" name="job_title" x-bind:value="data.job_title || ''" class="mt-1 block w-full border p-2" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Location</label>
                                        <input type="text" name="location" x-bind:value="data.location || ''" class="mt-1 block w-full border p-2" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Salary Rate</label>
                                        <input type="number" name="salary_rate" x-bind:value="data.salary_rate || ''" class="mt-1 block w-full border p-2" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Closing Date</label>
                                        <input type="date" name="closing_date" x-bind:value="data.closing_date || ''" class="mt-1 block w-full border p-2" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Job Description</label>
                                    <textarea name="job_description" rows="3" x-text="data.job_description || ''" class="mt-1 block w-full border p-2" required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Requirements</label>
                                    <textarea name="requirements" rows="2" x-text="data.requirements || ''" class="mt-1 block w-full border p-2" required></textarea>
                                </div>

                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Modal -->

                </div>
            </div>
        </main>
    </div>
</x-app-layout>
