@extends('layout')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Search the oligo...</h3>
                    <form action="/search/oligos" method="GET" role="search">

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="query"
                            placeholder="Search Text"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            Search the oligo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Create the oligo...</h3>
                    <form action="/create/oligos" method="POST" role="search">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="oligonum"
                            placeholder="Oligos Number"><br>

                            <input type="text" class="form-control" name="pdescription"
                            placeholder="Description"><br>

                            <input type="text" class="form-control" name="sequence"
                            placeholder="Sequence"><br>

                            <input type="text" class="form-control" name="hybridtm"
                            placeholder="HybridTm"><br>

                            <input type="text" class="form-control" name="lengthbases"
                            placeholder="Length Bases"><br>

                            <input type="text" class="form-control" name="madeby"
                            placeholder="Made By"><br>

                            <input type="text" class="form-control" name="designedby"
                            placeholder="Designed By"><br>

                            <input type="text" class="form-control" name="datemade"
                            placeholder="Date Made"><br>

                            <button type="submit" class="btn btn-default">
                            create the oligo
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Search the plasmids ...</h3>
                    <form action="/plasmids_search" method="GET" role="search">

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Strains"><br>


                            <input type="text" class="form-control" name="qenteredby"
                            placeholder="Search Entered By"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            Search the plasma
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Create the plasmids...</h3>
                    <form action="/createtheoligo" method="POST" role="search">
                        @csrf

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Strains"><br>


                            <input type="text" class="form-control" name="qenteredby"
                            placeholder="Search Entered By"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            create the plasma
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Search the oligo...</h3>
                    <form action="/search" method="GET" role="search">

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Strains"><br>

                            <input type="text" class="form-control" name="qenteredby"
                            placeholder="Search Entered By"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            Search the oligo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Create the oligo...</h3>
                    <form action="/createtheoligo" method="POST" role="search">
                        @csrf

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Strains"><br>


                            <input type="text" class="form-control" name="qenteredby"
                            placeholder="Search Entered By"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            create the oligo
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Search the plasmids ...</h3>
                    <form action="/search" method="GET" role="search">

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Strains"><br>


                            <input type="text" class="form-control" name="qenteredby"
                            placeholder="Search Entered By"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            Search the plasma
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Create the plasmids...</h3>
                    <form action="/createtheoligo" method="POST" role="search">
                        @csrf

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Strains"><br>


                            <input type="text" class="form-control" name="qenteredby"
                            placeholder="Search Entered By"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            create the plasma
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
