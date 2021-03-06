
<x-layout>
    <section class="px-6 py-8">
       

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="{{asset('storage/app/thumbnail/' .$post -> thumbnail)}}" alt="assa" class="rounded-xl">
                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>  {{$post -> created_at ->diffForHumans()}} </time>
                    </p>
                   

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{$post ->author -> name}}</h5>
                           
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                          <x-category-button :category="$post -> category" />
                          
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                     {{$post -> title}}!
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>  {{$post -> excerpt}}</p>

                       

                        <p>  {{$post -> body}}</p>


                    
                    </div>
                </div>
                <!-- avater with image  -->
                <section class="col-span-8 col-start-5 mt-10 space-y-6">

                @auth 
                <x-panel> 
                        <form method="POST" action="/post/{{ $post -> id }}/comments" >
                            @csrf
                            <header class="flex items-center">
                                <img src="https://i.pravatar.cc/200?u={{ auth() -> id()}}" width="40" height="40"  class="rounded-full flex-shrink-0 " alt="image">
                                <h3 class="ml-4">Want to write commant ? </h3>
                            </header>

                            <div class="mt-5">
                            <textarea class="w-full" 
                            name="body"  
                            cols="30" rows="10"
                             placeholder="you can write any things ! ">
                            </textarea>

                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"> Post </button>
                            </div>


                        </form>
            </x-panel>
            @else 
                    <p>     
                        <a href="/register" class="hover:underline text-blue-700" > Register  </a> <span> OR </span>
                        <a href="/login" class="hover:underline text-blue-700"> Login </a> <span> to write Comments </span> 
                    </p>
            @endauth




                    @foreach ($post-> comments as $comment)
                        <x-comment  :comment="$comment" />
                     @endforeach    
        
                </section> 
            </article>
        </main>

    </section>


</x-layout>