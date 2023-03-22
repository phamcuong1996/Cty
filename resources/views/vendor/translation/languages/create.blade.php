@extends('translation::layout')

@section('body')

    <div class="panel w-1/2">

        <div class="panel-header">

            {{ __('add_language') }}

        </div>

        <form action="{{ route('languages.store') }}" method="POST">

            <fieldset>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="panel-body p-4">

                    @include('translation::forms.select', ['name' => $name, 'items' => $languages, 'submit' => true, 'selected' => $language])
                    <!-- @include('translation::forms.select', ['field' => 'locale', 'label' => 'locale', ]) -->

                </div>

            </fieldset>

            <div class="panel-footer flex flex-row-reverse">

                <button class="button button-blue">
                    {{ __('save') }}
                </button>

            </div>

        </form>

    </div>

@endsection