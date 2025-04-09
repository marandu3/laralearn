<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/Jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}: is at {{ $job['company'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>