<div>
  <h1 class="flex justify-center mb-8 text-3xl">管理システム</h1>
  <div class="flex justify-center mx-5 mb-8 border-solid border-current">
    <form wire:submit.prevent="render" method="GET" class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label for="" class="block text-gray-700 text-sm font-bold mb-2">名前</label>
          <input type="text" wire:model="fullname"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <p class="block text-gray-700 text-sm font-bold mb-2">性別</p>
          <div class="flex justify-center align-middle">
            <label class="form-check-label inline-block text-gray-800">
              <input type="radio" name="gender" wire:model="gender" value=""
                class="form-check form-check-inline" checked>
              全て
            </label>
            <label class="form-check-label inline-block text-gray-800">
              <input type="radio" name="gender" wire:model="gender" value="1"
                class="form-check form-check-inline">
              男性
            </label>
            <label class="form-check-label inline-block text-gray-800">
              <input type="radio" name="gender" wire:model="gender" value="2"
                class="form-check form-check-inline">女性
            </label>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label for="" class="block text-gray-700 text-sm font-bold mb-2">登録日</label>
          <input type="date" wire:model="created_at_pre">
          ～
          <input type="date" wire:model="created_at_post">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label for="" class="block text-gray-700 text-sm font-bold mb-2">メールアドレス</label>
          <input type="text" wire:model="email"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
      </div>
      <button wire:click="clear">クリア</button>
    </form>
  </div>
  <div>{{ $contacts->links() }}</div>

  <table class="table-fixed w-full">
    <thead>
      <tr class="bg-gray-1000 text-center">
        <th class="border px-4 py2 w-20">ID</th>
        <th class="border px-4 py-2">名前</th>
        <th class="border px-4 py-2 w-20">性別</th>
        <th class="border px-4 py-2">メールアドレス</th>
        <th class="border px-4 py-4">ご意見</th>
        <th class="border px-2 py-4 w-20"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $contact)
        <tr>
          <td class="border px-4 py-2 text-center">{{ $contact->id }}</td>
          <td class="border px-4 py-2 break-words">{{ $contact->fullname }}</td>
          <td class="border px-4 py-2">
            @if ($contact->gender === 1)
              男性
            @else
              女性
            @endif
          </td>
          <td class="border px-4 py-2 break-words">{{ $contact->email }}</td>
          <td class="border px-4 py-2 break-words truncate">
            {{ $contact->opinion }}
          </td>
          <td class="border px-2 py2">
            <button wire:click="delete({{ $contact->id }})"
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">削除</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

