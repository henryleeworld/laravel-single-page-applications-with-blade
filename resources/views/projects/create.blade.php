<x-layout>
    <x-slot name="header">
        {{ __('Add new project') }}
    </x-slot>

    <x-panel class="flex flex-col pt-16 pb-16">
        <x-splade-form action="{{ route('projects.store') }}">
            <x-splade-input name="name" label="{{ __('Name') }}" />
            <br />

            <x-splade-input date name="start_date" label="{{ __('Start date') }}" />
            <br />

            <x-splade-select name="category_id" label="{{ __('Category') }}" :options="$categories" />
            <br />

            <x-splade-checkbox name="is_active" value="1" label="{{ __('Is active?') }}" />
            <br />

            <x-splade-select name="users[]" label="{{ __('Participants') }}" :options="$users" multiple choices />
            <br />

            <x-splade-file name="logo" label="{{ __('Logo') }}" filepond preview accept="image/png" />
            <br />

{{--            <x-splade-checkboxes name="participants" label="{{ __('Participants') }}" :options="$users" />--}}

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Save') }}
            </button>
        </x-splade-form>
    </x-panel>
</x-layout>
