<x-slot name="header">
    <template x-if="items.length > 0">
        <template x-for="(value, key) in items[0]" :key="key">
            <th x-text="key"></th>
        </template>
    </template>
</x-slot>

<template x-for="item in filteredItems">
    <tr @click="selectItem(item)">
        <template x-for="(value, key) in item" :key="key">
            <td x-text="value"></td>
        </template>
    </tr>
</template>

