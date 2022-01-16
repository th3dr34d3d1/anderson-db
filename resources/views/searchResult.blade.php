<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $view_type . " Search Results" }}
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
                                                            <a href={{ url('/profile/oligos/' . $result->id) }}>
                                                                {{ $result->id }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $result->oname }}</td>
                                                        <td>{{ $result->odescription }}</td>
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
                                                <th>Plasmid Number</th>
                                                <th>Plasmid Name</th>
                                                <th>Detailed Name</th>
                                                <th>Entered By</th>
                                                <th>Sequence</th>
                                                <th>Function/Usage</th>
                                                <th>Source</th>
                                                <th>Plasmid Size</th>
                                                <th>Comments</th>

                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td>
                                                            <a href={{ url('/profile/plasmids/' . $result->id) }}>
                                                                {{ $result->id }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $result->plasmidname }}</td>
                                                        <td>{{ $result->pdname }}</td>
                                                        <td>{{ $result->penteredby }}</td>
                                                        <td>{{ $result->psequence }}</td>
                                                        <td>{{ $result->pusage }}</td>
                                                        <td>{{ $result->pconcentration }}</td>
                                                        <td>{{ $result->plasmidsize }}</td>
                                                        <td>{{ $result->pcomments }}</td>
                                                    </tr>
                                                @endforeach
                                            @break

                                            @case ('strains')
                                                <th>Strain Number</th>
                                                <th>Strain Name</th>
                                                <th>Species</th>
                                                <th>MAT</th>
                                                <th>Entered By</th>
                                                <th>Background</th>
                                                <th>Reports & Markers</th>
                                                <th>Used Often</th>
                                                <th>Auxotrophies</th>
                                                <th>Cross/Transformation</th>
                                                <th>Source</th>
                                                <th>Comments</th>

                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td>
                                                            <a href={{ url('/profile/strains/' . $result->id) }}>
                                                                {{ $result->id }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $result->strainname }}</td>
                                                        <td>{{ $result->sspecies }}</td>
                                                        <td>{{ $result->smat }}</td>
                                                        <td>{{ $result->senteredby }}</td>
                                                        <td>{{ $result->susedoften }}</td>
                                                        <td>{{ $result->sbkgnd }}</td>
                                                        <td>{{ $result->srepandmarkers }}</td>
                                                        <td>{{ $result->sauxotrophies }}</td>
                                                        <td>{{ $result->sxtransform }}</td>
                                                        <td>{{ $result->ssource }}</td>
                                                        <td>{{ $result->scomments }}</td>
                                                    </tr>
                                                @endforeach
                                            @break

                                            @case ('nystrains')
                                                <th>Strain Number</th>
                                                <th>Strain Type</th>
                                                <th>Strain Name</th>
                                                <th>Entered By</th>
                                                <th>Genus</th>
                                                <th>Species</th>
                                                <th>Source</th>
                                                <th>Medium of Isolation</th>
                                                <th>Medium for Growth</th>
                                                <th>Comments</th>

                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td>
                                                            <a href={{ url('/profile/nonyeaststrains/' . $result->id) }}>
                                                                {{ $result->id }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $result->nystraintype }}</td>
                                                        <td>{{ $result->nystrainname }}</td>
                                                        <td>{{ $result->nyenteredby }}</td>
                                                        <td>{{ $result->nygenus }}</td>
                                                        <td>{{ $result->nyspecies }}</td>
                                                        <td>{{ $result->nysource }}</td>
                                                        <td>{{ $result->nymedofisolation }}</td>
                                                        <td>{{ $result->nymedforgrowth }}</td>
                                                        <td>{{ $result->nycomments }}</td>
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

