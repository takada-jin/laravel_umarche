<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    1111
    <x-tests.card title="タイトル" content="本文" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル"></x-tests.card>
    <x-tests.card title="CSS変更" class="bg-red-300"></x-tests.card>

</x-tests.app>
