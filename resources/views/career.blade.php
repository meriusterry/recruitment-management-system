<x-app-layout>
  <div class="flex">
    <!-- Main content -->
    <main class="flex-1 p-0">
      <div class="bg-white dark:bg-white overflow-hidden shadow-sm">
        <div class="p-6 text-gray-900 dark:text-gray-100" x-data="jobBoard()">

          <!-- Header and Button -->
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-blue-600">Available Vacancies</h2>
            <div class="text-sm">
              <label for="sort" class="mr-2 font-medium">Sort By</label>
              <select id="sort" class="border px-2 py-1 rounded">
                <option>Closing Date</option>
              </select>
            </div>
          </div>

          <!-- Jobs Layout -->
          <div class="flex gap-4">
            <!-- Left Column: Job List -->
            <div class="w-1/3">
              <template x-for="job in jobs" :key="job.id">
                <div class="bg-gray-100 rounded shadow mb-4 p-4 cursor-pointer hover:bg-gray-100"
                     :class="{
                       'nav-active': selectedJob && selectedJob.id === job.id,
                       'border-2 border-blue-500': selectedJob && selectedJob.id === job.id
                     }"
                     @click="selectJob(job)">
                  <div class="flex items-center mb-2">
                    <div>
                      <h3 class="font-semibold text-sm text-blue-700" x-text=" + job.job_title"></h3>
                      <p class="text-xs text-gray-500 flex items-center">📍 <span x-text="job.location"></span></p>
                    </div>
                  </div>
                  <p class="text-xs text-gray-500 mb-2">Full Time</p>
                  <div class="flex justify-between text-xs">
                    <span class="bg-gray-200 px-2 py-1 rounded" x-text="'R ' + job.salary_rate"></span>
                    <span class="text-gray-500" x-text="'Closing Date: ' + job.closing_date"></span>
                  </div>
                </div>
              </template>
            </div>

            <!-- Right Column: Job Details -->
            <div class="w-2/3 bg-gray-200 p-4 rounded shadow" x-show="selectedJob">
              <div class="flex justify-between items-center mb-4">
                <div>
                  <h3 class="text-lg font-semibold text-blue-700" x-text=" + selectedJob.job_title"></h3>
                  <p class="text-sm text-gray-500">📍 <span x-text="selectedJob.location"></span></p>
                </div>
                <a :href="'{{ route('resume') }}?vacancy_id=' + selectedJob.id">
                  <button class="bg-blue-600 text-white px-4 py-2 text-sm rounded hover:bg-blue-700">
                    Apply Now
                  </button>
                </a>
                
              </div>

              <p class="text-sm text-gray-600 mb-4" x-text="selectedJob.intro"></p>

              <div class="mb-4">
                <h4 class="font-lg text-black mb-1"> Description</h4>
                <p class="text-sm text-gray-600" x-text="selectedJob.job_description"></p>
              </div>

              <div>
                <h4 class="font-lg text-black mb-1">Requirements</h4>
                <ul class="list-disc pl-5 text-sm text-gray-600">
                  <template x-for="requirements in selectedJob.requirements.split('\n')" :key="requirements">
                    <li x-text="requirements"></li>
                  </template>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>

  <!-- Alpine.js script for interactivity -->
  <script>
    function jobBoard() {
      const jobList = @json($data); // Pass the vacancies to Alpine.js

      return {
        jobs: jobList,
        selectedJob: jobList[0], // Set first job as default
        selectJob(job) {
          this.selectedJob = job;
        }
      }
    }
  </script>

  <!-- Add this style somewhere in your layout -->
  <style>
    .nav-active {
      background-color: #e0f7fa; /* Light blue to highlight the selected job */
    }
  </style>
</x-app-layout>
