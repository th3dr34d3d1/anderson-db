<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plasmids Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h3>Search Plasmids...</h3>
                                <form action="/search/plasmids" method="GET" role="search">

                                    <div class="input-group">
                                        <input id="search-bar" type="text" class="form-control" name="query"
                                        placeholder="Search Text"><br>

                                        <input type="text" class="form-control" name="qdate"
                                        placeholder="Search Date"><br><br>

                                        <button type="submit" class="btn btn-default">
                                        Search Plasmids
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h3>Enter New Plasmid...</h3>
                                @if ($errors->any()) 
                                    @foreach ($errors->all() as $err)
                                        <h4>{{ $err }}</h4>
                                    @endforeach
                                @endif
                                <form action="/create/plasmids" method="POST" role="search">
                                    @csrf
                                    <div class="input-group">
                                        <label for='plasmidname'>Plasmid Name</label>
                                        <input id='plasmidname' type="text" class="form-control" name="plasmidname"><br>

                                        <label for='pdname'>Detailed Name</label>
                                        <input id='pdname' type="text" class="form-control" name="pdname"><br>
                                        
                                        <label for='pdatemade'>Date Made</label>
                                        <input id='pdatemade' type="date" class="form-control" name="pdatemade"><br><br>
                                        
                                        <label for='penteredby'>Entered By</label>
                                        <input id='penteredby' type="text" class="form-control" name="penteredby"><br>
                                        
                                        <label for='psequence'>Sequence</label>
                                        <input id='psequence' type="text" class="form-control" name="psequence"><br>

                                        <label for='pusage'>Function/Usage</label>
                                        <input id= 'pusage' type="text" class="form-control" name="pusage"><br>

                                        <label for='psource'>Source</label>
                                        <input id='psource' type="text" class="form-control" name="psource"><br>

                                        <label for='pconcentration'>Concentration</label>
                                        <input id='pconcentration' type="text" class="form-control" name="pconcentration"><br>

                                        <label for='pmarkers'>Markers</label>
                                        <input id='pmarkers' type="text" class="form-control" name="pmarkers"><br>

                                        <label for='plasmidsize'>Plasmid Size</label>
                                        <input id='plasmidsize' type="text" class="form-control" name="plasmidsize"><br>

                                        <label for='plasmidfile'>Plasmid File</label>
                                        <input type="file" class="form-control" name="plasmidfile"><br>

                                        <label for='pcomments'>Comments</label>
                                        <input id='pcomments' type="text" class="form-control" name="pcomments"><br><br>

                                        <button type="submit" class="btn default">
                                        Create Plasmid
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
