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
                                <h3>Search Oligos...</h3>
                                <form action="/search/oligos" method="GET" role="search">

                                    <div class="input-group">
                                        <input id="search-bar" type="text" class="form-control" name="query"
                                        placeholder="Search Text"><br>

                                        <input type="text" class="form-control" name="qdate"
                                        placeholder="Search Date"><br>

                                        <button type="submit" class="btn btn-default">
                                        Search Oligos
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h3>Enter New Oligo...</h3>
                                @if ($errors->any()) 
                                    @foreach ($errors->all() as $err)
                                        <h4>{{ $err }}</h4>
                                    @endforeach
                                @endif
                                <form action="/create/oligos" method="POST" role="search">
                                    @csrf
                                    <div class="input-group">
                                        <label for='oligonum-input'>Oligos Num</label>
                                        <input id='oligonum-input' type="integer" class="form-control" name="oligonum"><br>

                                        <label for='oligoname-input'>Oligos Name</label>
                                        <input id='oligoname-input' type="text" class="form-control" name="oname"><br>
                                        
                                        <label for='odescription-input'>Description</label>
                                        <input id='odescription-input' type="text" class="form-control" name="odescription"><br>

                                        <label for='osquence'>Sequence</label>
                                        <input id= 'osequence' type="text" class="form-control" name="sequence"><br>

                                        <label for='hybridtm'>HybridTm</label>
                                        <input id='hybridtm' type="text" class="form-control" name="hybridtm"><br>

                                        <label for='lengthbases'>Length Bases</label>
                                        <input id='lengthbases' type="text" class="form-control" name="lengthbases"><br>

                                        <label for='omadeby'>Made By</label>
                                        <input id='omadeby' type="text" class="form-control" name="madeby"><br>

                                        <label for='odesignedby'>Designed By</label>
                                        <input id='odesignedby' type="text" class="form-control" name="designedby"><br>

                                        <label for='odatemade'>Date Made</label>
                                        <input id='odatemade' type="date" class="form-control" name="datemade"><br>

                                        <button type="submit" class="btn btn-default">
                                        Create Oligo
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
