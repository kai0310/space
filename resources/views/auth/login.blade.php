<x-guest-layout>

    <x-top-alert>
        {{ config('services.google.custom_domain') }} のメールアドレスを持っているユーザのみご利用いただけます。
    </x-top-alert>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}">
            <div class="flex items-center justify-center">
                <x-google-icon class="h-6 w-6 mx-2"/>
                <span class="sr-only">Google</span>
                <span class="text-gray-600 text-xl">Sign in with Google</span>
            </div>
        </a>
    </x-jet-authentication-card>
</x-guest-layout>
