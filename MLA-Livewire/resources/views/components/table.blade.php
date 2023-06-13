<div>
    <div class="overflow-x-auto">
        <div class="divide-y divide-gray-300 w-full">
            <table class="w-full">
                <thead>
                    <tr class="w-full">
                        @foreach($columns as $column)
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ $column['label'] }}
                            </th>
                        @endforeach

                        @if(isset($edit) && $edit)
                            <th class="relative px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <span class="sr-only">Edit</span>
                            </th>
                        @endif

                        @if(isset($delete) && $delete)
                            <th class="relative px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <span class="sr-only">Edit</span>
                            </th>
                        @endif
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($items as $item)
                    <tr>
                        @foreach($columns as $column)
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                {{ data_get($item, $column['column']) }}
                            </td>
                        @endforeach

                        @if(isset($edit) && $edit)
                            <th class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <a href="{{ route($edit, $item->id) }}">{{ __('Edit') }}</a>
                            </th>
                        @endif

                        @if(isset($delete) && $delete)
                            <th class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <button wire:click="destroy({{$item->id}})">{{ __('Delete') }}</button>
                            </th>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $items->links() }}
</div>
