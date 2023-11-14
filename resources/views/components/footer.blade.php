<div class="w-full mt-12 bg-black shadow-[0px_-10px_12px_0px_rgba(0,0,0,0.15)]">
    <div class="max-w-7xl mx-auto grid grid-cols-12 gap-6 py-20 items-center">
        <div class="px-4 col-span-full lg:col-span-3 flex flex-col justify-center items-center text-white gap-4">
            <a class="block" href="/">
                <x-application-logo class='w-36' />
            </a>

            <p class="text-center">
                RCE Makatib almadina 3, Rue Asila, Av des FAR , 3ème étage, bureau N°31.
            </p>
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
        <div class="flex flex-col items-center md:items-start gap-4 col-span-full md:col-span-6 lg:col-span-3 justify-center md:justify-start text-white">
            <ul class="flex items-center gap-4">
                <li>
                    <a href="https://www.facebook.com/profile.php?id=61553605762538">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9068 0.484917C15.2854 1.32409 12.6504 2.46739 9.91908 4.38555C5.62954 7.3983 2.65731 11.4224 0.990867 16.4752C0.149467 19.0266 0 20.1227 0 23.7545C0 27.3863 0.149467 28.4824 0.990867 31.0337C2.72014 36.2766 5.84779 40.3977 10.4162 43.4536C14.5823 46.2399 18.2249 47.3089 23.5544 47.3089C27.2029 47.3089 28.2782 47.1609 30.8846 46.302C38.1207 43.9169 43.7193 38.3052 46.1179 31.0337C46.9593 28.4824 47.1087 27.3863 47.1087 23.7545C47.1087 20.1227 46.9593 19.0266 46.1179 16.4752C44.3886 11.2324 41.261 7.11127 36.6926 4.05538C31.659 0.689039 24.3545 -0.777369 18.9068 0.484917ZM30.2469 11.8566V14.4593H28.5492C25.8826 14.4593 25.4134 14.8783 25.4134 17.2609V19.2928H27.8127H30.212L30.0197 21.2448C29.6513 24.9837 29.7316 24.8699 27.4587 24.8699H25.4287L25.3279 32.5849L25.2275 40.2999H22.0671H18.9068L18.8064 32.5849L18.7056 24.8699H17.2262H15.7464V22.0814V19.2928H17.2336H18.7209L18.7372 16.969C18.7551 14.4221 19.3886 12.2307 20.4516 11.0376C21.6269 9.71875 23.19 9.28374 26.8077 9.2685L30.2469 9.25399V11.8566Z" fill="#FFE000"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/diasmarthouse/">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.96787 0.45668C6.14235 1.51261 3.2337 4.0119 1.48025 7.75005L0.513184 9.8121V23.7627V37.7133L1.72528 40.175C3.13554 43.0405 5.15148 45.0066 8.09062 46.3849L10.1802 47.3646H24.1308H38.0813L40.5431 46.1526C43.4086 44.7423 45.3747 42.7263 46.753 39.7872L47.7327 37.6977V23.7549V9.8121L46.753 7.72254C45.3751 4.78415 43.4082 2.76784 40.5446 1.3572L38.084 0.145106L24.8755 0.0662825C15.1784 0.00865236 11.2157 0.112387 9.96787 0.45668ZM39.9266 7.17747C40.42 7.67123 40.9327 8.5078 41.0655 9.03651C41.9879 12.7129 37.5419 15.294 34.8767 12.6293C32.4868 10.2393 34.1201 6.27993 37.4965 6.27993C38.6208 6.27993 39.2682 6.519 39.9266 7.17747ZM36.7488 9.45888C36.3554 9.93293 36.371 10.1356 36.8362 10.6011C37.3426 11.1071 37.4671 11.1012 38.0256 10.5427C38.5078 10.0605 38.5517 9.80206 38.2189 9.40088C37.6657 8.73423 37.3396 8.74724 36.7488 9.45888ZM29.5093 11.9927C32.1019 13.1799 34.7053 15.8008 35.9494 18.4767C36.7711 20.2439 36.9343 21.1176 36.9343 23.7549C36.9343 27.6239 35.8743 30.2418 33.2419 32.8738C30.6099 35.5062 27.992 36.5662 24.123 36.5662C20.2539 36.5662 17.636 35.5062 15.004 32.8738C12.3716 30.2418 11.3116 27.6239 11.3116 23.7549C11.3116 21.1176 11.4748 20.2439 12.2965 18.4767C13.9462 14.9282 17.3713 12.0507 21.0496 11.1227C23.3102 10.5527 27.248 10.9576 29.5093 11.9927ZM20.0331 14.4891C16.2923 16.1804 14.0882 19.62 14.0961 23.7549C14.1165 34.6239 28.9063 37.7594 33.3888 27.8448C35.0348 24.2044 34.0457 19.1842 31.1397 16.4329C28.2872 13.7313 23.544 12.9014 20.0331 14.4891Z" fill="#FFE000"/>
                        </svg>

                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCUJUor4tE_2tCjQSG5hMRmQ">
                        <svg width="64" height="47" viewBox="0 0 64 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.50898 0.887588C5.64258 1.93832 2.74746 4.64067 1.25581 7.65854C0.0146142 10.1698 0 10.3526 0 23.4764C0 36.6002 0.0146142 36.7829 1.25581 39.2942C2.79483 42.4089 5.66072 45.0222 8.71559 46.0979C12.1328 47.3007 51.8672 47.3007 55.2844 46.0979C58.3393 45.0222 61.2052 42.4089 62.7442 39.2942C63.9854 36.7829 64 36.6002 64 23.4764C64 10.3526 63.9854 10.1698 62.7442 7.65854C61.2052 4.54382 58.3393 1.93051 55.2844 0.854785C51.9912 -0.304254 11.6858 -0.276137 8.50898 0.887588ZM33.2019 18.5299C38.074 21.1072 42.0641 23.4696 42.0692 23.7799C42.0813 24.4818 24.0045 33.474 23.3817 33.0762C22.8576 32.7414 22.7563 14.4561 23.2758 13.9197C23.7183 13.4621 22.9352 13.0986 33.2019 18.5299Z" fill="#FFE000"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <a href="mailto:contact@diasmart.ma">
                Contact@diasmart.ma
            </a>
        </div>
    </div>
</div>
