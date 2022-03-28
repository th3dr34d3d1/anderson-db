
    @if ($record)
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @switch ($view_type)
                @case ('oligos')
                    <div class='p-6'>
                        Oligos-ID: {{ $record->id }}
                    </div>

                @break

                @case ('plasmids')
                    <div class='p-6'>
                        Plasmid-ID: {{ $record->id }}
                    </div>
                @break

                @case ('strains')
                    <div class='p-6'>
                        Strains-ID: {{ $record->id }}
                    </div>
                @break

                @case ('nystrains')
                    <div class='p-6'>
                        NyStrains-ID: {{ $record->id }}
                    </div>
                @break
            @endswitch
        </h2>
    @endif

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex">
                    <div class="ml-4 text-lg leading-7 font-semibold" style="font-size: 20px;">
                            @switch ($view_type)
                                @case ('oligos')

                                @break

                                @case ('plasmids')
                                    <form action="{{ ($record) ? '/save/plasmids/' . $record->id : 'create/plasmids' }}" method="POST" role="search" enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid grid-cols-1 md:grid-cols-3">
                                            @if ($record)
                                                <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                    <p for='plasmidname'>Plasmid Name : P{{ $record->id }}</p>
                                                </div>
                                            @endif

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                                <label for='pdname'>Detailed Name</label>
                                                <input value="{{ ($record) ? $record->pdname : null }}" id='pdname' type="text" class="form-control" name="pdname"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='pdatemade'>Date Made</label>
                                                <input value="{{ ($record) ? $record->pdatemade : null }}" id='pdatemade' type="date" class="form-control" name="pdatemade"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='penteredby'>Entered By</label>
                                                <input value="{{ ($record) ? $record->penteredby : null }}" id='penteredby' type="text" class="form-control" name="penteredby"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='pusage'>Function/Usage</label>
                                                <input value="{{ ($record) ? $record->pusage : null }}" id='pusage' type="text" class="form-control" name="pusage"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='psource'>Source</label>
                                                <input value="{{ ($record) ? $record->psource : null }}" id='psource' type="text" class="form-control" name="psource"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='pconcentration'>Concentration</label>
                                                <input value="{{ ($record) ? $record->pconcentration : null }}" id='pconcentration' type="text" class="form-control" name="pconcentration"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='pmarkers'>Markers</label>
                                                <input value="{{ ($record) ? $record->pmarkers : null }}" id='pmarkers' type="text" class="form-control" name="pmarkers"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='plasmidsize'>Plasmid Size</label>
                                                <input value="{{ ($record) ? $record->plasmidsize : null }}" id='plasmidsize' type="text" class="form-control" name="plasmidsize"><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                                                <label for='psequence'>Sequence</label>
                                                <textarea  id='psequence' type="text" class="form-control" name="psequence">{{ ($record) ? $record->psequence : null }}</textarea>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col col-span-3">
                                                <label for='pcomments'>Comments</label>
                                                <textarea id='pcomments' type="text" class="form-control" name="pcomments">{{ ($record) ? $record->pcomments : null }}</textarea><br>
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='plasmidfile'>Plasmid File</label>
                                                <input type="file" class="form-control" name="plasmidfile">
                                            </div>

                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <label for='plasmidimage'>Plasmid Image</label>
                                                <input type="file" class="form-control" name="plasmidimage">
                                            </div>

                                        </div>
                                        <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>{{ ($record) ? 'Save' : 'Create' }} Plasmid</button>
                                    </form>
                                @break

                                @case ('strains')
                                @break

                                @case ('nystrains')
                                @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

