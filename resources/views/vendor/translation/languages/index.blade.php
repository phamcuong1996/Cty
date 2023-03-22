@extends('translation::layout')

@section('body')

    @if(count($languages))

        <div class="panel w-1/2">

            <div class="panel-header">

                {{ __('languages') }}

                <div class="flex flex-grow justify-end items-center">

                    <a href="{{ route('languages.create') }}" class="button">
                        {{ __('add') }}
                    </a>

                </div>

            </div>

            <div class="panel-body">

                <table>

                    <thead>
                        <tr>
                            <th>{{ __('name') }}</th>
                            <th>{{ __('locale') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($languages as $language => $name)
                            <tr>
                                <td>
                                    {{ $name }}
                                </td>
                                <td>
                                    <a href="{{ route('languages.translations.index', $language) }}">
                                        {{ $language }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    @endif

@endsection