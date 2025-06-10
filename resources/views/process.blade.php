<x-app-layout>


    <div x-data="{ open: false }" class="flex relative">
        <div class="flex">
            <main class="flex-1 py-0 ">
                <div class="bg-white dark:bg-white overflow-hidden shadow-sm">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        <div class="flex space-x-6 mt-4 mb-2 border-b border-gray-200 pb-2">

                            <a href="{{ route('process') }}"
                                class="font-bold text-blue-600 hover:border-b-2 hover:border-blue-600 pb-1 transition">Resume</a>
                            <a href="{{ route('documents') }}"
                                class="font-bold text-blue-600 hover:border-b-2 hover:border-blue-600 pb-1 transition">Documents</a>
                            <a href="{{ route('nnn') }}"
                                class="font-bold text-md text-blue-600 hover:border-b-2 hover:border-blue-600 pb-1 transition">Process</a>
                        </div>
                        <div class="bg-white p-2 rounded shadow">

                            <div class="grid grid-cols-4 gap-6">
                                <!-- Left Column - Personal Details (1/4 width) -->
                                <div class="bg-white p-4 shadow rounded-sm col-span-1">
                                    <h3 class="text-lg font-bold flex items-center justify-between">
                                        Personal Details

                                    </h3>
                                    <p class="mt-2"><strong>Full Name</strong> </p>
                                    <p> {{ $user->name }}</p>
                                    <p class="mt-2"><strong>Email</strong> </p>
                                    <p>{{ $user->email }}</p>
                                    <p class="mt-2"><strong>ID Number</strong> </p>
                                    <p>{{ $user->cv->full_name }}</p>
                                    <p class="mt-2"><strong>Date of Birth</strong> </p>
                                    <p>{{ $user->cv->date_of_birtg }}</p>
                                    <p class="mt-2"><strong>Gender</strong> </p>
                                    <p>{{ $user->cv->gender }}</p>
                                    <p class="mt-2"><strong>Address</strong> </p>
                                    <p>{{ $user->cv->street_address }}</p>





                                </div>

                                <!-- Right Column - Biography, Work Experience, and Qualifications (3/4 width) -->
                                <div class="bg-white p-4 shadow rounded-sm col-span-3 pl-4 overflow-y-scroll h-[550px]">
                                    <!-- Biography Section -->
                                    <h3 class="text-xl font-bold flex items-center justify-between">
                                        Biography

                                    </h3>
                                    <p class="text-gray-600">{{ $user->cv->biography }}</p>

                                    <div class="border-t border-gray-300 my-2"></div>

                                    <!-- Work Experience Section -->
                                    <h3 class="text-xl font-bold mt-6 flex items-center justify-between">
                                        Experience
                                    </h3>

                                    <ul class="mt-4 text-black list-inside list-disc">

                                        @foreach ($user->cv->experiences as $experience)
                                            <li class="font-bold">{{ $experience->job_title ?? '' }}</li>

                                            <div class="flex justify-between text-gray-500">
                                                <p>{{ $experience->company_name ?? '' }}</p>
                                                <p>{{ $experience->start_date ?? '' }} -
                                                    {{ $experience->end_date ?? '' }}</p>
                                            </div>

                                            <p class="text-gray-500">📍{{ $experience->location ?? '' }}</p>
                                            <p class="text-gray-600">{{ $experience->experience_summary ?? '' }}</p>
                                        @endforeach



                                    </ul>
                                    <div class="border-t border-gray-300 my-2"></div>

                                    <!-- Qualifications Section -->
                                    <h3 class="text-xl font-bold mt-6 flex items-center justify-between">
                                        Qualifications

                                    </h3>
                                    <ul class="mt-4 text-black list-inside list-disc">

                                        @foreach ($user->cv->qualifications as $qualification)
                                            <li class="font-bold">{{ $qualification->qualification ?? '' }}</li>

                                            <div class="flex justify-between text-gray-500">
                                                <p>{{ $qualification->institution ?? '' }}</p>
                                                <p>{{ $qualification->date_completed ?? '' }}</p>
                                            </div>

                                            <div class="flex justify-end text-gray-500">
                                                <p>Graduated Date:</p>
                                                <p> {{ $qualification->date_completed ?? '' }}</p>
                                            </div>

                                            <p class="text-gray-600">{{ $qualification->qualification_summary ?? '' }}
                                            </p>
                                        @endforeach



                                    </ul>
                                </div>




                            </div>

                        </div>

                    </div>


                </div>
        </div>
        </main>
    </div>





</x-app-layout>
