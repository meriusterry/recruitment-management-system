<x-app-layout>
  

    <div class="flex">
        <main class="flex-1 p-0">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="p-4 text-gray-900 mt-0">
                    <div class="bg-white p-2 rounded shadow">
                        @if (session('success'))
    <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="bg-red-100 text-red-800 px-4 py-2 rounded-sm mb-4">
        {{ session('error') }}
    </div>
@endif


                        <h2 class="text-xl font-bold text-center mb-2">CV Submission </h2>

                        <div class="grid grid-cols-4 gap-6">
                            <!-- Left Column - Personal Details (1/4 width) -->
                            <div class="bg-white p-4 shadow rounded-sm col-span-1">
                                <h3 class="text-lg font-bold flex items-center justify-between">
                                    Personal Details
                                    <button class="text-blue-600 hover:text-blue-800" id="openPersonalDetailsModal">
                                        ✏️
                                    </button>
                                </h3>
                                <p class="mt-2"><strong>Full Name</strong> </p>
                                <p> {{ Auth::user()->name }}</p>
                                <p class="mt-2"><strong>Email</strong> </p>
                                <p>{{ Auth::user()->email }}</p>
                                <p class="mt-2"><strong>ID Number</strong> </p>
                                <p>{{ $data->full_name  ?? '' }}</p>
                                <p class="mt-2"><strong>Date of Birth</strong> </p>
                                <p>{{ $data->date_of_birth  ?? ''}}</p>
                                <p class="mt-2"><strong>Gender</strong> </p>
                                <p>{{ $data->gender  ?? ''}}</p>
                                <p class="mt-2"><strong>Address</strong> </p>
                                <p> {{ $data->street_address  ?? ''}}</p>
                                <form action="{{ route('applications.store') }}" method="POST">
                                    @csrf
                                
                                    <!-- Hidden vacancy_id field -->
                                    <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">
                                
                                    <button class="mt-16 bg-blue-600 text-white px-4 py-2 rounded-sm hover:bg-blue-700 w-half">
                                        Submit Application
                                    </button>
                                </form>
                                
                                
                            
                            </div>
                            @if ($data)
                            <!-- Right Column - Biography, Work Experience, and Qualifications (3/4 width) -->
                            <div class="bg-white p-4 shadow rounded-sm col-span-3 pl-4 overflow-y-scroll h-[550px]">
                                <!-- Biography Section -->
                                <h3 class="text-xl font-bold flex items-center justify-between">
                                    Biography
                                    <button class="text-blue-600 hover:text-blue-800" id="openBiographyModal">
                                        ✏️
                                    </button>
                                </h3>
                                <p class="text-gray-600">{{ $data->biography ?? '' }}</p>
                            
                                <div class="border-t border-gray-300 my-2"></div>
                            
                                <!-- Work Experience Section -->
                                <h3 class="text-xl font-bold mt-6 flex items-center justify-between">
                                    Work Experience
                                    <button class="text-blue-600 hover:text-blue-800" id="openExperienceModal">
                                        ➕
                                    </button>
                                </h3>
                                
                                <ul class="mt-4 text-black list-inside list-disc">
                                    @foreach ($data->experiences as $experience)
                                        <li class="font-bold">{{ $experience->company_name  ?? ''}} </li>
                                        <p class="text-gray-500">{{ $experience->job_title  ?? ''}}  : {{ $experience->start_date ?? '' }} - {{ $experience->end_date  ?? ''}} </p>
                                        <p class="text-gray-500">📍{{ $experience->location ?? '' }}</p>
                                        <p class="text-gray-600">{{ $experience->experience_summary  ?? ''}}</p>
                                    @endforeach
                                </ul>
                                <div class="border-t border-gray-300 my-2"></div>
                            
                                <!-- Qualifications Section -->
                                <h3 class="text-xl font-bold mt-6 flex items-center justify-between">
                                    Qualifications
                                    <button class="text-blue-600 hover:text-blue-800" id="openQualificationModal">
                                        ➕
                                    </button>
                                </h3>
                                <ul class="mt-4 text-black list-inside list-disc">
                                    @foreach ($data->qualifications as $qualification)
                                        <li class="font-bold">{{ $qualification->qualification  ?? ''}}</li>
                                        <p class="text-gray-500">{{ $qualification->institution  ?? '' }} | {{ $qualification->date_completed  ?? ''}}</p>
                                        <p class="text-gray-500">Graduated Date: {{ $qualification->date_completed  ?? ''}}</p>
                                        <p class="text-gray-600">{{ $qualification->qualification_summary  ?? ''}}</p>
                                    @endforeach
                                </ul>
                            </div>
                            @else
                            <div class="bg-white p-4 shadow rounded-sm col-span-3 pl-4 overflow-y-scroll h-[550px]">
                                <!-- Biography Section -->
                                <h3 class="text-xl font-bold flex items-center justify-between">
                                    Biography
                                    <button class="text-blue-600 hover:text-blue-800" id="openBiographyModal">
                                        ✏️
                                    </button>
                                </h3>
                                <p class="text-gray-600">{{ $data->biography ?? '' }}</p>
                            
                                <div class="border-t border-gray-300 my-2"></div>
                            
                                <!-- Work Experience Section -->
                                <h3 class="text-xl font-bold mt-6 flex items-center justify-between">
                                    Work Experience
                                    <button class="text-blue-600 hover:text-blue-800" id="openExperienceModal">
                                        ➕
                                    </button>
                                </h3>
                                
                                <ul class="mt-4 text-black list-inside list-disc">
                                    
                                       
                                       
                                   
                                </ul>
                                <div class="border-t border-gray-300 my-2"></div>
                            
                                <!-- Qualifications Section -->
                                <h3 class="text-xl font-bold mt-6 flex items-center justify-between">
                                    Qualifications
                                    <button class="text-blue-600 hover:text-blue-800" id="openQualificationModal">
                                        ➕
                                    </button>
                                </h3>
                                <ul class="mt-4 text-black list-inside list-disc">
                                    
                                  
                                </ul>
                            </div>
                        @endif

                                
                            </div>
                            
                        </div>

                    </div>
                    
                    
                </div>
            </div>
        </main>
    </div>

    <!-- Add Experience Modal -->
    <!-- Add Experience Modal -->
<div id="experienceModal" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex justify-center items-center hidden">
    <form method="POST" action="{{ route('cvs.store') }}" class="w-[600px] mx-auto bg-white p-4 shadow-lg rounded-sm">
        @csrf
        <h2 class="text-xl font-bold text-center mb-4">Add Experience</h2>

        <label class="block mt-4 font-semibold">Company Name</label>
        <input name="company_name" type="text" placeholder="Company Name" class="w-full p-2 border rounded mt-2">

        <label class="block mt-4 font-semibold">Job Title</label>
        <input name="job_title" type="text" placeholder="Job Title" class="w-full p-2 border rounded mt-2">

        <div class="flex gap-4 mt-4">
            <div class="w-1/2">
                <label class="block font-semibold">Start Date</label>
                <input name="start_date" type="date" class="w-full p-2 border rounded mt-2">
            </div>
            <div class="w-1/2">
                <label class="block font-semibold">End Date</label>
                <input name="end_date" type="date" class="w-full p-2 border rounded mt-2">
            </div>
        </div>

        <label class="block mt-4 font-semibold">Location</label>
        <input name="location" type="text" placeholder="Location" class="w-full p-2 border rounded mt-2">

        <label class="block mt-4 font-semibold">Summary</label>
        <textarea name="experience_summary" placeholder="Company summary" rows="4" class="w-full p-2 border rounded mt-2"></textarea>

        <button type="submit" class="mt-4 w-full p-2 bg-green-500 text-white rounded">Submit</button>
        <button type="button" id="closeExperienceModal" class="mt-2 w-full p-2 bg-blue-500 text-white rounded">Close</button>
    </form>
</div>


    <!-- Add Qualification Modal -->
    <div id="qualificationModal" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex justify-center items-center hidden">
        <form method="POST" action="{{ route('cvs.store') }}" class="w-[600px] mx-auto bg-white p-4 shadow-lg rounded-sm">
            @csrf
            <h2 class="text-xl font-bold text-center mb-4">Add Qualification</h2>
    
            <label class="block mt-4 font-semibold">Qualification</label>
            <input name="qualification" type="text" placeholder="Qualification Title" class="w-full p-2 border rounded mt-2">
    
            <label class="block mt-4 font-semibold">Institution</label>
            <input name="institution" type="text" placeholder="Institution" class="w-full p-2 border rounded mt-2">
    
            <label class="block mt-4 font-semibold">Date Completed</label>
            <input name="date_completed" type="date" class="w-full p-2 border rounded mt-2">
    
            <label class="block mt-4 font-semibold">Summary</label>
            <textarea name="qualification_summary" placeholder="Qualification summary" rows="4" class="w-full p-2 border rounded mt-2"></textarea>
    
            <button type="submit" class="mt-4 w-full p-2 bg-green-500 text-white rounded">Submit</button>
            <button type="button" id="closeQualificationModal" class="mt-2 w-full p-2 bg-blue-500 text-white rounded">Close</button>
        </form>
    </div>
    

    <!-- Add Biography Modal -->
    <div id="biographyModal" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex justify-center items-center hidden">
        <form method="POST" action="{{ route('cvs.store') }}" class="w-[600px] mx-auto bg-white p-4 shadow-lg rounded-sm"> 
            @csrf
            <h2 class="text-xl font-bold text-center mb-4">Add Biography</h2>
    
            <textarea name="biography" placeholder="Biography" class="w-full p-2 border rounded mt-2">{{  $data->biography ?? '' }}</textarea>
    
            <button type="submit" class="mt-4 w-full p-2 bg-green-500 text-white rounded">Submit</button>
            <button type="button" id="closeBiographyModal" class="mt-2 w-full p-2 bg-blue-500 text-white rounded">Close</button>
        </form>
    </div>
    
    

    <!-- Add Personal Details Modal -->
    <div id="personalDetailsModal" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex justify-center items-center hidden">
        <form method="POST" action="{{ route('cvs.store') }}" class="w-[600px] mx-auto bg-white p-4 shadow-lg rounded-sm">
            @csrf
            <h2 class="text-xl font-bold text-center mb-4">Add Personal Details</h2>
    
            <input name="full_name" type="text" placeholder="Full Name" class="w-full p-2 border rounded mt-2">
            <input name="date_of_birth" type="text" placeholder="Date of Birth" class="w-full p-2 border rounded mt-2">
            <input name="gender" type="text" placeholder="Gender" class="w-full p-2 border rounded mt-2">
            <input name="street_address" type="text" placeholder="Street Address" class="w-full p-2 border rounded mt-2">
    
            <button type="submit" class="mt-4 w-full p-2 bg-green-500 text-white rounded">Submit</button>
            <button type="button" id="closePersonalDetailsModal" class="mt-2 w-full p-2 bg-blue-500 text-white rounded">Close</button>
        </form>
    </div>
    

    <script>
        // Modal Control
        const openExperienceModal = document.getElementById('openExperienceModal');
        const openQualificationModal = document.getElementById('openQualificationModal');
        const openBiographyModal = document.getElementById('openBiographyModal');
        const openPersonalDetailsModal = document.getElementById('openPersonalDetailsModal');

        const experienceModal = document.getElementById('experienceModal');
        const qualificationModal = document.getElementById('qualificationModal');
        const biographyModal = document.getElementById('biographyModal');
        const personalDetailsModal = document.getElementById('personalDetailsModal');

        const closeExperienceModal = document.getElementById('closeExperienceModal');
        const closeQualificationModal = document.getElementById('closeQualificationModal');
        const closeBiographyModal = document.getElementById('closeBiographyModal');
        const closePersonalDetailsModal = document.getElementById('closePersonalDetailsModal');

        // Open Modals
        openExperienceModal.addEventListener('click', () => experienceModal.classList.remove('hidden'));
        openQualificationModal.addEventListener('click', () => qualificationModal.classList.remove('hidden'));
        openBiographyModal.addEventListener('click', () => biographyModal.classList.remove('hidden'));
        openPersonalDetailsModal.addEventListener('click', () => personalDetailsModal.classList.remove('hidden'));

        // Close Modals
        closeExperienceModal.addEventListener('click', () => experienceModal.classList.add('hidden'));
        closeQualificationModal.addEventListener('click', () => qualificationModal.classList.add('hidden'));
        closeBiographyModal.addEventListener('click', () => biographyModal.classList.add('hidden'));
        closePersonalDetailsModal.addEventListener('click', () => personalDetailsModal.classList.add('hidden'));

        // Close Modals if clicked outside the modal content
        [experienceModal, qualificationModal, biographyModal, personalDetailsModal].forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    </script>
</x-app-layout>
