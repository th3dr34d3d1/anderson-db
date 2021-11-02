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
                                        <input type="text" class="form-control" name="strainnum"
                                        placeholder="Strain Number"><br>

                                        <input type="text" class="form-control" name="sdate"
                                        placeholder="Date"><br>

                                        <input type="text" class="form-control" name="sname"
                                        placeholder="Strain Name"><br>

                                        <input type="text" class="form-control" name="species"
                                        placeholder="Species"><br>

                                        <input type="text" class="form-control" name="mat"
                                        placeholder="MAT"><br>

                                        <input type="text" class="form-control" name="senteredby"
                                        placeholder="Entered By"><br>

                                        <input type="text" class="form-control" name="sbackground"
                                        placeholder="Background"><br>

                                        <input type="text" class="form-control" name="usedoften"
                                        placeholder="Used Often"><br>

                                        <input type="text" class="form-control" name="repandmark"
                                        placeholder="Reporters & Markers"><br>

                                        <input type="text" class="form-control" name="auxotrophies"
                                        placeholder="Auxotrophies"><br>

                                        <input type="text" class="form-control" name="xtransform"
                                        placeholder="Cross/Transformation"><br>

                                        <input type="text" class="form-control" name="ssource"
                                        placeholder="Source"><br>

                                        <input type="text" class="form-control" name="datemade"
                                        placeholder="Comments"><br>

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
