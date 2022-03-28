<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plasmids Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b-4 border-gray-200">
                    <form action="/search/plasmids" method="GET" role="search">
                        <div class="grid grid-cols-1 md:grid-cols-3">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold">
                                        <div class="input-group">
                                            <input id="id-search-bar" type="text" class="form-control" name="id"
                                            placeholder="Search By ID">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold">
                                        <div class="input-group">
                                            <input id="search-bar" type="text" class="form-control" name="query"
                                            placeholder="Search Text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="qdate"
                                            placeholder="Search Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Search Plasmids</button>
                    </form>
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <h4>{{ $err }}</h4>
                    @endforeach
                @endif

                <div class="ml-4 text-lg leading-7 font-semibold p-4">
                    <h1>Create a New Plasmid...</h1>
                </div>
                <form action="/create/plasmids" method="POST" role="search" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='plasmidname'>Plasmid Name</label>
                            <input id='plasmidname' type="text" class="form-control" name="plasmidname">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                            <label for='pdname'>Detailed Name</label>
                            <input id='pdname' type="text" class="form-control" name="pdname">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='pdatemade'>Date Made</label>
                            <input id='pdatemade' type="date" class="form-control" name="pdatemade">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='penteredby'>Entered By</label>
                            <input id='penteredby' type="text" class="form-control" name="penteredby">
                        </div>


                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='pusage'>Function/Usage</label>
                            <input id= 'pusage' type="text" class="form-control" name="pusage">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='psource'>Source</label>
                            <input id='psource' type="text" class="form-control" name="psource">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='pconcentration'>Concentration</label>
                            <input id='pconcentration' type="text" class="form-control" name="pconcentration">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='pmarkers'>Markers</label>
                            <input id='pmarkers' type="text" class="form-control" name="pmarkers">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='plasmidsize'>Plasmid Size</label>
                            <input id='plasmidsize' type="text" class="form-control" name="plasmidsize">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                            <label for='psequence'>Sequence</label>
                            <textarea id='psequence' class="form-control" name="psequence"></textarea>
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col col-span-3">
                            <label for='pcomments'>Comments</label>
                            <textarea id='pcomments' class="form-control" name="pcomments"></textarea>
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
                    <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Create Plasmid</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
