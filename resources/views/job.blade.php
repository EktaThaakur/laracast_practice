<x-layouts>
    <x-slot:head>Job Details</x-slot>
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>This job pays {{ $job['salary'] }} per month.</p>

</x-layouts>