<x-layout>
    <x-slot:heading>
        JOBS AVAILABLE
    </x-slot:heading>
    <div class = "space-y-5">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class = "block px-4 py-6 border border-gray-6 rounded-lg width-50">
            <div class = "text-blue-500 font-bold text-sm">
                {{$job->employee->name;}}
            </div>    
            <strong>{{ $job['title'] }}</strong>:Pays {{$job['salary']}} per year.
            </a>
        
            @endforeach
            <div>
                {{$jobs->links();}}
            </div>
    </div>
</x-layout>