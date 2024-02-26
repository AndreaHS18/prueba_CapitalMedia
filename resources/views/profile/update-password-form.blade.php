<x-form-section submit="updatePassword">
    <x-slot name="title" class="text-center">
        <h1 class="text-center my-3 txt_h1">Actualizar contraseña</h1>
    </x-slot>

    <x-slot name="description">
        <div class="d-flex justify-content-between">
            <p>Cambia tu contraseña poniendo tu contraseña actual y la contraseña nueva.</p>
            <div>
                <a href="{{ route('dashboard') }}" class="nav-link tex-center nav_item_oscuro nav_item_suscribete px-3">
                    Regresar
                </a>
            </div>
        </div>
    </x-slot>


    <x-slot name="form">
        <div class="mb-4">
            <x-label for="current_password" value="Contraseña actual" class="form-label" />
            <x-input id="current_password" type="password" class="mt-1 block w-full form-control"
                wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="my-4">
            <x-label for="password" value="Nueva contraseña" class="form-label" />
            <x-input id="password" type="password" class="mt-1 block w-full form-control" wire:model="state.password"
                autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="my-4">
            <x-label for="password_confirmation" value="Confirmar nueva contraseña" class="form-label" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full form-control"
                wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button class="nav-link tex-center nav_item_oscuro nav_item_suscribete px-3" style="color: #024D4F !important">
            Actualizar
        </x-button>
    </x-slot>
</x-form-section>
