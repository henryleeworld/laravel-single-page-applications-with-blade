<x-splade-modal>
    <h1 class="text-2xl mb-4">{{ __('User details') }}</h1>

    <b>{{ __('Name') }}</b>: {{ $user->name }}
    <br />
    <b>{{ __('E-Mail') }}</b>: {{ $user->email }}
    <br />
    <b>{{ __('Registered on') }}</b>: {{ $user->created_at }}
</x-splade-modal>
