<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
</svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <livewire:idea-show 
            :idea="$idea"
            :votesCount="$votesCount"
        />
        <div class="comments-container relative space-y-6 my-6 ml-22 mt-1 pt-9">
            <div class="comment-container bg-white rounded-xl flex px-5">
                <div class="flex-none mt-3">
                    <a href="">
                        <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                    </a>
                </div>     
                <div class="mx-4 w-full">
                    <!-- <h4 class="text-xl font-semibold mt-3">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                    <div class="flex item-cener justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                            <div class="font-black text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>     
                        </div>
                        <div class="flex items-center space-x-2 mb-6">
                            <button class="relative justify-center items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 hover:border-gray-400 transition duration-150 ease-in">
                            &bull;&bull;&bull;
                            <!-- <ul class="abosulte w-44 py-3 z-10 font-semibold bg-white shadow-lg rounded-xl">
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                </ul> -->
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end comment -->
            <div class="comment-container bg-white rounded-xl flex px-5">
                <div class="flex-none mt-3">
                    <a href="">
                        <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                    </a>
                </div>     
                <div class="mx-4 w-full">
                    <!-- <h4 class="text-xl font-semibold mt-3">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                    <div class="flex item-cener justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                            <div class="font-black text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>     
                        </div>
                        <div class="flex items-center space-x-2 mb-6">
                            <button class="relative justify-center items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 hover:border-gray-400 transition duration-150 ease-in">
                            &bull;&bull;&bull;
                            <!-- <ul class="abosulte w-44 py-3 z-10 font-semibold bg-white shadow-lg rounded-xl">
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                </ul> -->
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end comment -->
            <div class="is-admin comment-container bg-white rounded-xl flex px-5 border border-blue">
                <div class="flex-none mt-3">
                    <a href="">
                        <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                    </a>
                    <div class="font-black text-blue">Admin</div>
                </div>     
                <div class="mx-4 w-full">
                    <!-- <h4 class="text-xl font-semibold mt-3">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                    <div class="flex item-cener justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                            <div class="font-black text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>     
                        </div>
                        <div class="flex items-center space-x-2 mb-6">
                            <button class="relative justify-center items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 hover:border-gray-400 transition duration-150 ease-in">
                            &bull;&bull;&bull;
                            <!-- <ul class="abosulte w-44 py-3 z-10 font-semibold bg-white shadow-lg rounded-xl">
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                </ul> -->
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end comment -->
            <div class="comment-container bg-white rounded-xl flex px-5">
                <div class="flex-none mt-3">
                    <a href="">
                        <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                    </a>
                </div>     
                <div class="mx-4 w-full">
                    <!-- <h4 class="text-xl font-semibold mt-3">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                    <div class="flex item-cener justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                            <div class="font-black text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>     
                        </div>
                        <div class="flex items-center space-x-2 mb-6">
                            <button class="relative justify-center items-center bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 hover:border-gray-400 transition duration-150 ease-in">
                            &bull;&bull;&bull;
                            <!-- <ul class="abosulte w-44 py-3 z-10 font-semibold bg-white shadow-lg rounded-xl">
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                    <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                </ul> -->
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end comment -->
        </div><!-- end comments -->

    </div><!-- end ideas -->
</x-app-layout>