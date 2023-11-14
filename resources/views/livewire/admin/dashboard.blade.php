<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-4 mb-4">
        <x-card>
            <svg class="shrink-0 mr-3 h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <h2 class="text-xl font-bold mb-3 mt-2">
                <a href="/admin/orders">
                    {{ __("Orders") }}
                </a>
            </h2>
            <p class="text-3xl">{{ $total_orders }} <small class="text-sm">({{ $new_orders_count }} new)</small></p>
        </x-card>

        <x-card>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam h-6 w-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                <path d="M12 12l8 -4.5"></path>
                <path d="M8.2 9.8l7.6 -4.6"></path>
                <path d="M12 12v9"></path>
                <path d="M12 12l-8 -4.5"></path>
            </svg>
            <h2 class="text-xl font-bold mb-3 mt-2">
                <a href="/admin/products">
                    {{ __("Products") }}
                </a>
            </h2>
            <p class="text-3xl">{{ $products_count }}</p>
        </x-card>

        <x-card>
            <svg class="shrink-0 mr-3 h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <h2 class="text-xl font-bold mb-3 mt-2">
                <a href="/admin/customers">
                    {{ __("Clients") }}
                </a>
            </h2>
            <p class="text-3xl">{{ $clients_count }} <small class="text-sm">({{ $today_clients_count }} today)</small></p>
        </x-card>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($total_orders === 0)
            <x-shopper::empty-state
                :title="__('You have no orders yet')"
                :content="__('When customers place orders, you will see the latest orders here.')"
                permission="add_orders"
                class="lg:pb-0"
            >
                <div class="shrink-0">
                    <svg class="w-auto h-64 lg:h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 290.5 230">
                        <style>
                            .st0{fill:#22264d}.st1{fill:#3b82f6}.st2{fill:#ebe6e6}.st3{fill:#60a5fa}.st4{fill:snow}.st5{fill:#93c5fd}.st6{fill:#bd9a7b}.st7{fill:#ebc9aa}.st8{fill:#d6b392}.st10{fill:#fff}.st14{fill:#a0c4fa}.st16{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-linecap:round}.st18{font-family:&apos;Montserrat-SemiBold&apos;}.st19{font-size:3.7727px}.st20{fill:none;stroke:#d9e6ff;stroke-miterlimit:10}.st21{fill:#d9e6ff}.st22{fill:#80bd82}.st25{fill:#fcc1ab}.st27{fill:#3f83f8}
                        </style>
                        <g id="OBJECTS">
                            <path class="st0" d="M171.7 185.5v30.1h41.2v-30.1h-41.2zm25.3 28.4h-9.5v-14.8h9.5v14.8z"/>
                            <path class="st1" d="M168.6 182.9h9.5v4.1h-9.5z"/>
                            <path class="st2" d="M178.1 182.9h9.5v4.1h-9.5z"/>
                            <path class="st1" d="M187.6 182.9h9.5v4.1h-9.5z"/>
                            <path class="st2" d="M197 182.9h9.5v4.1H197z"/>
                            <path class="st1" d="M206.5 182.9h9.5v4.1h-9.5z"/>
                            <path class="st3" d="M174 178.5h7.3l-3.2 4.4h-9.5z"/>
                            <path class="st4" d="M181.3 178.5h7.3l-1 4.4h-9.5z"/>
                            <path class="st3" d="M188.6 178.5h7.4l1 4.4h-9.4z"/>
                            <path class="st4" d="M196 178.5h7.3l3.2 4.4H197z"/>
                            <path class="st3" d="M203.3 178.5h7.3l5.4 4.4h-9.5z"/>
                            <path class="st1" d="M178.1 186.9c0 2.8-2.1 5.1-4.7 5.1s-4.7-2.3-4.7-5.1"/>
                            <path class="st2" d="M187.6 186.9c0 2.8-2.1 5.1-4.7 5.1s-4.7-2.3-4.7-5.1"/>
                            <path class="st1" d="M197 186.9c0 2.8-2.1 5.1-4.7 5.1s-4.7-2.3-4.7-5.1"/>
                            <path class="st2" d="M206.5 186.9c0 2.8-2.1 5.1-4.7 5.1s-4.7-2.3-4.7-5.1"/>
                            <path class="st1" d="M216 186.9c0 2.8-2.1 5.1-4.7 5.1s-4.7-2.3-4.7-5.1m-13.4-29.5c-.6 0-1.2.1-1.7.2-2.8.6-5 3.1-5 6.2 0 3.5 6.3 9.6 6.3 9.6l.4-.1s6.3-6.1 6.3-9.6-2.8-6.3-6.3-6.3zm.5 9.1h-.5c-1.5 0-2.7-1.2-2.7-2.7 0-1.2.8-2.2 1.8-2.6h.5c1.5 0 2.7 1.2 2.7 2.7.1 1.2-.7 2.2-1.8 2.6z"/>
                            <path class="st3" d="M193.2 157.4c-3.5 0-6.3 2.8-6.3 6.3s6.3 9.6 6.3 9.6 6.3-6.1 6.3-9.6-2.8-6.3-6.3-6.3zm.1 9.1c-1.5 0-2.7-1.2-2.7-2.7 0-1.5 1.2-2.7 2.7-2.7 1.5 0 2.7 1.2 2.7 2.7 0 1.5-1.2 2.7-2.7 2.7z"/>
                            <path class="st5" d="M193.1 161.1h-.2c-1.5 0-2.7 1.2-2.7 2.7 0 1.5 1.2 2.7 2.7 2.7h.2c-1.4-.1-2.5-1.3-2.5-2.7 0-1.4 1.1-2.6 2.5-2.7z"/>
                            <path class="st5" d="M193.2 157.4h-.2c3.4.1 6.1 2.9 6.1 6.3 0 3.1-5 8.3-6.1 9.4l.2.2s6.3-6.1 6.3-9.6-2.8-6.3-6.3-6.3z"/>
                            <path class="st6" d="M209.1 221.4l-8.1-1.3v-11.6l8.1 1.3z"/>
                            <path class="st7" d="M209.1 209.8l-8.1-1.3 6.9-1.3 8.1 1.3z"/>
                            <path class="st8" d="M209.1 221.4l6.9-1.3v-11.6l-6.9 1.3z"/>
                            <path class="st6" d="M210.8 210.1l-6.6-1v-9.5l6.6 1z"/>
                            <path class="st7" d="M210.8 200.6l-6.6-1 5.6-1.1 6.7 1.1z"/>
                            <path class="st8" d="M210.8 210.1l5.7-1v-9.5l-5.7 1z"/>
                            <path class="st6" d="M219.2 223.9l-6.6-1.1v-9.5l6.6 1.1z"/>
                            <path class="st7" d="M219.2 214.4l-6.6-1.1 5.6-1 6.7 1z"/>
                            <path class="st8" d="M219.2 223.9l5.7-1.1v-9.5l-5.7 1.1z"/>
                            <path d="M95.7 17.5C92.2 19.2 40.8 44 34.5 89c-5.1 35.9 20.5 70.9 51.2 73.2 27.8 2.1 35.3-15.8 69.2-12.1 23.5 2.6 45.1 1.1 55-4.5 21.4-12.1 29.2-39.4 29.1-61.6-.1-17.7-6.6-51.9-46.8-70.6-43.1-20-93.7 2.9-96.5 4.1z" fill="#eff6ff"/>
                            <path class="st10" d="M201.3 138.7H65.6c-3 0-5.5-2.5-5.5-5.5V36.8c0-3 2.5-5.5 5.5-5.5h135.8c3 0 5.5 2.5 5.5 5.5v96.4c-.1 3-2.5 5.5-5.6 5.5z"/>
                            <path class="st1" d="M201.7 31.3H65.2c-2.8 0-5.1 2.3-5.1 5.1v5.4h146.8v-5.4c-.1-2.8-2.4-5.1-5.2-5.1z"/>
                            <path d="M193.2 36.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9.4-.9.9-.9.9.4.9.9z" fill="#f8b4b4"/>
                            <path d="M197.6 36.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9.4-.9.9-.9.9.4.9.9z" fill="#faca15"/>
                            <path d="M202 36.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9.4-.9.9-.9.9.4.9.9z" fill="#84e1bc"/>
                            <ellipse transform="rotate(-45.001 191.526 124.565)" class="st14" cx="191.5" cy="124.6" rx="9.6" ry="9.6"/>
                            <path d="M190.8 129.1c0 .4-.4.8-.8.8s-.8-.4-.8-.8.4-.8.8-.8.8.4.8.8zm3.3 0c0 .4-.4.8-.8.8s-.8-.4-.8-.8.4-.8.8-.8c.5 0 .8.4.8.8z" fill="none" stroke="#fff" stroke-miterlimit="10"/>
                            <path class="st16" d="M189.8 121.7h6c.4 0 .6.4.5.8l-2.3 4.1c0 .1-.1.2-.3.2H189c-.2 0-.3-.1-.4-.3l-.8-6.2h-1.3m6.8 6.4h1.8"/>
                            <path class="st16" d="M193.4 128.3h-4.5c-.5 0-1.1.1-1.1-.8s.6-.8 1.1-.8h3.5"/>
                            <path class="st3" d="M208.1 47l-2.4 3.9.7 2.7 14 8.5 4.6-7.8-14-8.5-2.9 1.2zm1.6 3.6c-.2.3-.6.4-1 .2-.3-.2-.4-.6-.2-1 .2-.3.6-.4 1-.2.3.2.4.7.2 1z"/>
                            <path d="M175.3 31.1c1.7-.4 3.5-.7 5.3-.7 1.8 0 3.6.4 5.2 1.2 1.6.8 2.9 2.2 3.8 3.8.9 1.6 1.5 3.3 2.3 4.8.8 1.6 1.8 3 3.1 4.3 1.2 1.2 2.7 2.2 4.3 3 3.2 1.5 6.7 2.2 10.2 2.4v.5c-3.6-.3-7.2-1-10.4-2.6-1.6-.8-3.1-1.8-4.4-3.1-1.3-1.3-2.3-2.8-3.1-4.4-.8-1.6-1.4-3.3-2.3-4.8-.8-1.5-2.1-2.9-3.7-3.7-1.5-.8-3.3-1.2-5.1-1.2-1.8 0-3.5.2-5.3.7l.1-.2z" fill="#2a2e54"/>
                            <path class="st6" d="M92.1 88.5l-14.7-2.3v-21l14.7 2.3z"/>
                            <path class="st7" d="M92.1 67.5l-14.7-2.3 12.5-2.3 14.7 2.3z"/>
                            <path class="st8" d="M92.1 88.5l12.5-2.3v-21l-12.5 2.3z"/>
                            <circle class="st3" cx="104.6" cy="72.2" r="3.7"/>
                            <text transform="translate(103.43 73.528)" class="st10 st18 st19">
                                $
                            </text>
                            <path class="st20" d="M113.8 122H71.6c-1.9 0-3.5-1.6-3.5-3.5V51.4c0-1.9 1.6-3.5 3.5-3.5h42.3c1.9 0 3.5 1.6 3.5 3.5v67.1c-.1 2-1.6 3.5-3.6 3.5zm-39.3-21.1H95M74.5 105H95m-20.5 4.1H95"/>
                            <path class="st3" d="M86 65.1l-4.3.8 3.5.5 4.3-.8z"/>
                            <path class="st1" d="M85.2 70.1v-3.7l-3.5-.5v3.5z"/>
                            <path class="st20" d="M167.4 122h-42.3c-1.9 0-3.5-1.6-3.5-3.5V51.4c0-1.9 1.6-3.5 3.5-3.5h42.3c1.9 0 3.5 1.6 3.5 3.5v67.1c0 2-1.5 3.5-3.5 3.5zm22.7-42.1h9.3m-9.3 3.3h9.3m-9.3 3.3h9.3"/>
                            <path class="st21" d="M179 79.1h8.2v8.2H179zm0-14.4h20.5v8.2H179z"/>
                            <path class="st20" d="M190.1 93.5h9.3m-9.3 3.3h9.3m-9.3 3.4h9.3"/>
                            <path class="st21" d="M179 92.8h8.2v8.2H179z"/>
                            <path class="st22" d="M83 198.1s8.6-15.6 6.9-21.9c0 0-6.7 11.7-6.9 21.9z"/>
                            <path d="M85 193s-4 7.9-5.1 14.5M78 190.6s4.5 8.2 4.1 16.9m0-19.1l-.8 19.3" fill="none" stroke="#80bd82" stroke-miterlimit="10"/>
                            <path class="st22" d="M82.1 190.6s1.2-24.4-5.1-32c-.1 0-1.4 18.4 5.1 32z"/>
                            <path d="M82.1 194.2s7.2-23.7 2.9-32.2c0 0-5.8 17.8-2.9 32.2zm-1.7 3.4s-4.1-24.2-12-30.7c0 0 2.7 18.2 12 30.7z" fill="#47a68b"/>
                            <path class="st14" d="M76.4 200.9h10.1l-1.2 11.6h-7.7z"/>
                            <path class="st25" d="M119.6 99.1s-19.1 3.9-19.6 4.7c-.5.8 7.2 4.5 7.2 4.5s11.6-1.6 15.3-4.2c3.8-2.5-2.9-5-2.9-5z"/>
                            <path class="st25" d="M117.4 100.4c1.6-3.7 5.7-13.5 5.7-13.5l2.9.3s-.5 13.6-2.4 16.2c-1.9 2.5-7.4-.2-6.2-3z"/>
                            <path d="M85.2 216.3c0 1.7 10 3.2 22.3 3.2s22.3-1.4 22.3-3.2c0-1.7-10-3.2-22.3-3.2-12.4 0-22.3 1.4-22.3 3.2z" opacity=".2" fill="#e2e2e2"/>
                            <path class="st25" d="M107.8 126.3l-8.2 48.2-13.7 32.8 4.6 2.1 19.2-32 13.2-45.5z"/>
                            <path class="st0" d="M86.6 205.9s3 2.8 5.2 1.6c0 0 .6.9 1.8 3 0 0 4.5 3.2 5.2 5.9 0 0-7.9-.7-15.6-4-.1-.1 1.3-4.6 3.4-6.5z"/>
                            <path class="st25" d="M122.4 130.8l-13 3.4.5 2.6c.9 5.5-3.9 3.7-1.9 8.9l17.6 29.7-1 31.4-.6 6.8 5.6 1.9 7.3-41.2-14.5-43.5z"/>
                            <path class="st0" d="M124.1 212.5s1.7 2.7 6 0c0 0 .1.5 2.9 2.9 0 0 6.2 1.1 8 3.5 0 0-9.4 2-18.5 1 .1-.1.3-4.6 1.6-7.4z"/>
                            <path class="st25" d="M106.6 103.3s.7-6.2.4-6.7c-.3-.5-4.6-5.1-4.4-8.9.2-3.8 4.2-7.4 9.2-6.4 4.9.9 6.1 3.7 6.4 6.3.1.8-.6 1.7-.2 3.8.7 3.3-.4 4.6-1.8 7.8-.1.2-.4.3-.7.4-.8.1-2.4 0-3.3-.8l.8 3.3c.1-.1-3.5 2.1-6.4 1.2z"/>
                            <path class="st0" d="M116.9 85s-1.7 4-5.2 6.5c0 0-1.5-1.7-2.6-.1-1.3 1.9 2.2 3.3 2.2 3.3l-4.3 2s-4.6-4-4.9-7.8c-.2-3.9 2.1-8 6.9-8.8 5.5-.9 10.5 3.5 8.9 6.7.2.1.2-.7-1-1.8z"/>
                            <path class="st25" d="M117.4 89.8s1.3 2 1.8 2.9c.4.7-1.1 1.5-1.6 1.4-.4-.2-.2-4.3-.2-4.3z"/>
                            <path class="st27" d="M100.2 103.8c1.7-1.3 3.9-.7 6.5-2.7h6.3s2.3 1.7 6 1.7c2.8 0 4.1 5.3 4.1 5.3-.9-.3-3.8 10.2-3.8 10.2l2.3 6.4-7 5.8c-7.9-.8-8.5-4.6-8.5-4.6l-5.7-13.8c-1.2-2.1-2.1-6.8-.2-8.3z"/>
                            <path class="st6" d="M140.3 102.9l-15.2-2.6V76.2l15.2 2.7z"/>
                            <path class="st7" d="M140.3 78.9l-15.2-2.7 13-2.7 15.2 2.7z"/>
                            <path class="st8" d="M140.3 102.9l13-2.6V76.2l-13 2.7z"/>
                            <path class="st25" d="M135.5 105s-14.4-1.9-15.3-1.5c-.9.4-1.5 6.9-1.5 6.9s11.1.5 15.6.4c4.5-.2 1.2-5.8 1.2-5.8zm13-8s.9-2.5 1.9-2.6c2.1-.2 3-1.4 3-.8-.1 1.2-1 1.8-2.5 1.9l-2.4 1.5z"/>
                            <path class="st25" d="M149.8 95.5s3.7-.4 4.3-.3c.9.1.7 1.1.4 1.5-.2.3.5.7-.1 1.6-.4.6.1.6-.1 1.2-.2.5-.9.6-.8 1 0 .9-.8.8-1.3 1.1-.5.2-2.6.4-4.3-1-2.2-1.7 1.9-5.1 1.9-5.1z"/>
                            <path class="st25" d="M133.6 104.8c3.7-1.6 14-6.2 14-6.2l1.9 2.2s-11.2 9.3-14.3 9.8c-3.1.6-4.4-4.6-1.6-5.8z"/>
                            <path class="st27" d="M113.4 101.9s5 .2 13.6 2c0 0 .1 6.4-.2 7.8.1.1-20.7-.5-13.4-9.8z"/>
                            <path class="st25" d="M123.1 86.7s.9-2.4 1.3-3.4 3.6-1.6 4.6-2.1c1.1-.6 0 1.9-2.2 2.4 0 0-.8 4.8-4 4.1"/>
                            <ellipse cx="116.6" cy="90.7" rx=".2" ry=".5" fill="#2a2c41"/>
                            <path d="M109.7 92.1s.5-.9 1.4-.1c0 0-1.2.9.2 1.3" fill="none" stroke="#2a2c41" stroke-width=".25" stroke-miterlimit="10"/>
                            <path class="st0" d="M104.8 82.6s-4.8 2.7-4.8 14.7c0 11.7-2.9 13-3.2 20.2-.3 7.3 13.5 9.6 16 .7 3.2-11.1-1.5-15.7-1.5-23.5l-3.9-.8-.8-12.3m-.5 44.3s3.9 2.4 15.5-1.2l11.8 32.7s-11.8 15.8-34.2 5.7c-.1 0-3.3-20.8 6.9-37.2z"/>
                            <path class="st27" d="M119.6 108.8s5.3 5.5.5 9.7c-3.9 3.4-.5-9.7-.5-9.7z"/>
                            <path class="st3" d="M157 83.4c0 2-1.6 3.7-3.7 3.7s-3.7-1.6-3.7-3.7 1.6-3.7 3.7-3.7 3.7 1.6 3.7 3.7z"/>
                            <text transform="translate(152.107 84.686)" class="st10 st18 st19">
                                $
                            </text>
                            <path class="st3" d="M134.5 76.4l-4.2.7 3.4.6 4.3-.8z"/>
                            <path class="st1" d="M133.7 81.5v-3.8l-3.4-.6v3.6z"/>
                        </g>
                    </svg>
                </div>
            </x-shopper::empty-state>
        @else
            <div class="mt-6">
                <livewire:shopper-tables.orders-table />
            </div>
        @endif
    </div>
</div>
