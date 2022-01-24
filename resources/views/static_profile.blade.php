
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @switch ($view_type)
            @case ('oligos')
                Oligos-ID: {{ $record->id }}
                @if ($show_view_profile_link)
                    <br/>
                    <a href={{ url('/profile/oligos/' . $record->id) }}>
                        <span class='text-base'>View Profile</span>
                    </a>
                @endif
            @break

            @case ('plasmids')
                Plasmid-ID: {{ $record->id }}
                @if ($show_view_profile_link)
                    <br/>
                    <a href={{ url('/profile/plasmids/' . $record->id) }}>
                        <span class='text-base'>View Profile</span>
                    </a>
                @endif
            @break

            @case ('strains')
                Strains-ID: {{ $record->id }}
                @if ($show_view_profile_link)
                    <br/>
                    <a href={{ url('/profile/strains/' . $record->id) }}>
                        <span class='text-base'>View Profile</span>
                    </a>
                @endif
            @break

            @case ('nystrains')
                NyStrains-ID: {{ $record->id }}
                @if ($show_view_profile_link)
                    <br/>
                    <a href={{ url('/profile/nonyeaststrains/' . $record->id) }}>
                        <span class='text-base'>View Profile</span>
                    </a>
                @endif
            @break
        @endswitch
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div class="p-6">
                            <div class="flex">
                                <div class="ml-4 text-lg leading-7 font-semibold" style="font-size: 20px;">
                                        @switch ($view_type)
                                            @case ('oligos')
                                                <div class="grid grid-cols-1 md:grid-cols-1">
                                                    <div>
                                                        Oligos Number:
                                                        <span class='text-base'>{{ $record->id }}</span>
                                                    </div>
                                                    <div>
                                                        Name:
                                                        <span class='text-base'>{{ $record->oname }}</span>
                                                    </div>
                                                    <div>
                                                        Description:
                                                        <span class='text-base'>{{ $record->odescription }}</span>
                                                    </div>
                                                    <div>
                                                        Sequence:
                                                        <span class='text-base'>{{ $record->sequence }}</span>
                                                    </div>
                                                    <div>
                                                        HybridTm:
                                                        <span class='text-base'>{{ $record->hybridtm }}</span>
                                                    </div>
                                                    <div>
                                                        LengthBases:
                                                        <span class='text-base'>{{ $record->lengthbases }}</span>
                                                    </div>
                                                    <div>
                                                        Designed By:
                                                        <span class='text-base'>{{ $record->designedby }}</span>
                                                    </div>
                                                    <div>
                                                        Made By:
                                                        <span class='text-base'>{{ $record->madeby }}</span>
                                                    </div>
                                                    <div>
                                                        Date Made:
                                                        <span class='text-base'>{{ $record->datemade }}</span>
                                                    </div>
                                                </div>

                                            @break

                                            @case ('plasmids')
                                                <div class="grid grid-cols-1 md:grid-cols-1">
                                                    <div>
                                                        Plasmid Number:
                                                        <span class='text-base'>{{ $record->id }}</span>
                                                    </div>
                                                    <div>
                                                        Plasmid Name:
                                                        <span class='text-base'>{{ $record->plasmidname }}</span>
                                                    </div>
                                                    <div>
                                                        Detailed Name:
                                                        <span class='text-base'>{{ $record->pdname }}</span>
                                                    </div>
                                                    <div>
                                                        Date Made:
                                                        <span class='text-base'>{{ $record->pdatemade }}</span>
                                                    </div>
                                                    <div>
                                                        Entered By:
                                                        <span class='text-base'>{{ $record->penteredby }}</span>
                                                    </div>
                                                    <div>
                                                        Sequence:
                                                        <span class='text-base'>{{ $record->psequence }}</span>
                                                    </div>
                                                    <div>
                                                        Function/Usage:
                                                        <span class='text-base'>{{ $record->pusage }}</span>
                                                    </div>
                                                    <div>
                                                        Source:
                                                        <span class='text-base'>{{ $record->psource }}</span>
                                                    </div>
                                                    <div>
                                                        Concentration:
                                                        <span class='text-base'>{{ $record->pconcentration }}</span>
                                                    </div>
                                                    <div>
                                                        Markers:
                                                        <span class='text-base'>{{ $record->pmarkers }}</span>
                                                    </div>
                                                    <div>
                                                        Plasmid Size:
                                                        <span class='text-base'>{{ $record->plasmidsize }}</span>
                                                    </div>
                                                    <div>
                                                        Plasmid File:
                                                        <span class='text-base'>{{ $record->plasmidfile }}</span>
                                                    </div>
                                                    <div>
                                                        Plasmid Image:
                                                        <span class='text-base'>{{ $record->plasmidimage }}</span>
                                                    </div>
                                                    <div>
                                                        Comments:
                                                        <span class='text-base'>{{ $record->pcomments }}</span>
                                                    </div>
                                                </div>
                                            @break

                                            @case ('strains')
                                                <div class="grid grid-cols-1 md:grid-cols-1">
                                                    <div>
                                                        Strain Number:
                                                        <span class='text-base'>{{ $record->id }}</span>
                                                    </div>
                                                    <div>
                                                        Strain Name:
                                                        <span class='text-base'>{{ $record->strainname }}</span>
                                                    </div>
                                                    <div>
                                                        Date:
                                                        <span clss='text-base'>{{ $record->sdateentered }}</span>
                                                    </div>
                                                    <div>
                                                        Entered By:
                                                        <span class='text-base'>{{ $record->senteredby }}</span>
                                                    </div>
                                                    <div>
                                                        Species:
                                                        <span class='text-base'>{{ $record->sspecies }}</span>
                                                    </div>
                                                    <div>
                                                        MAT:
                                                        <span class='text-base'>{{ $record->smat }}</span>
                                                    </div>
                                                    <div>
                                                        Background:
                                                        <span class='text-base'>{{ $record->sbkgnd }}</span>
                                                    </div>
                                                    <div>
                                                        Reports & Markers:
                                                        <span class='text-base'>{{ $record->srepandmarkers }}</span>
                                                    </div>
                                                    <div>
                                                        Used Often:
                                                        <span class='text-base'>{{ $record->susedoften }}</span>
                                                    </div>
                                                    <div>
                                                        Auxotrophies:
                                                        <span class='text-base'>{{ $record->sauxotrophies }}</span>
                                                    </div>
                                                    <div>
                                                        Cross/Transformation:
                                                        <span class='text-base'>{{ $record->sxtransform }}</span>
                                                    </div>
                                                    <div>
                                                        Source:
                                                        <span class='text-base'>{{ $record->ssource }}</span>
                                                    </div>
                                                    <div class='row-span-3'>
                                                        Comments:
                                                        <span class='text-base'>{{ $record->scomments }}</span>
                                                    </div>
                                                </div>
                                            @break

                                            @case ('nystrains')
                                                <div class="grid grid-cols-1 md:grid-cols-1">
                                                    <div>
                                                        Strain Number:
                                                        <span class='text-base'>{{ $record->id }}</span>
                                                    </div>
                                                    <div>
                                                        Strain Type:
                                                        <span class='text-base'>{{ $record->nystraintype }}</span>
                                                    </div>
                                                    <div>
                                                        Strain Name:
                                                        <span class='text-base'>{{ $record->nystrainname }}</span>
                                                    </div>
                                                    <div>
                                                        Date:
                                                        <span class='text-base'>{{ $record->nydate }}</span>
                                                    </div>
                                                    <div>
                                                        Entered By:
                                                        <span class='text-base'>{{ $record->nyenteredby }}</span>
                                                    </div>
                                                    <div>
                                                        Genus:
                                                        <span class='text-base'>{{ $record->nygenus }}</span>
                                                    </div>
                                                    <div>
                                                        Species:
                                                        <span class='text-base'>{{ $record->nyspecies }}</span>
                                                    </div>
                                                    <div>
                                                        Source:
                                                        <span class='text-base'>{{ $record->nysource }}</span>
                                                    </div>
                                                    <div>
                                                        Medium of Isolation:
                                                        <span class='text-base'>{{ $record->nymedofisolation }}</span>
                                                    </div>
                                                    <div>
                                                        Medium for Growth:
                                                        <span class='text-base'>{{ $record->nymedforgrowth }}</span>
                                                    </div>
                                                    <div>
                                                        Comments:
                                                        <span class='text-base'>{{ $record->nycomments }}</span>
                                                    </div>
                                                </div>
                                            @break
                                        @endswitch
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

