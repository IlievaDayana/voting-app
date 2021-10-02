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
        <div class="idea-container bg-white rounded-xl flex px-5">
            <div class="flex-none mt-3">
                <a href="">
                    <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="avatar" class="w-14 h-14 rounded-xl" >
                </a>
            </div>     
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold mt-3">
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 mt-3">{{ $idea->description }}</div>
                <div class="flex item-cener justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold text-gray-400 space-x-2 mb-6">
                        <div class="font-black text-gray-900">{{ $idea->user->name }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans()}}</div>
                        <div>&bull;</div>
                        <div>{{$idea->category->name}}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>  
                    </div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-3 py-2">
                            Open
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 w-7 hover:border-gray-400 transition duration-150 ease-in">
                            &bull;&bull;&bull;
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
        <div class="flex justify-between items-center w-full h-6">
            <div class="flex">
                <div x-data="{isOpen: false}" class="relative">
                    <button type="button" 
                        @click="isOpen = !isOpen"
                        class="flex justify-center items-center mx-3 text-xs text-center w-28 h-11 rounded-xl font-semibold border text-white border-blue bg-blue hover:border-blue transition duration-150 ease-in">
                        <span>Reply</span>  
                    </button>
                    <div 
                        x-cloak
                        x-show="isOpen"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        @click.away="isOpen = false"
                        class="absolute z-20 w-104 text-left font-semibold text-sm bg-white rounded-xl mt-2 shadow-md"
                    >
                        <form action="#" method="POST" class="space-y-4 px-4 py-6">
                            <div>
                                <textarea name="post_comment" id="post_comment" cols="30" rows="4" placeholder="go agead" 
                                class="w-full bg-gray-100  text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2"></textarea>
                            </div>

                            <div class="flex items-center justify-between space-x-3">
                                <button type="button" 
                                    class="flex items-center text-xs justify-center w-1/2 h-11 rounded-xl font-semibold border text-white bg-blue hover:border-blue px-6 py-3
                                    transition duration-150 ease-in">
                                    submit
                                </button>
                                <button type="button" 
                                    class="flex items-center text-xs justify-center w-1/2 h-11 rounded-xl font-semibold border text-gray-900 bg-gray-300 hover:border-gray-400 px-6 py-3
                                    transition duration-150 ease-in">
                                    reply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

               <div x-data="{ isOpen: false }" class="relative">
                    <button 
                        @click="isOpen = !isOpen"
                        type="button" 
                        class="flex justify-center items-center mx-3 text-xs text-center w-28 h-11 rounded-xl font-semibold border text-gray-900 bg-gray-200 hover:border-gray-300 transition duration-150 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span>set status</span>  
                    </button> 
                    <div 
                        x-cloak
                        x-show="isOpen"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        @click.away="isOpen = false" 
                        class="absolute z-20 w-104 text-left font-semibold text-sm bg-white rounded-xl mt-2 shadow-md"
                    >
                        <form action="#" method="POST" class="space-y-4 px-4 py-6">
                            <div class="flex flex-col justify-between space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" checked name="radio-direct" class="text-green bg-gray-200 border-none" value="1">
                                    <span class="ml-2">open</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" class="text-purple bg-gray-200 border-none" value="2">
                                    <span class="ml-2">considering</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" class="text-yellow bg-gray-200 border-none" value="3">
                                    <span class="ml-2">in progress</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" class="text-gray-400 bg-gray-200 border-none" value="4">
                                    <span class="ml-2">implemented</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" class="text-red bg-gray-200 border-none" value="5">
                                    <span class="ml-2">closed</span>
                                </label>
                            </div>
                            <div>
                                <textarea name="post_comment" id="post_comment" cols="30" rows="4" placeholder="ad an update comment (optional)" 
                                class="w-full bg-gray-100  text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2"></textarea>
                            </div>                         

                            <div class="flex items-center justify-between space-x-3">
   
                            <button type="button" 
                                class="flex items-center text-xs justify-between w-1/2 h-11 rounded-xl font-semibold border border-gray-200 bg-gray-200 hover:border-gray-400 px-6 py-3
                                transition duration-150 ease-in">
                                Attach
                                <svg xmlns="http://www.w3.org/2000/svg" class="transform rotate-140" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.988 511.988" style="enable-background:new 0 0 511.988 511.988;" xml:space="preserve" width="15px" height="15px">
                                    <g transform="translate(1 1)">
                                        <g>
                                            <path d="M489.305,185.463c-8.354-8.309-21.861-8.272-30.17,0.081L202.687,443.379c-33.271,33.271-87.308,33.271-120.641-0.045    c-33.308-33.325-33.308-87.362,0.004-120.674L346.089,57.234c20.772-20.771,54.543-20.771,75.375,0.045    c20.826,20.826,20.826,54.593-0.005,75.425L202.727,351.434c-0.014,0.014-0.026,0.03-0.04,0.044    c-8.333,8.287-21.8,8.276-30.116-0.04c-8.33-8.33-8.33-21.831,0-30.161l105.58-105.602c8.33-8.332,8.329-21.84-0.003-30.17    c-8.332-8.33-21.84-8.329-30.17,0.003l-105.579,105.6c-24.991,24.991-24.991,65.507,0.002,90.499    c24.992,24.992,65.508,24.992,90.501,0c0.029-0.029,0.052-0.06,0.08-0.089l218.646-218.646c37.494-37.494,37.494-98.276,0-135.77    c-37.499-37.472-98.277-37.472-135.749,0L51.84,292.53C1.906,342.464,1.906,423.509,51.876,473.504    c50.003,49.977,131.049,49.977,181.022,0.004l256.489-257.875C497.695,207.279,497.658,193.772,489.305,185.463z"/>
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </button>
                            <button type="button" 
                                class="flex items-center text-xs justify-between w-1/2 h-11 rounded-xl font-semibold border text-white border-blue bg-blue hover:border-blue px-6 py-3
                                transition duration-150 ease-in">
                                submit
                            </button>
                        </div>
                        <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" checked name="notify-voters" class="text-blue bg-gray-200 border-none" value="5">
                                    <span class="ml-2">notify all participants</span>
                                </label>
                            </div>
                        </form>
                    </div> 
               </div>

            </div>
            <div class="flex">
                <button type="button" 
                    class="flex justify-center items-center flex-col text-xs mx-2 text-center w-11 h-11 rounded-xl font-semibold  border border-gray-200 bg-white hover:border-gray-400 transition duration-150 ease-in">
                    12 <span class="text-gray-400">votes</span> 
                </button>
                <button type="button" 
                    class="flex justify-center items-center text-xs mx-3 w-28 h-11 text-center rounded-xl font-semibold border border-gray-200 bg-gray-200 hover:border-gray-400  transition duration-150 ease-in">
                    VOTE
                </button>
            </div><!-- end buttons container -->       
        </div>
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