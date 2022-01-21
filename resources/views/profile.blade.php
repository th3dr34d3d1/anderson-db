<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @switch ($view_type)
                @case ('oligos')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For Oligos-ID: {{ $record->id }}
                @break

                @case ('plasmids')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For Plasmid-ID: {{ $record->id }}
                @break

                @case ('strains')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For Strains-ID: {{ $record->id }}
                @break

                @case ('nystrains')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For NyStrains-ID: {{ $record->id }}
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
                                <div class="ml-4 text-lg leading-7 font-semibold" style="font-size: 20px;">
                                        <table>

                                            @switch ($view_type)
                                                @case ('oligos')
                                                    <div class="grid grid-cols-1 md:grid-cols-1">
                                                        @if ($is_edit)
                                                            <form id='oligos-edit-form' action="/save/oligos/{{ $record->id }}" method="POST" role="search">
                                                                @csrf
                                                                <div>
                                                                    Name:
                                                                    <input value="{{ $record->oname }}" id='oligoname-input' type="text" class="form-control" name="oname"><br>
                                                                </div>
                                                                <div>
                                                                    Description:
                                                                    <input value="{{ $record->odescription }}" id='odescription' type="text" class="form-control" name="odescription"><br>
                                                                </div>
                                                                <div>
                                                                    Sequence:
                                                                    <input value="{{ $record->sequence }}" id='sequence' type="text" class="form-control" name="sequence"><br>
                                                                </div>
                                                                <div>
                                                                    HybridTm:
                                                                    <input value="{{ $record->hybridtm }}" id='ohybridtm' type="text" class="form-control" name="hybridtm"><br>
                                                                </div>

                                                                <div>
                                                                    LengthBases:
                                                                    <input value="{{ $record->lengthbases }}" id='lengthbases' type="text" class="form-control" name="lengthbases"><br>
                                                                </div>
                                                                <div>
                                                                    Designed By:
                                                                    <input value="{{ $record->designedby }}" id='designedby' type="text" class="form-control" name="designedby"><br>
                                                                </div>
                                                                <div>
                                                                    Made By:
                                                                    <input value="{{ $record->madeby }}" id='madeby' type="text" class="form-control" name="madeby"><br>
                                                                </div>
                                                                <div>
                                                                    Date:
                                                                    <input value="{{ $record->datemade }}" id='datemade' type="date" class="form-control" name="datemade"><br>
                                                                </div>
                                                            </form>

                                                        @else
                                                            @include(
                                                            'static_profile',
                                                                [
                                                                    'view_type' => $view_type,
                                                                    'record' => $record,
                                                                    'show_view_profile_link' => false
                                                                ]
                                                            )

                                                        @endif
                                                    </div>
                                                @break

                                                @case ('plasmids')
                                                    <div class="grid grid-cols-2 md:grid-cols-2">
                                                        @if ($is_edit)
                                                            <form id='plasmids-edit-form' action="/save/plasmids/{{ $record->id }}" method="POST" role="search" enctype="multipart/form-data">
                                                                @csrf
                                                                <div>
                                                                    Plasmid Name:
                                                                    <input value="{{ $record->plasmidname }}" id='plasmidname' type="text" class="form-control" name="plasmidname"><br>
                                                                </div>
                                                                <div>
                                                                    Detailed Name:
                                                                    <input value="{{ $record->pdname }}" id='pdname' type="text" class="form-control" name="pdname"><br>
                                                                </div>
                                                                <div>
                                                                    Entered By:
                                                                    <input value="{{ $record->penteredby }}" id='penteredby' type="text" class="form-control" name="penteredby"><br>
                                                                </div>
                                                                <div>
                                                                    Date Made:
                                                                    <input value="{{ $record->pdatemade }}" id='pdatemade' type="date" class="form-control" name="pdatemade"><br>
                                                                </div>
                                                                <div>
                                                                    Sequence:
                                                                    <input value="{{ $record->psequence }}" id='psequence' type="text" class="form-control" name="psequence"><br>
                                                                </div>
                                                                <div>
                                                                    Function/Usage:
                                                                    <input value="{{ $record->pusage }}" id='pusage' type="text" class="form-control" name="pusage"><br>
                                                                </div>
                                                                <div>
                                                                    Source:
                                                                    <input value="{{ $record->psource }}" id='psource' type="text" class="form-control" name="psource"><br>
                                                                </div>
                                                                <div>
                                                                    Concentration:
                                                                    <input value="{{ $record->pconcentration }}" id='pconcentration' type="text" class="form-control" name="pconcentration"><br>
                                                                </div>
                                                                <div>
                                                                    Markers:
                                                                    <input value="{{ $record->pmarkers }}" id='pmarkers' type="text" class="form-control" name="pmarkers"><br>
                                                                </div>
                                                                <div>
                                                                    Plasmid Size:
                                                                    <input value="{{ $record->plasmidsize }}" id='plasmidsize' type="text" class="form-control" name="plasmidsize"><br>
                                                                </div>
                                                                <div>
                                                                    Plasmid File:
                                                                    <input id='plasmidfile' type="file" class="form-control" name="plasmidfile"><br>
                                                                </div>

                                                                <div>
                                                                    Comments:
                                                                    <input value="{{ $record->pcomments }}" id='pcomments' type="text" class="form-control" name="pcomments"><br>
                                                                </div>

                                                            </form>
                                                        @else
                                                            @include(
                                                            'static_profile',
                                                                [
                                                                    'view_type' => $view_type,
                                                                    'record' => $record,
                                                                    'show_view_profile_link' => false
                                                                ]
                                                            )

                                                        @endif
                                                    </div>
                                                @break

                                                @case ('strains')
                                                    <div class="grid grid-cols-2 md:grid-cols-2">

                                                        @if ($is_edit)
                                                            <form id='strains-edit-form' action="/save/strains/{{ $record->id }}" method="POST" role="search">
                                                                @csrf
                                                                <div>
                                                                    Strain Name:
                                                                    <input value="{{ $record->strainname }}" id='sname' type="text" class="form-control" name="strainname"><br>
                                                                </div>
                                                                <div>
                                                                    Date:
                                                                    <input value="{{ $record->sdateentered }}" id='sdate' type="date" class="form-control" name="sdate"><br>
                                                                </div>
                                                                <div>
                                                                    Entered By:
                                                                    <input value="{{ $record->senteredby }}" id='senteredby' type="text" class="form-control" name="senteredby"><br>
                                                                </div>
                                                                <div>
                                                                    Species:
                                                                    <input value="{{ $record->sspecies }}" id='sspecies' type="text" class="form-control" name="sspecies"><br>
                                                                </div>
                                                                <div>
                                                                    MAT:
                                                                    <input value="{{ $record->smat }}" id='smat' type="text" class="form-control" name="smat"><br>
                                                                </div>
                                                                <div>
                                                                    Background:
                                                                    <input value="{{ $record->sbkgnd }}" id='sbkgnd' type="text" class="form-control" name="sbkgnd"><br>
                                                                </div>
                                                                <div>
                                                                    Reporters & Markers:
                                                                    <input value="{{ $record->srepandmarkers }}" id='srepandmarkers' type="text" class="form-control" name="srepandmarkers"><br>
                                                                </div>
                                                                <div>
                                                                    Used Often:
                                                                    <input value="{{ $record->susedoften }}" id='susedoften' type="text" class="form-control" name="susedoften"><br>
                                                                </div>
                                                                <div>
                                                                    Auxotrophies:
                                                                    <input value="{{ $record->sauxotrophies }}" id='sauxotrophies' type="text" class="form-control" name="sauxotrophies"><br>
                                                                </div>
                                                                <div>
                                                                    Cross/Transformation:
                                                                    <input value="{{ $record->sxtransform }}" id='sxtransform' type="text" class="form-control" name="sxtransform"><br>
                                                                </div>
                                                                <div>
                                                                    Source:
                                                                    <input value="{{ $record->ssource }}" id='ssource' type="text" class="form-control" name="ssource"><br>
                                                                </div>
                                                                <div>
                                                                    Comments:
                                                                    <input value="{{ $record->scomments }}" id='scomments' type="text" class="form-control" name="scomments"><br>
                                                                </div>

                                                            </form>
                                                        @else
                                                            @include(
                                                            'static_profile',
                                                                [
                                                                    'view_type' => $view_type,
                                                                    'record' => $record,
                                                                    'show_view_profile_link' => false
                                                                ]
                                                            )
                                                        @endif
                                                    </div>
                                                @break

                                                @case ('nystrains')
                                                    <div class="grid grid-cols-2 md:grid-cols-2">

                                                        @if ($is_edit)
                                                            <form id='nystrains-edit-form' action="/save/nonyeaststrains/{{ $record->id }}" method="POST" role="search">
                                                                @csrf
                                                                <div>
                                                                    Strain Type:
                                                                    <input value="{{ $record->nystraintype }}" id='nystraintype' type="text" class="form-control" name="nystraintype"><br>
                                                                </div>
                                                                <div>
                                                                    Strain Name:
                                                                    <input value="{{ $record->nystrainname }}" id='nystrainname' type="text" class="form-control" name="nystrainname"><br>
                                                                </div>
                                                                <div>
                                                                    Date:
                                                                    <input value="{{ $record->nydate }}" id='nydate' type="date" class="form-control" name="nydate"><br>
                                                                </div>
                                                                <div>
                                                                    Entered By:
                                                                    <input value="{{ $record->nyenteredby }}" id='nyenteredby' type="text" class="form-control" name="nyenteredby"><br>
                                                                </div>
                                                                <div>
                                                                    Genus:
                                                                    <input value="{{ $record->nygenus }}" id='nygenus' type="text" class="form-control" name="nygenus"><br>
                                                                </div>

                                                                <div>
                                                                    Species:
                                                                    <input value="{{ $record->nyspecies }}" id='nyspecies' type="text" class="form-control" name="nyspecies"><br>
                                                                </div>
                                                                <div>
                                                                    Source:
                                                                    <input value="{{ $record->nysource }}" id='nysource' type="text" class="form-control" name="nysource"><br>
                                                                </div>
                                                                <div>
                                                                    Medium of Isolation:
                                                                    <input value="{{ $record->nymedofisolation }}" id='nymedofisolation' type="text" class="form-control" name="nymedofisolation"><br>
                                                                </div>
                                                                <div>
                                                                    Medium for Growth:
                                                                    <input value="{{ $record->nymedforgrowth }}" id='nymedforgrowth' type="text" class="form-control" name="nymedforgrowth"><br>
                                                                </div>
                                                                <div>
                                                                    Comments:
                                                                    <input value="{{ $record->nycomments }}" id='nycomments' type="text" class="form-control" name="nycomments"><br>
                                                                </div>

                                                            </form>

                                                        @else
                                                            @include(
                                                            'static_profile',
                                                                [
                                                                    'view_type' => $view_type,
                                                                    'record' => $record,
                                                                    'show_view_profile_link' => false
                                                                ]
                                                            )

                                                        @endif
                                                    </div>
                                                @break
                                            @endswitch
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-2">
                                <div class'flex item-center'>
                                    <div>
                                    @if (! $is_edit)
                                        <form action='/edit/{{ $view_type }}/{{ $record->id }}' method='GET'>
                                            <button type='submit'>Edit</button>
                                        </form>
                                    @endif
                                    </div>
                                    <div>
                                        <form action="/search/oligos" method="GET" role="search">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type='submit'>Return to Search Results</button>
                                        </form>
                                    </div>

                                    @if ($is_edit)
                                        <div>
                                            <button form="{{ $view_type . '-edit-form' }}" type='submit'>Save</button>
                                        </div>
                                    @endif

                                    <div>
                                        <a href='/'>Home</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

