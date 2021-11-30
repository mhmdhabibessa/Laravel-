

@props(['heading'])
<section class="px-6 py-8 max-w-4xl border border mx-auto">
        <h1 class="text-lg font-bold mb-4 border-b pb-2 ">
            {{$heading}}
        </h1>

        <div class="flex">
                <aside class="w-48">
                    <h4 class="font-semibold mb-6 " > Links </h4>
                    <ul>

                        <li>
                            <a href="/admin/posts" class="{{request() -> is('admin/posts')  ? 'text-blue-500' : '' }}" >  ALL Posts </a>
                        </li>


                        <li>
                            <a href="/admin/post/create" class="{{request() -> is('admin/post/create')  ? 'text-blue-500' : '' }}" >  New Post </a>
                        </li>
                    </ul>
                </aside>





                <main class="flex-1"> 
                        <x-panel>
                        {{$slot}}

                        </x-panel>
                </main>

    </div>
</section>