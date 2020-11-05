<x-app-layout>
       <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 h-screen">
        <div class="grid grid-cols-3 user-info">
            <div class="col-span-1 flex justify-center items-start pt-6 pb-9">
                <a href="#">
                    <div class="story flex justify-center items-center w-40 h-40">
                        <img class="rounded-full object-cover w-36 h-36" src="https://source.unsplash.com/featured/?{face},{beauty}/200x200">
                    </div>
                </a>
            </div>
            <div class="col-span-2 pt-6 pb-9 pl-4">
                <div class="flex justify-start items-end">
                    <div class="text-3xl pb-1 leading-4">{{ Auth::user()->name }}</div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded ml-6 text-sm"> Seguir</button>
                </div>
                <div class="py-5">
                    <ul class="flex justify-start pr-8">
                        <li class="pr-8">
                            <a href="#">
                                <strong>@if( Auth::user()->posts ){{ Auth::user()->posts }} @endif @if(!Auth::user()->posts) 0 @endif </strong> publicações
                            </a>
                        </li>
                        <li class="pr-8">
                            <a href="#">
                                <strong>@if( Auth::user()->followers ){{ Auth::user()->followers }}@endif @if(!Auth::user()->posts) 0 @endif </strong> seguidores
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <strong>@if( Auth::user()->following ){{ Auth::user()->following }}@else 0 @endif </strong> seguindo
                            </a>
                        <li>
                    </ul>
                </div>
                <div class="bio">

                </div>
            </div>
        </div>
        <div class="stories flex px-8">
            <div class="flex justify-center max-w-96 flex-wrap mx-4 p-2">
                <a href="#" class="relative">
                    <svg height="100" width="100" style="position: absolute; left: -14px; top: -14px;">
                        <circle cx="50" cy="50" r="40" stroke="#dbdbdb" stroke-width="1" fill="transparent"></circle>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <div class="rounded-full w-72px h-72px overflow-hidden">
                        <img src="https://source.unsplash.com/collection/190727/80x80">
                    </div>
                    <div class="pt-5 text-sm text-center font-bold">Relembre</div>
                </a>
            </div>
        </div>
        <div class="h-full border-gray border-solid border-t mt-10">
            <div class="tabs flex justify-center color-gray">
                <div class="active relative px-8 py-4 uppercase text-xs font-bold">
                    <a href="{{ Auth::user()->nickname }}">Publicações</a>
                </div>
                <div class="relative px-8 py-4 uppercase text-xs font-bold">
                    <a href="./{{ Auth::user()->nickname }}/tagged">Marcados</a>
                </div>
                <div class="relative px-8 py-4 uppercase text-xs font-bold">
                    <a href="./{{ Auth::user()->nickname }}/reels">Reels</a>
                </div>
            </div>
            <div class="photos gap-8">
                <div>
                    <a href="">
                        <img src="https://source.unsplash.com/collection/190727/320x320">
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
