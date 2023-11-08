<div class="w-full mt-12 bg-black shadow-[0px_-10px_12px_0px_rgba(0,0,0,0.15)]">
    <div class="max-w-7xl mx-auto grid grid-cols-12 gap-6 py-20 items-center">
        <div class="col-span-full lg:col-span-3 flex justify-center">
            <a class="block" href="/">
                <img class='w-36' src="{{ config('shopper.system.logo-dark-sm') }}" alt="{{ config('app.name') }}" />
            </a>
        </div>
        <div class="col-span-full lg:col-span-3 flex justify-center">
            <ul class="flex lg:flex-col gap-4 text-white">
                <li class="font-bold">
                    <a href="{{ route('site.home') }}">{{ __("About") }}</a>
                </li>
                <li class="font-bold">
                    <a href="{{ route('site.home') }}">{{ __("Products") }}</a>
                </li>
                <li class="font-bold">
                    <a href="{{ route('site.home') }}">{{ __("Services") }}</a>
                </li>
            </ul>
        </div>
        <div class="col-span-full md:col-span-6 lg:col-span-3 flex items-center justify-center md:justify-end lg:justify-start text-white">
            <div class="text-xl">Keep in touch</div>
            <svg xmlns="http://www.w3.org/2000/svg" class="hidden md:block" width="85" height="24" viewBox="0 0 94 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" speechify-initial-font-family="ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;" speechify-initial-font-size="16px">
                <path stroke="none" d="M0 0h85v24H0z" fill="none" speechify-initial-font-family="ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;" speechify-initial-font-size="16px"></path>
                <path d="M5 12l84 0" speechify-initial-font-family="ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;" speechify-initial-font-size="16px"></path>
                <path d="M85 16l4 -4" speechify-initial-font-family="ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;" speechify-initial-font-size="16px"></path>
                <path d="M85 8l4 4" speechify-initial-font-family="ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;" speechify-initial-font-size="16px"></path>
            </svg>
        </div>
        <div class="flex col-span-full md:col-span-6 lg:col-span-3 justify-center md:justify-start text-white">
            <ul class="flex items-center gap-2">
                <li><img src="/assets/images/icons/fb.svg" alt="fb logo"></li>
                <li><img src="/assets/images/icons/linkedin.svg" alt="linkedin logo"></li>
                <li><img src="/assets/images/icons/instagram.svg" alt="instagram logo"></li>
                <li><img src="/assets/images/icons/twitter.svg" alt="fb logo"></li>
            </ul>
        </div>
    </div>
</div>
