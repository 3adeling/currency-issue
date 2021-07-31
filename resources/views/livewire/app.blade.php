<div>

<div class="p-8 flex items-center justify-center bg-white">
    <div class="w-full max-w-xs mx-auto">
      
  <div>
    <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
    <div class="mt-1">
      <input id="salary" type="text" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
        wire:model="user.salary"
        x-data=""
        x-init="
        new Cleave($el, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
        "
      >
    </div>
  </div>
  <div>
    <label for="balance" class="block text-sm font-medium text-gray-700">Balance</label>
    <div class="mt-1">
      <input id="salary" type="text" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
        wire:model="user.balance"
        x-data=""
        x-init="
        new Cleave($el, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
        "
      >
    </div>
  </div>

    </div>
  </div>
</div>
