<x-layouts>
    <x-slot:head>Job List</x-slot>
        <ul>
            @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }}:</strong> Monthly salary is {{$job['salary']}}.
                </a>
            </li>

            @endforeach
        </ul>
</x-layouts>