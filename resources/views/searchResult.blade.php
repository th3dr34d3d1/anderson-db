@extends('layout')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-1">
        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold">


                    <table>
                        @switch ($view_type)
                            @case ('oligos')
                                <th>Oligos Number</th>
                                <th>Description</th>
                                <th>Sequence</th>
                                <th>HybridTm</th>
                                <th>LengthBases</th>
                                <th>Designed By</th>
                                <th>Made By</th>
                                @foreach ($results as $result)
                                    <tr>
                                        <td>
                                            <a href={{ url('/profile/' . $result->id) }}>
                                                {{ $result->oligonum }}
                                            </a>
                                        </td>
                                        <td>{{ $result->pdescription }}</td>
                                        <td>{{ $result->sequence }}</td>
                                        <td>{{ $result->hybridtm }}</td>
                                        <td>{{ $result->lengthbases }}</td>
                                        <td>{{ $result->designedby }}</td>
                                        <td>{{ $result->madeby }}</td>
                                    </tr>
                                @endforeach
                            @break

                            @case ('plasmids')
                                <th>Test</th>
                                @foreach ($results as $result)
                                    <tr>
                                    </tr>
                                @endforeach
                            @break
                        @endswitch
                    </table>
                </div>
            </div>
            <a href='/'>Home</a>
        </div>
    </div>
@endsection
