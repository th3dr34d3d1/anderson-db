<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strains Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b-4 border-gray-200">
                    <form action="/search/strains" method="GET" role="search">
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
                        <button class="p-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Search Strains</button>
                    </form>
                </div>

                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Create a New Strain...</h3>
                        @include(
                        'dynamic_profile',
                            [
                                'view_type' => 'strains',
                                'record' => false
                            ]
                        )
                </div>
                </div>
            </div>
        </div>
     </div>
</x-app-layout>
