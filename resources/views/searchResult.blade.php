<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard z') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
   

                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">


                                    <table>
                                        @switch ($view_type)
                                            @case ('oligos')
                                                <th>Oligos Number</th>
                                                <th>Oligos Name</th>
                                                <th>Description</th>
                                                <th>Sequence</th>
                                                <th>HybridTm</th>
                                                <th>LengthBases</th>
                                                <th>Designed By</th>
                                                <th>Made By</th>
                                                <th>Date Made</th>
                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td>
                                                            <a href={{ url('/profile/' . $result->id) }}>
                                                                {{ $result->oligonum }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $result->oname }}</td>
                                                        <td>{{ $result->pdescription }}</td>
                                                        <td>{{ $result->sequence }}</td>
                                                        <td>{{ $result->hybridtm }}</td>
                                                        <td>{{ $result->lengthbases }}</td>
                                                        <td>{{ $result->designedby }}</td>
                                                        <td>{{ $result->madeby }}</td>
                                                        <td>{{ $result->datemade }}</td>
                                                    </tr>
                                                @endforeach
                                            @break

                                            @case ('plasmids')
                                                <th>Test</th>
                                                @foreach ($results as $result)
                                                    <tr>
                                                    </tr>
                                                @endforeach
                                            @break
                                        @endswitch
                                    </table>
                                </div>
                            </div>
                            <a href='/'>Home</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

