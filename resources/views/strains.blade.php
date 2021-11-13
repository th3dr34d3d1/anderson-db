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
                                        <input id="search-bar" type="text" class="form-control" name="qstrain"
                                        placeholder="Search Text"><br>

                                        <input type="text" class="form-control" name="qdate"
                                        placeholder="Search Date"><br>

                                        <button type="submit" class="btn btn-default">
                                        Search Strains
                                        </button>
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
                                        <input id='strain' type="text" class="form-control" name="sname"><br>

                                        <label for='straindate'>Date Made</label>
                                        <input id='straindate' type="date" class="form-control" name="sdate"><br>
                                        
                                        <label for='species'>Species</label>
                                        <input id='species' type="text" class="form-control" name="species"><br>

                                        <label for='mat'>MAT</label>
                                        <input id= 'mat' type="text" class="form-control" name="mat"><br>

                                        <label for='senteredby'>Entered By</label>
                                        <input id='senteredby' type="text" class="form-control" name="senteredby"><br>

                                        <label for='background'>Background</label>
                                        <input id='background' type="text" class="form-control" name="background"><br>

                                        <label for='srepandmark'>Reports & Markers</label>
                                        <input id='srepandmark' type="text" class="form-control" name="srepandmark"><br>

                                        <label for='usedoften'>Used Often</label>
                                        <input id='usedoften' type="text" class="form-control" name="usedoften"><br>

                                        <label for='auxotrophies'>Auxotrophies</label>
                                        <input id='auxotrophies' type="text" class="form-control" name="auxotrophies"><br>

                                        <label for='xtrans'>Cross/Transformation</label>
                                        <input id='xtrans' type="text" class="form-control" name="xtrans"><br>
                                        
                                        <label for='ssource'>Source</label>
                                        <input id='ssource' type="text" class="form-control" name="ssource"><br>
                                        
                                        <label for='scomments'>Comments</label>
                                        <input id='scomments' type="text" class="form-control" name="scomments"><br>
                                        
                                        
                                        <button type="submit" class="btn btn-default">
                                        Create Strain
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
