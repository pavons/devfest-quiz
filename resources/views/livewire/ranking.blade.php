<div class="">
    <h3 class="font-bold text-xl text-center mb-4 text-gray-900">{{ __('Best 10 players') }}</h3>

    <div class="-mx-4 mt-2 mb-2 ring-1 ring-gray-300 sm:mx-0 sm:rounded-lg bg-gray-100">
        <table class="min-w-full divide-y divide-gray-300">
            <thead>
            <tr>
                <th scope="col"
                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">{{ __('User') }}</th>
                <th scope="col"
                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 ">{{ __('Score') }}</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-gradient-to-b from-gray-100 via-white to-white">
            @foreach($results as $result)
                <tr>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">{{ $result->name }}</td>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6 font-bold">{{ $result->total_score }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
