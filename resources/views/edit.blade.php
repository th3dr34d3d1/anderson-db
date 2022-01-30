<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @switch ($view_type)
                @case ('oligos')
                    Viewing Profile For Oligos-ID: {{ $record->id }}
                @break

                @case ('plasmids')
                    Viewing Profile For Plasmid-ID: {{ $record->id }}
                @break

                @case ('strains')
                    Viewing Profile For Strains-ID: {{ $record->id }}
                @break

                @case ('nystrains')
                    Viewing Profile For NyStrains-ID: {{ $record->id }}
                @break
            @endswitch
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                        <table>
                                            @switch ($view_type)
                                                @case ('oligos')
                                                    <div class="grid grid-cols-1 md:grid-cols-1">
                                                        <div>
                                                            <div>
                                                                Oligos Number:
                                                                <span class='text-xs'>{{ $record->id }}</span>
                                                            </div>
                                                            <div>
                                                                Name:
                                                                <span class='text-xs'>{{ $record->oname }}</span>
                                                            </div>
                                                            <div>
                                                                Description:
                                                                <span class='text-xs'>{{ $record->odescription }}</span>
                                                            </div>
                                                            <div>
                                                                Sequence:
                                                                <span class='text-xs'>{{ $record->sequence }}</span>
                                                            </div>
                                                            <div>
                                                                Sequence:
                                                                <span class='text-xs'>{{ $record->sequence }}</span>
                                                            </div>
                                                            <div>
                                                                HybridTm:
                                                                <span class='text-xs'>{{ $record->hybridtm }}</span>
                                                            </div>
                                                            <div>
                                                                LengthBases:
                                                                <span class='text-xs'>{{ $record->lengthbase }}</span>
                                                            </div>
                                                            <div>
                                                                Designed By:
                                                                <span class='text-xs'>{{ $record->designedby }}</span>
                                                            </div>
                                                            <div>
                                                                Made By:
                                                                <span class='text-xs'>{{ $record->madeby }}</span>
                                                            </div>
                                                            <div>
                                                                Date Made:
                                                                <span class='text-xs'>{{ $record->datemade }}</span>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            Image goes here
                                                        </div>
                                                    </div>
                                                @break

                                                    @case ('plasmids')
                                                        <div class="grid grid-cols-1 md:grid-cols-1">
                                                            <div>
                                                                <div>
                                                                    Plasmid Number:
                                                                    <span class='text-xs'>{{ $record->id }}</span>
                                                                </div>
                                                                <div>
                                                                    Plasmid Name:
                                                                    <span class='text-xs'>{{ $record->plasmidname }}</span>
                                                                </div>
                                                                <div>
                                                                    Detailed Name:
                                                                    <span class='text-xs'>{{ $record->pdname }}</span>
                                                                </div>
                                                                <div>
                                                                    Entered By:
                                                                    <span class='text-xs'>{{ $record->penteredby }}</span>
                                                                </div>
                                                                <div>
                                                                    Sequence:
                                                                    <span class='text-xs'>{{ $record->psequence }}</span>
                                                                </div>
                                                                <div>
                                                                    Function/Usage:
                                                                    <span class='text-xs'>{{ $record->pusage }}</span>
                                                                </div>
                                                                <div>
                                                                    Source:
                                                                    <span class='text-xs'>{{ $record->pconcentration }}</span>
                                                                </div>
                                                                <div>
                                                                    Plasmid Size:
                                                                    <span class='text-xs'>{{ $record->plasmidsize }}</span>
                                                                </div>
                                                                <div>
                                                                    Plasmid File:
                                                                    <span class='text-xs'>{{ $record->plasmidfile }}</span>
                                                                </div>
                                                                <div>
                                                                    Plasmid Image:
                                                                    <span class='text-xs'>{{ $record->plasmidimage }}</span>
                                                                </div>
                                                                <div>
                                                                    Comments:
                                                                    <span class='text-xs'>{{ $record->pcomments }}</span>
                                                                </div>
                                                            </div>
                                                        <div>
                                                            Image goes here
                                                        </div>
                                                    </div>
                                                @break

                                                @case ('strains')
                                                        <div class="grid grid-cols-1 md:grid-cols-1">
                                                            <div>
                                                                <div>
                                                                    Strain Number:
                                                                    <span class='text-xs'>{{ $record->id }}</span>
                                                                </div>
                                                                <div>
                                                                    Strain Name:
                                                                    <span class='text-xs'>{{ $record->strainname }}</span>
                                                                </div>
                                                                <div>
                                                                    Species:
                                                                    <span class='text-xs'>{{ $record->sspecies }}</span>
                                                                </div>
                                                                <div>
                                                                    MAT:
                                                                    <span class='text-xs'>{{ $record->smat }}</span>
                                                                </div>
                                                                <div>
                                                                    Entered By:
                                                                    <span class='text-xs'>{{ $record->senteredby }}</span>
                                                                </div>
                                                                <div>
                                                                    Background:
                                                                    <span class='text-xs'>{{ $record->sbkgnd }}</span>
                                                                </div>
                                                                <div>
                                                                    Reports & Markers:
                                                                    <span class='text-xs'>{{ $record->srepandmarkers }}</span>
                                                                </div>
                                                                <div>
                                                                    Used Often:
                                                                    <span class='text-xs'>{{ $record->susedoften }}</span>
                                                                </div>
                                                                <div>
                                                                    Auxotrophies:
                                                                    <span class='text-xs'>{{ $record->sauxotrophies }}</span>
                                                                </div>
                                                                <div>
                                                                    Cross/Transformation:
                                                                    <span class='text-xs'>{{ $record->sxtransform }}</span>
                                                                </div>
                                                                <div>
                                                                    Source:
                                                                    <span class='text-xs'>{{ $record->ssource }}</span>
                                                                </div>
                                                                <div class='row-span-3'>
                                                                    Comments:
                                                                    <span class='text-xs'>{{ $record->scomments }}</span>
                                                                </div>
                                                            </div>

                                                        <div>
                                                            Image goes here
                                                        </div>
                                                    </div>
                                                @break

                                                @case ('nystrains')
                                                        <div class="grid grid-cols-1 md:grid-cols-1">
                                                            <div>
                                                                <div>
                                                                    Strain Number:
                                                                    <span class='text-xs'>{{ $record->id }}</span>
                                                                </div>
                                                                <div>
                                                                    Strain Type:
                                                                    <span class='text-xs'>{{ $record->nystraintype }}</span>
                                                                </div>
                                                                <div>
                                                                    Strain Name:
                                                                    <span class='text-xs'>{{ $record->nystrainname }}</span>
                                                                </div>
                                                                <div>
                                                                    Entered By:
                                                                    <span class='text-xs'>{{ $record->nyenteredby }}</span>
                                                                </div>
                                                                <div>
                                                                    Genus:
                                                                    <span class='text-xs'>{{ $record->nygenus }}</span>
                                                                </div>
                                                                <div>
                                                                    Species:
                                                                    <span class='text-xs'>{{ $record->nyspecies }}</span>
                                                                </div>
                                                                <div>
                                                                    Source:
                                                                    <span class='text-xs'>{{ $record->nysource }}</span>
                                                                </div>
                                                                <div>
                                                                    Medium of Isolation:
                                                                    <span class='text-xs'>{{ $record->nymedofisolation }}</span>
                                                                </div>
                                                                <div>
                                                                    Medium for Growth:
                                                                    <span class='text-xs'>{{ $record->nymedforgrowth }}</span>
                                                                </div>
                                                                <div>
                                                                    Comments:
                                                                    <span class='text-xs'>{{ $record->nycomments }}</span>
                                                                </div>
                                                            </div>

                                                        <div>
                                                            Image goes here
                                                        </div>
                                                    </div>
                                                @break
                                            @endswitch
                                        </table>
                                    </div>
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

