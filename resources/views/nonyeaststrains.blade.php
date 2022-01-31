<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Non-Yeast Strains Database') }}
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
                                <h3>Search Non-Yeast Strains...</h3>
                                <form action="/search/nystrains" method="GET" role="search">

                                    <div class="input-group">
                                        <input id="search-bar" type="text" class="form-control" name="query"
                                        placeholder="Search Text"><br>

                                        <input type="text" class="form-control" name="qdate"
                                        placeholder="Search Date"><br>

                                        <button type="submit" class="btn btn-default">
                                        Search Non-Yeast Strains
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h3>Enter New Non-Yeast Strain...</h3>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $err)
                                        <h4>{{ $err }}</h4>
                                    @endforeach
                                @endif
                                <form action="/create/nonyeaststrains" method="POST" role="search">
                                    @csrf
                                    <div class="input-group">
                                        <label for='nystraintype'>Non-Yeast Strain Type</label>
                                        <input id='nystraintype' type="text" class="form-control" name="nystraintype"><br>

                                        <label for='nyname'>Non-Yeast Strain Name</label>
                                        <input id='nyname' type="text" class="form-control" name="nystrainname"><br>

                                        <label for='nydate'>Date Made</label>
                                        <input id='nydate' type="date" class="form-control" name="nydate"><br>

                                        <label for='nyenteredby'>Entered By</label>
                                        <input id='nyenteredby' type="text" class="form-control" name="nyenteredby"><br>

                                        <label for='nygenus'>Genus</label>
                                        <input id= 'nygenus' type="text" class="form-control" name="nygenus"><br>

                                        <label for='nyspecies'>Species</label>
                                        <input id='nyspecies' type="text" class="form-control" name="nyspecies"><br>

                                        <label for='nysource'>Source</label>
                                        <input id='nysource' type="text" class="form-control" name="nysource"><br>

                                        <label for='nymedofisolation'>Medium of Isolation</label>
                                        <input id='nymedofisolation' type="text" class="form-control" name="nymedofisolation"><br>

                                        <label for='nymedforgrowth'>Medium for Growth</label>
                                        <input id='nymedforgrowth' type="text" class="form-control" name="nymedforgrowth"><br>

                                        <label for='nycomments'>Comments</label>
                                        <input id='nycomments' type="text" class="form-control" name="nycomments"><br>

                                        <button type="submit" class="btn btn-default">
                                        Create Non-Yeast Strain
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
