<div>
    <x-shopper::breadcrumb :back="route('shopper.client_requests.index')">
        <x-heroicon-s-chevron-left class="shrink-0 h-5 w-5 text-secondary-400" />
        <x-shopper::breadcrumb.link :link="route('shopper.client_requests.index')" :title="__('shopper::layout.sidebar.client_requests')" />
    </x-shopper::breadcrumb>

    <div class="mt-3 bg-secondary-100 z-30 pb-5 border-b border-secondary-200 sticky top-0 -my-2 pt-4 sm:pt-1 sm:-my-0 sm:-mx-8 dark:bg-secondary-900 dark:border-secondary-700">
        <div class="sm:px-8 space-y-4">
            <div class="space-y-3 md:flex md:items-center md:justify-between md:space-y-0">
                <div class="flex-1 flex items-center space-x-4 min-w-0">
                    <h3 class="text-2xl font-bold leading-6 text-secondary-900 dark:text-white sm:text-3xl sm:leading-9 sm:truncate">
                        {{ $clientRequest->title }}
                    </h3>
                    <div class="p-1 flex items-center divide-x-2 divide-secondary-200 dark:divide-secondary-700">
                        <div class="flex items-center space-x-2 pr-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 border-2 rounded-full text-xs font-medium {{ $clientRequest->status_classes }}">
                                {{ $clientRequest->formatted_status }}
                            </span>
                        </div>
                        <div class="flex items-center px-4">
                            <svg class="h-5 w-5 mr-1.5 text-secondary-500 dark:text-secondary-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-secondary-700 font-medium text-sm leading-6 dark:text-secondary-300">
                                <time datetime="{{ $clientRequest->created_at->format('F j, Y h:m') }}">
                                    {{ $clientRequest->created_at->formatLocalized('%d %B %G - %H:%M') }}
                                </time>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <x-shopper::dropdown>
                        <x-slot name="trigger">
                            <x-shopper::buttons.default>
                                {{ __('shopper::layout.forms.actions.more_actions') }}
                                <svg class="w-5 h-5 -mr-1 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </x-shopper::buttons.default>
                        </x-slot>

                        <x-slot name="content">
                            <div class="py-1">
                                @if(!$clientRequest->isProcessing())
                                    <x-shopper::dropdown-button wire:click="markProcessing" role="menuitem">
                                        <x-heroicon-o-cog class="mr-3 h-5 w-5 text-blue-800 dark:text-secondary-500" />
                                        {{ __('shopper::layout.forms.actions.mark_processing') }}
                                    </x-shopper::dropdown-button>
                                @endif

                                @if(!$clientRequest->isComplete())
                                    <x-shopper::dropdown-button wire:click="markComplete" role="menuitem">
                                        <x-heroicon-o-check-circle class="mr-3 h-5 w-5 text-green-800 dark:text-secondary-500" />
                                        {{ __('shopper::layout.forms.actions.mark_complete') }}
                                    </x-shopper::dropdown-button>
                                @endif

                                @if(!$clientRequest->isCancelled())
                                    <x-shopper::dropdown-button wire:click="markCancelled" role="menuitem">
                                        <x-heroicon-s-x class="mr-3 h-5 w-5 text-red-800 dark:text-secondary-500" />
                                        {{ __('shopper::layout.forms.actions.mark_cancelled') }}
                                    </x-shopper::dropdown-button>
                                @endif

                                @if(!$clientRequest->isPending())
                                    <x-shopper::dropdown-button wire:click="markPending" role="menuitem">
                                        <x-heroicon-o-clock class="mr-3 h-5 w-5 text-yellow-800 dark:text-secondary-500" />
                                        {{ __('shopper::layout.forms.actions.mark_pending') }}
                                    </x-shopper::dropdown-button>
                                @endif
                            </div>
                        </x-slot>
                    </x-shopper::dropdown>

                    <x-shopper::buttons.danger wire:click="$emit('openModal', 'modals.delete-client-request', {{ json_encode([$clientRequest->id]) }})" type="button">
                        <x-heroicon-o-trash class="w-5 h-5 -ml-1 mr-2"/>
                        {{ __('shopper::layout.forms.actions.delete') }}
                    </x-shopper::buttons.danger>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 bg-white shadow rounded-lg overflow-hidden p-4 sm:p-5 dark:bg-secondary-800">
            <div class="flex items-center justify-between">
                <div class="space-y-">
                    <h3 class="text-lg leading-6 font-medium text-secondary-900 dark:text-white">
                        {{ __('shopper::words.client_request') }}
                    </h3>
                    <p class="max-w-2xl text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                        {{ __('shopper::pages/client-requests.subtitle') }}
                    </p>
                </div>
                <div class="ml-4">

                </div>
            </div>
        <div class="mt-6 border-t border-secondary-200 dark:border-secondary-700">
            <dl class="divide-y divide-secondary-200 dark:divide-secondary-700">
                <div class="py-4 space-y-1 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm leading-5 font-medium text-secondary-500 dark:text-secondary-400">
                        {{ __('shopper::pages/client-requests.client_credentials') }}
                    </dt>
                    <dd class="text-sm flex flex-col leading-5 text-secondary-900 sm:mt-0 sm:col-span-2 dark:text-white">
                        <p class="mt-1 flex items-center space-x-4 text-secondary-500 leading-5 text-sm dark:text-secondary-400">
                            <span class="text-primary-500 border-b border-dashed border-primary-500 pb-0 5">
                                <a href="mailto:{{ $clientRequest->email }}">{{ $clientRequest->email }}</a>
                            </span>
                            <span>-</span>
                            <span class="text-primary-500 border-b border-dashed border-primary-500 pb-0 5">
                                <a href="tel:{{ $clientRequest->phone ?? __('N/A') }}">{{ $clientRequest->phone ?? __('N/A') }}</a>
                            </span>
                        </p>
                    </dd>
                </div>
                <div class="py-4 space-y-1 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm leading-5 font-medium text-secondary-500 dark:text-secondary-400">
                        {{ __('shopper::pages/products.reviews.review_content') }}
                    </dt>
                    <dd class="flex space-x-4 text-sm leading-5 text-secondary-900 sm:mt-0 sm:col-span-2 dark:text-white">
                        <div class="grow">
                            <p class="mt-1 text-sm text-secondary-500 leading-5 dark:text-secondary-400">
                                {{ $clientRequest->message }}
                            </p>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
