
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @switch ($view_type)
            @case ('oligos')
                <div class='p-6'>
                    Oligos-ID: {{ $record->id }}
                </div>

                @if ($show_view_profile_link)
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/profile/oligos/' . $record->id) }}>View Profile</a>
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/edit/oligos/' . $record->id) }}>Edit</a>
                @endif
            @break

            @case ('plasmids')
                <div class='p-6'>
                    Plasmid-ID: {{ $record->id }}
                </div>
                @if ($show_view_profile_link)
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/profile/plasmids/' . $record->id) }}>View Profile</a>
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/edit/plasmids/' . $record->id) }}>Edit</a>
                @endif
            @break

            @case ('strains')
                <div class='p-6'>
                    Strains-ID: {{ $record->id }}
                </div>
                @if ($show_view_profile_link)
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/profile/strains/' . $record->id) }}>View Profile</a>
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/edit/strains/' . $record->id) }}>Edit</a>
                @endif
            @break

            @case ('nystrains')
                <div class='p-6'>
                    NyStrains-ID: {{ $record->id }}
                </div>
                @if ($show_view_profile_link)
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/profile/nonyeaststrains/' . $record->id) }}>View Profile</a>
                    <a class='m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded p-2' href={{ url('/edit/nonyeaststrains/' . $record->id) }}>Edit</a>
                @endif
            @break
        @endswitch
    </h2>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @switch ($view_type)
                    @case ('oligos')
                        <div class="grid grid-cols-1 md:grid-cols-3">
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Oligos Number:<br>
                                <span class='text-base'>{{ $record->id }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Name:<br>
                                <span class='text-base'>{{ $record->oname }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                HybridTm:
                                <span class='text-base'>{{ $record->hybridtm }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                LengthBases:
                                <span class='text-base'>{{ $record->lengthbases }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Designed By:
                                <span class='text-base'>{{ $record->designedby }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Made By:
                                <span class='text-base'>{{ $record->madeby }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Date Made:
                                <span class='text-base'>{{ $record->datemade }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col col-span-3">
                                Description:
                                <textarea readonly class='text-base'>{{ $record->odescription }}</textarea>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col col-span-3">
                                Sequence:
                                <textarea readonly class='text-base'>{{ $record->sequence }}</textarea>
                            </div>
                        </div>

                    @break

                    @case ('plasmids')
                        <div class="grid grid-cols-1 md:grid-cols-3">
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Plasmid Name:
                                <span class='text-base'>P{{ $record->id }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Detailed Name:
                                <span class='text-base'>{{ $record->pdname }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Date Made:
                                <span class='text-base'>{{ $record->pdatemade }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Entered By:
                                <span class='text-base'>{{ $record->penteredby }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Function/Usage:
                                <span class='text-base'>{{ $record->pusage }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Source:
                                <span class='text-base'>{{ $record->psource }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Concentration:
                                <span class='text-base'>{{ $record->pconcentration }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Markers:
                                <span class='text-base'>{{ $record->pmarkers }}</span>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Plasmid Size:
                                <span class='text-base'>{{ $record->plasmidsize }}</span>
                            </div>

                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col col-span-3">
                                Sequence:
                                <textarea readonly class='text-base'>{{ $record->psequence }}</textarea>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col col-span-3">
                                Comments:
                                <textarea readonly class='text-base'>{{ $record->pcomments }}</textarea>
                            </div>

                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                Plasmid File:
                                <a href={{ url('/download/plasmid/' .$record->id) }}> <span class='text-base'>{{ $record->dna_filename }}</span></a>
                            </div>
                            @if ($record->img_filepath)
                                <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                    Plasmid Image:
                                    <a href={{ url('/download/plasmidimage/' .$record->id) }}> <span class='text-base'>{{ $record->img_filename }}</span></a>
                                        <!--
                                        <img src="{{ asset($record->img_filepath) }}">
                                        <img src="{{ asset('/unique/test.jpg') }}">
                                        -->
                                </div>
                            @endif
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

