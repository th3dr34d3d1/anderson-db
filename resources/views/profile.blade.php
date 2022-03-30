<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @switch ($view_type)
                @case ('oligos')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For Oligos-ID: {{ $record->id }}
                @break

                @case ('plasmids')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For Plasmid-ID: {{ $record->id }}
                @break

                @case ('strains')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For Strains-ID: {{ $record->id }}
                @break

                @case ('nystrains')
                    @if (! $is_edit) Viewing @else Editing @endif Profile For NyStrains-ID: {{ $record->id }}
                @break
            @endswitch
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div class="p-6">
                                <div class="ml-4 text-lg leading-7 font-semibold" style="font-size: 20px;">
                                        <table>
                                                @if ($is_edit)
                                                    @include(
                                                    'dynamic_profile',
                                                        [
                                                            'view_type' => $view_type,
                                                            'record' => $record
                                                        ]
                                                    )
                                                @else
                                                    @include(
                                                    'static_profile',
                                                        [
                                                            'view_type' => $view_type,
                                                            'record' => $record,
                                                            'show_view_profile_link' => false
                                                        ]
                                                    )

                                                @endif
                                        </table>
                                    </div>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-2">
                                <div class'flex item-center'>
                                    <div>
                                    @if (! $is_edit)
                                        <form action='/edit/{{ $view_type }}/{{ $record->id }}' method='GET'>
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type='submit'>Edit</button>
                                        </form>
                                    @endif
                                    </div>

                                    <div>
                                        <form action="{{'/search/' . $view_type }}" method="GET" role="search">
                                            <input type='hidden' name='get_last_result' value=1>
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type='submit'>Return to Search Results</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

