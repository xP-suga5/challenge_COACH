<div>
    <h1 class="flex justify-center mb-8 text-3xl">お問い合わせ</h1>

    <form wire:submit.prevent="register">
        <table class="w-full leading-normal">
            <tr class="my-5">
                <th>
                    <label for="fullname" class="block text-gray-700 font-bold mb-2">
                        名前
                        <span class="text-red-700">※</span>
                    </label>
                </th>
                <td>
                    <input type="text" wire:model.lazy="contact.fullname" id="fullname"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <div>@error('contact.fullname')<span style="color:red">{{ $message }}</span>@enderror</div>
                    <div class="text-gray-400">
                        例)山田太郎
                    </div>
                </td>
            </tr>
            <tr class="my-5">
                <th>
                    <label for="gender">性別</label>
                    <span class="text-red-700">※</span>
                </th>
                <td>
                    <label><input type="radio" name="gender" wire:model.defer="contact.gender" value="1">男性</label>
                    <label><input type="radio" name="gender" wire:model.defer="contact.gender" value="2">女性</label>
                    <div>@error('contact.gender')<span style="color:red">{{ $message }}</span>@enderror</div>
                </td>
            </tr>
            <tr class="my-5">
                <th>
                    <label for="email">メールアドレス</label>
                    <span class="text-red-700">※</span>
                </th>
                <td>
                    <input type="email" wire:model.lazy="contact.email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <div>@error('contact.email')<span style="color:red">{{ $message }}</span>@enderror</div>
                    <div class="text-gray-400">
                        例)test@example.com
                    </div>
                </td>
            </tr>
            <tr class="my-5">
                <th>
                    <label for="postcode">郵便番号</label>
                    <span class="text-red-700">※</span>
                </th>
                <td>
                    <span class="w-1/6">〒</span>
                    <input type="text" wire:model.lazy="contact.postcode" id="postcode" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-4/6">
                    <div>@error('contact.postcode')<span style="color:red">{{ $message }}</span>@enderror</div>
                    <div class="text-gray-400">
                        例)1234567
                    </div>
                </td>
            </tr>
            <tr class="my-5">
                <th>
                    <label for="address">住所</label>
                    <span class="text-red-700">※</span>
                </th>
                <td>
                    <input type="text" wire:model.lazy="contact.address" id="address" class="shadow appearance-none border rounded py-2 px-3 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <div>@error('contact.address')<span style="color:red">{{ $message }}</span>@enderror</div>
                    <div class="text-gray-400">
                        例)東京都渋谷区千駄ヶ谷1-2-3
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="building_name">建物名</label>
                </th>
                <td>
                    <input type="text" wire:model.lazy="contact.building_name" id="building_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
                    <div>@error('contact.building_name')<span style="color:red">{{ $message }}</span>@enderror</div>
                    <div class="text-gray-400">
                        例)千駄ヶ谷マンション101
                    </div>
                </td>
            </tr>
            <tr class="my-5">
                <th>
                    <label for="opinion">ご意見</label>
                    <span class="text-red-700">※</span>
                </th>
                <td>
                    <textarea wire:model.lazy="contact.opinion" id="opinion" cols="30" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    <div>@error('contact.opinion')<span style="color:red">{{ $message }}</span>@enderror</div>
                </td>
            </tr>
        </table>
        <div class="flex justify-center">
            <button wire:submit.prevent="register" class="inline-flex justify-center w-1/2 rounded-md border border-transparent px-4 py-2 bg-gray-800 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                登録する
            </button>
        </div>
    </form>
    @if($isOpen)
    @include('livewire.contacts.confirm')
    @endif
</div>