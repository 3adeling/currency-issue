<div>

    <input
        id="salary" type="text" class="block w-full mt-1"
        wire:model="user.salary"
        x-data=""
        x-init="
        new Cleave($el, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
        " />
    <input
        id="balance" type="text" class="block w-full mt-1"
        wire:model="user.balance"
        x-data=""
        x-init="
        new Cleave($el, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
        " />
</div>
