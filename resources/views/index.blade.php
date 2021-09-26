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
            <div class="mx-4">
                <h4 class="text-xl font-semibold mt-3">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                <div class="flex item-cener justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>  
                    </div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2">
                            Open
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 py-2 px-3 hover:border-gray-400 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="6" width="24"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            <ul class="abosulte w-44 py-3 z-10 font-semibold bg-white shadow-lg rounded-xl">
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- end idea -->

        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">12</div>
                    <div class="text-gray-500">Votes</div>
                </div> 
                <div class="mt-8">
                    <button 
                        class="w-20 bg-blue font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                        Voted
                    </button>
                </div>
            </div>     
            <div class="mt-8  flex-none">
                <a href="">
                    <img src="https://randomuser.me/api/portraits/women/15.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                </a>
            </div>     
            <div class="mx-4">
                <h4 class="text-xl font-semibold mt-3">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                <div class="flex item-cener justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>  
                    </div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-yellow text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2">
                            in progress
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 py-2 px-3 hover:border-gray-400 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="6" width="24"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            <!-- <ul class="abosulte w-44 py-3 z-10 ont-semibold bg-white shadow-lg rounded-xl">
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                            </ul> -->
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- end idea -->

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
                    <img src="https://randomuser.me/api/portraits/women/18.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                </a>
            </div>     
            <div class="mx-4">
                <h4 class="text-xl font-semibold mt-3">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                <div class="flex item-cener justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>  
                    </div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-red text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2">
                            Closed
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 py-2 px-3 hover:border-gray-400 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="6" width="24"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            <!-- <ul class="abosulte w-44 py-3 z-10 ont-semibold bg-white shadow-lg rounded-xl">
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                            </ul> -->
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- end idea -->

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
                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                </a>
            </div>     
            <div class="mx-4">
                <h4 class="text-xl font-semibold mt-3">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                <div class="flex item-cener justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>  
                    </div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-green text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2">
                            implemented
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 py-2 px-3 hover:border-gray-400 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="6" width="24"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            <!-- <ul class="abosulte w-44 py-3 z-10 ont-semibold bg-white shadow-lg rounded-xl">
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                            </ul> -->
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- end idea -->

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
                    <img src="https://randomuser.me/api/portraits/women/7.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                </a>
            </div>     
            <div class="mx-4">
                <h4 class="text-xl font-semibold mt-3">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">icing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto beatae delectus numquam quas officiis iste impedit tempore hic quam! Autem soluta possimus expedita comlmo Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta culpa dolores perferendis vitae modi blanditiis ea, velit asperiores excepturi!</div>
                <div class="flex item-cener justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>  
                    </div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-purple text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2 text-white">
                            Considering
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 py-2 px-3 hover:border-gray-400 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="6" width="24"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            <!-- <ul class="abosulte w-44 py-3 z-10 ont-semibold bg-white shadow-lg rounded-xl">
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                <li><a href="" class="hover:bg-gray-200 text-left px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                            </ul> -->
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- end idea -->
        
    </div><!-- end ideas -->
</x-app-layout>


