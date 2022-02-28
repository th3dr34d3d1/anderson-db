<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Oligos Database') }}
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
                                            <input id="id-search-bar" type="text" class="form-control" name="id"
                                             placeholder="Search By ID"><br>
                                            
                                            <input id="search-bar" type="text" class="form-control" name="query"
                                            placeholder="Search Text"><br>

                                            <input type="text" class="form-control" name="qdate"
                                            placeholder="Search Date"><br>

                                            <br>
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Search Oligos</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <h2>Enter New Oligo...</h2>

                                    <form action="/create/oligos" method="POST" role="search">
                                        @csrf
                                        <div class="input-group">
                                            <label for='oligoname-input'>Oligo Name</label>
                                            <input id='oligoname-input' type="text" class="form-control" name="oname"><br>
                                           
                                            <label for='odatemade'>Date Made</label>
                                            <input id='odatemade' type="date" class="form-control" name="datemade"><br>

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

                                            <br>
                                            <button id='create-oligos-btn' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" type='submit'>Create Oligo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>

    const create_oligos_btn = document.getElementById('create-oligos-btn');
    function validate_fields(ev) {
        const date = document.getElementById('odatemade');
        const name = document.getElementById('oligoname-input');
        let error = false;
        let msg = '';

        if (! name.value 
            || ! date.value
        ) {
            error = true;
            if (! name.value) {
                msg += "Missing name!\n"
            }
            if (! date.value) {
                msg += "Missing date!\n"
            }
            

        }
        
        if (error) {
            ev.preventDefault();
            alert(msg);
        }
    }

    create_oligos_btn.addEventListener('click', validate_fields);
</script>
