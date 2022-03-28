<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strains Database') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h3>Search Strains...</h3>
                                <form action="/search/strains" method="GET" role="search">

                                    <div class="input-group">
                                        <input id="id-search-bar" type="text" class="form-control" name="id"
                                        placeholder="Search By ID"><br>
                                        
                                        <input id="search-bar" type="text" class="form-control" name="query"
                                        placeholder="Search Text"><br>

                                        <input type="date" class="form-control" name="qdate"
                                        placeholder="Search Date"><br>

                                        <br>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Search Strains</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h3>Enter New Strain...</h3>

                                <form action="/create/strains" method="POST" role="search">
                                    @csrf
                                    <div class="input-group">
                                        <label for='strain'>Strain Name</label>
                                        <input id='strain' type="text" class="form-control" name="strainname"><br>

                                        <label for='straindate'>Date Made</label>
                                        <input id='straindate' type="date" class="form-control" name="sdate"><br>
                                        
                                        <label for='species'>Species</label>
                                        <input id='species' type="text" class="form-control" name="sspecies"><br>

                                        <label for='mat'>MAT</label>
                                        <input id= 'mat' type="text" class="form-control" name="smat"><br>

                                        <label for='senteredby'>Entered By</label>
                                        <input id='senteredby' type="text" class="form-control" name="senteredby"><br>

                                        <label for='background'>Background</label>
                                        <input id='background' type="text" class="form-control" name="sbkgnd"><br>

                                        <label for='srepandmark'>Reports & Markers</label>
                                        <input id='srepandmark' type="text" class="form-control" name="srepandmarkers"><br>

                                        <label for='usedoften'>Used Often</label>
                                        <input id='usedoften' type="text" class="form-control" name="susedoften"><br>

                                        <label for='auxotrophies'>Auxotrophies</label>
                                        <input id='auxotrophies' type="text" class="form-control" name="sauxotrophies"><br>

                                        <label for='xtrans'>Cross/Transformation</label>
                                        <input id='xtrans' type="text" class="form-control" name="sxtransform"><br>
                                        
                                        <label for='ssource'>Source</label>
                                        <input id='ssource' type="text" class="form-control" name="ssource"><br>
                                        
                                        <label for='scomments'>Comments</label>
                                        <input id='scomments' type="text" class="form-control" name="scomments"><br>
                                        
                                        <br>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Create Strain</button>
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
