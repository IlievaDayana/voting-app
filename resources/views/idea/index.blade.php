<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
        <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none">
        </div>
    </div> <!-- end filters -->

    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
            <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div> 
                    <div class="mt-8">
                        <button 
                            class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                            Vote
                        </button>
                    </div>
                </div>     
                <div class="mt-8  flex-none">
                    <a href="">
                        <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                    </a>
                </div>     
                <div class="mx-4 w-full flex flex-col justify-between">
                    <h4 class="text-xl font-semibold mt-3">
                        <a href="{{route('idea.show',$idea)}}" class="hover:underline">{{ $idea->title }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">{{ $idea->description }}</div>
                    <div class="flex item-cener justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>  
                        </div>
                        <div 
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mb-6">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2">
                                Open
                            </div>
                            <button 
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 py-2 px-3 hover:border-gray-400 transition duration-150 ease-in"
                            >
                                &bull;&bull;&bull;
                            <ul 
                                x-cloak
                                x-show="isOpen"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-90"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-90"
                                @click.away="isOpen = false"
                                @keyup.escape.window = "isOpen = false"
                                class="abosulte w-44 py-3 z-10 font-semibold bg-white shadow-lg rounded-xl">
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end idea -->
        @endforeach 
    </div><!-- end ideas -->
    <div>
    {{$ideas->links()}}
    </div>
</x-app-layout>


