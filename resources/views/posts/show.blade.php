<x-app-layout>
    <div class="app-container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{ $post->name }}
        </h1>

        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Content -->
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                            alt="{{ $post->name }}">
                    @else
                        <img class="w-full h-80 object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2017/11/15/13/27/river-2951997_960_720.jpg"
                            alt="{{ $post->name }}">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>

            <!-- Related posts -->
            <aside>
                <h2 class="text-2xl font-bold text-gray-600 mb-4">
                    Más en {{ $post->category->name }}
                </h2>

                <ul>
                    @foreach ($related as $item)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $item) }}">
                                @if ($item->image)
                                    <img class="w-1/4 h-20 object-cover object-center"
                                        src="{{ Storage::url($item->image->url) }}" alt="{{ $item->name }}">
                                @else
                                    <img class="w-1/4 h-20 object-cover object-center"
                                        src="https://cdn.pixabay.com/photo/2017/11/15/13/27/river-2951997_960_720.jpg"
                                        alt="{{ $item->name }}">
                                @endif
                                <span class="ml-2 text-gray-600">{{ $item->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
