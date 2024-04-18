<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 text-gray-900 dark:text-gray-100">
                    <table class="rounded w-full overflow-hidden">
                        <thead>
                            <tr class="dark:bg-slate-600">
                                <th class="border-b">Nome</th>
                                <th class="border-b">Descrição</th>
                                <th class="border-b">Telefone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stores as $store)
                                <tr class="even:bg-slate-50 odd:bg-slate-200 hover:bg-slate-300">
                                    <td>
                                        <span class="text-gray-800 p-1">{{ $store->name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-gray-800 p-1">{{ $store->description }}</span>
                                    </td>
                                    <td>
                                        <span class="text-gray-800 p-1">{{ $store->phone }}</span>
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


<hr/>
@dump($stores)
