<x-layout>
    <x-slot:heading>
        CREATE A JOB
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">we need a handfull of details</p>
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 block">
                    <!-- //? job_name -->
                    <div class="sm:col-span-4">
                        <x-form-label for="title">title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="job_name" id="job_name" placeholder="CEO" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="job_name" />
                        </p>
                    </div>
                    <!-- //? salary -->
                    <div class="sm:col-span-4">
                        <x-form-label for="salary">salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="10,000" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="salary" />
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>SAVE</x-form-button>
        </div>
    </form>
</x-layout>