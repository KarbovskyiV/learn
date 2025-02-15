<div class="min-w-full align-middle">
    @can('create', \App\Models\Task::class)
        <a href="{{ route('tasks.create') }}" class="underline">Add new task</a>
        <br /><br />
    @endcan
    <table class="min-w-full border divide-y divide-gray-200">
        <thead>
        ...
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
        @foreach($tasks as $task)
            <tr class="bg-white">

                ...

                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    @can('update', $task)
                        <a href="{{ route('tasks.edit', $task) }}" class="underline">Edit</a>
                    @endcan
                    @can('delete', $task)
                        |
                        <form action="{{ route('tasks.destroy', $task) }}"
                              method="POST"
                              class="inline-block"
                              onsubmit="return confirm('Are you sure?')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="text-red-600 underline">Delete</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>