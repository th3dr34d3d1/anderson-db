@extends('layout')

@section('content')
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
                            <input id-'odescription-input' type="text" class="form-control" name="odescription"><br>

                            <label for='osquence'>Sequence</label>
                            <input id= 'osequence' type="text" class="form-control" name="sequence"><br>

                            <label for='hybridtm'>HybridTm</label>
                            <input id='hybridtm' type="text" class="form-control" name="hybridtm"><br>

                            <label for='lengthbases'>Length Bases</label>
                            <input id='lengthbases' type="text" class="form-control" name="lengthbases"><br>

                            <label for='omadeby'>Made By</label>
                            <input id='omadeby' type="text" class="form-control" name="madeby"><br>

                            <label for='odesignedby'>Designed By</label>
                            <input type="odesignedby" class="form-control" name="designedby"><br>

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

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Search Plasmids ...</h3>
                    <form action="/search/plasmids" method="GET" role="search">

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Text"><br>

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
                    <h3>Enter New Plasmid...</h3>
                    <form action="/create/plasmids" method="POST" role="search">
                        @csrf

                        <div class="input-group">
                            <input type="text" class="form-control" name="plasmidname"
                            placeholder="Plasmid Name"><br>

                            <input type="text" class="form-control" name="pdescription"
                            placeholder="Detailed Name"><br>

                            <input type="text" class="form-control" name="psequence"
                            placeholder="Sequence"><br>

                            <input type="text" class="form-control" name="usage"
                            placeholder="Function/Usage"><br>

                            <input type="text" class="form-control" name="date"
                            placeholder="Date"><br>

                            <input type="text" class="form-control" name="source"
                            placeholder="Source"><br>

                            <input type="text" class="form-control" name="enteredby"
                            placeholder="Entered By"><br>

                            <input type="text" class="form-control" name="concentration"
                            placeholder="Concentration"><br>

                            <input type="text" class="form-control" name="markers"
                            placeholder="Markers"><br>

                            <input type="text" class="form-control" name="plasmidsize"
                            placeholder="Plasmid Size"><br>

                            <input type="text" class="form-control" name="pladmidfile"
                            placeholder="Plasmid File"><br>

                            <input type="text" class="form-control" name="plasmidimage"
                            placeholder="Plasmid Image"><br>

                            <input type="text" class="form-control" name="pcomments"
                            placeholder="Comments"><br>

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

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Search Non-Yeast Strains ...</h3>
                    <form action="/search/nonyeasts" method="GET" role="search">

                        <div class="input-group">
                            <input id="search-bar" type="text" class="form-control" name="qstrain"
                            placeholder="Search Text"><br>

                            <input type="text" class="form-control" name="qdate"
                            placeholder="Search Date"><br>

                            <button type="submit" class="btn btn-default">
                            Search Non-Yeasts
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">
                    <h3>Enter Non-Yeast Strain...</h3>
                    <form action="/create/nonyeasts" method="POST" role="search">
                        @csrf

                        <div class="input-group">
                            <input type="text" class="form-control" name="nystraintype"
                            placeholder="Strain Type"><br>

                            <input type="text" class="form-control" name="nystrainnum"
                            placeholder="Strain Number"><br>

                            <input type="text" class="form-control" name="nyenteredby"
                            placeholder="Entered By"><br>

                            <input type="text" class="form-control" name="nydate"
                            placeholder="Date"><br>

                            <input type="text" class="form-control" name="nystrainname"
                            placeholder="Strain Name"><br>

                            <input type="text" class="form-control" name="nygenus"
                            placeholder="Genus"><br>

                            <input type="text" class="form-control" name="nyspecies"
                            placeholder="Species"><br>

                            <input type="text" class="form-control" name="nysource"
                            placeholder="Source"><br>

                            <input type="text" class="form-control" name="nymedium"
                            placeholder="Medium of Isolation"><br>

                            <input type="text" class="form-control" name="nygrowth"
                            placeholder="Medium for Growth"><br>

                            <input type="text" class="form-control" name="pcomments"
                            placeholder="Comments"><br>

                            <button type="submit" class="btn btn-default">
                            Create Non-Yeast Strain
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
