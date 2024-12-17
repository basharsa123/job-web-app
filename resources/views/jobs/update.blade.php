<x-layout>

    <x-slot:heading>
        Edit Job:{{$job->title}}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 block">
                    <div class="sm:col-span-4">
                        <label for="job_name" class="block text-sm/6 font-medium text-gray-900">JOB NAME</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                    name="job_name"
                                    id="job_name"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder="shift leader"
                                    value="{{$job->title}}">
                            </div>
                        </div>
                        <p class="text-red-500 italic">
                       @error('job_name')
                        {{$message}}
                        @enderror
                        </p>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">SALARY</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    name="salary"
                                    id="salary"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder="$50,000"
                                    value="{{$job->salary}}">
                            </div>
                        </div>
                        <p class="text-red-500 italic">
                        @error('salary')
                        {{$message}}
                        @enderror
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs/{{$job->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            <button type="submit" form="delete-form" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">DELETE</button>
        </div>
    </form>
    <form  method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
     @csrf
    @method('delete')
    </form>
</x-layout>