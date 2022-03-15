<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $view_type . " Search Results" }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <table>
                                    @switch ($view_type)
                                        @case ('oligos')

                                            @foreach ($results as $result)
                                                @include(
                                                'static_profile',
                                                    [
                                                        'view_type' => $view_type,
                                                        'show_view_profile_link' => true,
                                                        'record' => $result
                                                    ]
                                                )
                                            @endforeach

                                        @break

                                        @case ('plasmids')
                                            @foreach ($results as $result)
                                                @include(
                                                'static_profile',
                                                    [
                                                        'view_type' => $view_type,
                                                        'show_view_profile_link' => true,
                                                        'record' => $result
                                                    ]
                                                )
                                            @endforeach
                                        @break

                                        @case ('strains')
                                            @foreach ($results as $result)
                                                @include(
                                                'static_profile',
                                                    [
                                                        'view_type' => $view_type,
                                                        'show_view_profile_link' => true,
                                                        'record' => $result
                                                    ]
                                                )
                                            @endforeach
                                        @break

                                        @case ('nystrains')
                                            @foreach ($results as $result)
                                                @include(
                                                'static_profile',
                                                    [
                                                        'view_type' => $view_type,
                                                        'show_view_profile_link' => true,
                                                        'record' => $result
                                                    ]
                                                )
                                            @endforeach
                                        @break
                                    @endswitch
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

