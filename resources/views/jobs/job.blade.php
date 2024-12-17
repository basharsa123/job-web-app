<x-layout>
    <x-slot:heading>
        JOB
    </x-slot:heading>
    <h2 class = "font-bold text-lg mb-5" > {{$job['title']}} : </h2>
    <p>this job pays : {{$job['salary']}} per year.</p>
    <p class = "mt-12">
        @can('edit_jobs' , $job)
    <x-button href="{{$job->id}}/edit">
        Edit A Job
        </x-button>
    </p>
    @endcan
</x-layout>
