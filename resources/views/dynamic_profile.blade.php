
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
                <div class="ml-4 text-lg leading-7 font-semibold" style="font-size: 20px;">
                        @switch ($view_type)
                            @case ('oligos')
                                <form action="{{ ($record) ? '/save/oligos/' . $record->id : 'create/oligos' }}" method="POST" role="search" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-1 md:grid-cols-3">
                                        @if ($record)
                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <p>Oligo Number : {{ $record->id }}</p>
                                           </div>
                                        @endif

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='oligoname-input'>Oligo Name</label>
                                            <input value="{{ ($record) ? $record->oname : null }}" id='oligoname-input' type="text" class="form-control" name="oname"><br>
                                        </div>
                                       
                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='odatemade'>Date Made</label>
                                            <input value="{{ ($record) ? $record->datemade : null }}" id='odatemade' type="date" class="form-control" name="datemade"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='hybridtm'>HybridTm</label>
                                            <input value="{{ ($record) ? $record->hybridtm : null }}" id='hybridtm' type="text" class="form-control" name="hybridtm"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='lengthbases'>Length Bases</label>
                                            <input value="{{ ($record) ? $record->lengthbases : null }}" id='lengthbases' type="text" class="form-control" name="lengthbases"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='omadeby'>Made By</label>
                                            <input value="{{ ($record) ? $record->madeby : null }}" id='omadeby' type="text" class="form-control" name="madeby"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='odesignedby'>Designed By</label>
                                            <input value="{{ ($record) ? $record->designedby : null }}" id='odesignedby' type="text" class="form-control" name="designedby"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                                            <label for='osquence'>Sequence</label>
                                            <textarea id='osequence' type="text" class="form-control" name="osequence">{{ ($record) ? $record->osequence : null }}</textarea><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                                            <label for='odescription-input'>Description</label>
                                            <textarea id='odescription' type="text" class="form-control" name="odescription">{{ ($record) ? $record->odescription : null }}</textarea><br>
                                        </div>

                                        <br>
                                    </div>
                                    <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>{{ ($record) ? 'Save' : 'Create' }} Oligo</button>
                                </form>

                            @break

                            @case ('plasmids')
                                <form action="{{ ($record) ? '/save/plasmids/' . $record->id : 'create/plasmids' }}" method="POST" role="search" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-1 md:grid-cols-3">
                                        @if ($record)
                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <p>Plasmid Name : P{{ $record->id }}</p>
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
                                <form action="{{ ($record) ? '/save/strains/' . $record->id : 'create/strains' }}" method="POST" role="search" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-1 md:grid-cols-3">
                                        @if ($record)
                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <p>Strain Number : {{ $record->id }}</p>
                                            </div>
                                        @endif

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='strain'>Strain Name</label>
                                            <input value="{{ ($record) ? $record->strainname : null }}" id='strain' type="text" class="form-control" name="strainname"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='straindate'>Date Made</label>
                                            <input value="{{ ($record) ? $record->sdate : null }}" id='straindate' type="date" class="form-control" name="sdate"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='species'>Species</label>
                                            <input value="{{ ($record) ? $record->sspecies : null }}" id='species' type="text" class="form-control" name="sspecies"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='mat'>MAT</label>
                                            <input value="{{ ($record) ? $record->smat : null }}" id= 'mat' type="text" class="form-control" name="smat"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='senteredby'>Entered By</label>
                                            <input value="{{ ($record) ? $record->senteredby : null }}" id='senteredby' type="text" class="form-control" name="senteredby"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='background'>Background</label>
                                            <input value="{{ ($record) ? $record->sbkgnd : null }}" id='background' type="text" class="form-control" name="sbkgnd"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='srepandmark'>Reports & Markers</label>
                                            <input value="{{ ($record) ? $record->srepandmarkers : null }}" id='srepandmark' type="text" class="form-control" name="srepandmarkers"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='usedoften'>Used Often</label>
                                            <input value="{{ ($record) ? $record->susedoften : null }}" id='usedoften' type="text" class="form-control" name="susedoften"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='auxotrophies'>Auxotrophies</label>
                                            <input value="{{ ($record) ? $record->sauxotrophies : null }}" id='auxotrophies' type="text" class="form-control" name="sauxotrophies"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='xtrans'>Cross/Transformation</label>
                                            <input value="{{ ($record) ? $record->sxtransform : null }}" id='xtrans' type="text" class="form-control" name="sxtransform"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span">
                                            <label for='ssource'>Source</label>
                                            <input value="{{ ($record) ? $record->ssource : null }}" id='ssource' type="text" class="form-control" name="ssource"><br>
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                                            <label for='scomments'>Comments</label>
                                            <textarea id='scomments' type="text" class="form-control" name="scomments">{{ ($record) ? $record->scomments : null }}</textarea><br>
                                        </div>

                                        <br>
                                    </div>
                                    <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>{{ ($record) ? 'Save' : 'Create' }} Strain</button>
                                </form>
                            @break

                            @case ('nystrains')
                                <form action="{{ ($record) ? '/save/nystrains/' . $record->id : 'create/nystrains' }}" method="POST" role="search" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-1 md:grid-cols-3">
                                        @if ($record)
                                            <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                                <p>Non-Yeast Strain Number: {{ $record->id }}</p>
                                           </div>
                                        @endif
                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nystraintype'>Non-Yeast Strain Type</label>
                                            <input value="{{ ($record) ? $record->nystraintype : null }}" id='nystraintype' type="text" class="form-control" name="nystraintype">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                                            <label for='nyname'>Non-Yeast Strain Name</label>
                                            <input value="{{ ($record) ? $record->nystrainname : null }}" id='nyname' type="text" class="form-control" name="nystrainname">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nydate'>Date Made</label>
                                            <input value="{{ ($record) ? $record->nydate : null }}" id='nydate' type="date" class="form-control" name="nydate">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nyenteredby'>Entered By</label>
                                            <input value="{{ ($record) ? $record->nyenteredby : null }}" id='nyenteredby' type="text" class="form-control" name="nyenteredby">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nygenus'>Genus</label>
                                            <input value="{{ ($record) ? $record->nygenus : null }}" id= 'nygenus' type="text" class="form-control" name="nygenus">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nyspecies'>Species</label>
                                            <input value="{{ ($record) ? $record->nyspecies : null }}" id='nyspecies' type="text" class="form-control" name="nyspecies">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nysource'>Source</label>
                                            <input value="{{ ($record) ? $record->nysource : null }}" id='nysource' type="text" class="form-control" name="nysource">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nymedofisolation'>Medium of Isolation</label>
                                            <input value="{{ ($record) ? $record->nymedofisolation : null }}" id='nymedofisolation' type="text" class="form-control" name="nymedofisolation">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                                            <label for='nymedforgrowth'>Medium for Growth</label>
                                            <input value="{{ ($record) ? $record->nymedforgrowth : null }}" id='nymedforgrowth' type="text" class="form-control" name="nymedforgrowth">
                                        </div>

                                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                                            <label for='nycomments'>Comments</label>
                                            <textarea id='nycomments' type="text" class="form-control" name="nycomments">{{ ($record) ? $record->nycomments : null }}</textarea><br>
                                        </div>
                                    </div>
                                    <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>{{ ($record) ? 'Save' : 'Create' }} Non-Yeast Strain</button>
                                </form>
                            @break
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>

