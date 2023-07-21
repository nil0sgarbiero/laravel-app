<div x-data="autocompleteData('{{ $name }}')" x-init="fetchData()">
    <div class="row justify-content-center">
        <label><small>{{ $label }}</small></label>
        <div class="col-1">
            <input type="text" class="form-control form-control-sm" x-model="selectedValue.value" disabled>
        </div>
        <div class="col-10">
            <input type="text" class="form-control form-control-sm " x-model="selectedValue.label" x-on:input="onInputChange($event)" @focus="isDropdownOpen = true" x-bind:disabled="isAutocompleteDisabled">
            <ul class="list-group z-3 position-absolute" x-show="isDropdownOpen" x-cloak>
                <template x-for="item in filteredItems" class="z-3" >
                    <li class="list-group-item z-3 position-relative" x-text="item.label" @click="selectItem(item)"></li>
                </template>
            </ul>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-secondary ms-2 btn-sm" x-on:click="onButtonClick"><i class="bi bi-arrow-repeat"></i></button>
        </div>
    </div>
</div>
<hr/>

