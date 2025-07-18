<x-filament::section
    :aside="$isAside()"
    :collapsed="$isCollapsed()"
    :collapsible="$isCollapsible() && (! $isAside)"
    :compact="$isCompact()"
    :content-before="$isFormBefore()"
    :description="$getDescription()"
    :footer-actions="$getFooterActions()"
    :footer-actions-alignment="$getFooterActionsAlignment()"
    :header-actions="$getHeaderActions()"
    :heading="$getHeading()"
    :icon="$getIcon()"
    :icon-color="$getIconColor()"
    :icon-size="$getIconSize()"
    :persist-collapsed="$shouldPersistCollapsed()"
    :attributes="
        \Filament\Support\prepare_inherited_attributes($attributes)
        ->merge(['id' => $getId()], escape: false)
    "
>
    <x-slot name="heading">
        @livewire(App\Filament\Admin\Widgets\DiscordPreview::class, ['record' => $getRecord(), 'pollingInterval' => $pollingInterval ?? null])
    </x-slot>

    {{ $getChildComponentContainer() }}
</x-filament::section>
