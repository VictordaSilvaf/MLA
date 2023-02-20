<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
            </h2>

            @can('create', App\Models\Post::class)
                <x-jet-nav-link href="{{ route('posts.create') }}">
                    {{ __('Create') }}
                </x-jet-nav-link>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                TITLE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CONTENT
                            </th>
                            <th scope="col" class="px-6 py-3">
                                UPDATED AT
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                ACTIONS
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $post->title }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $post->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->content }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->updated_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center gap-2">
                                        @can('edit', App\Models\Post::class)
                                            <x-jet-nav-link href="{{ route('posts.edit', $post->id) }}">
                                                {{ __('Edit') }}
                                            </x-jet-nav-link>
                                        @endcan

                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <x-jet-nav-link href="{{ route('posts.destroy', $post->id) }}"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-jet-nav-link>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
