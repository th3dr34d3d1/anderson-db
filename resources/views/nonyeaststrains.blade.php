<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Non-Yeast Strains Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b-4 border-gray-200">
                    <form action="/search/nystrains" method="GET" role="search">
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
                                            <input type="text" class="form-control" name="qdate"
                                            placeholder="Search Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Search Non-Yeast Strains</button>
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
                <form action="/create/nonyeaststrains" method="POST" role="search">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nystraintype'>Non-Yeast Strain Type</label>
                            <input id='nystraintype' type="text" class="form-control" name="nystraintype">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 input-group flex flex-col">
                            <label for='nyname'>Non-Yeast Strain Name</label>
                            <input id='nyname' type="text" class="form-control" name="nystrainname">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nydate'>Date Made</label>
                            <input id='nydate' type="date" class="form-control" name="nydate">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nyenteredby'>Entered By</label>
                            <input id='nyenteredby' type="text" class="form-control" name="nyenteredby">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nygenus'>Genus</label>
                            <input id= 'nygenus' type="text" class="form-control" name="nygenus">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nyspecies'>Species</label>
                            <input id='nyspecies' type="text" class="form-control" name="nyspecies">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nysource'>Source</label>
                            <input id='nysource' type="text" class="form-control" name="nysource">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nymedofisolation'>Medium of Isolation</label>
                            <input id='nymedofisolation' type="text" class="form-control" name="nymedofisolation">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col">
                            <label for='nymedforgrowth'>Medium for Growth</label>
                            <input id='nymedforgrowth' type="text" class="form-control" name="nymedforgrowth">
                        </div>

                        <div class="ml-4 text-lg leading-7 font-semibold p-4 imt-2 input-group flex flex-col col-span-3">
                            <label for='nycomments'>Comments</label>
                            <textarea id='nycomments' name="nycomments"></textarea>
                        </div>
                    </div>
                    <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Create Non-Yeast Strain</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
