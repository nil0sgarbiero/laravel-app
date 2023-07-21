function autocompleteData(name) {
    return {
        selectedValue: {
            value: '',
            label: '',
        },
        inputValue: '', // Variável para armazenar o valor digitado pelo usuário
        items: [],
        filteredItems: [],
        isDropdownOpen: false,
        isAutocompleteDisabled: false,

        async fetchData() {
            const value = this.inputValue; // Obtém o valor digitado pelo usuário
            if (value.length >= 2) {
                fetch(`/caditem/${name}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Pesquisou!');
                        this.items = data;
                        this.filteredItems = data.filter(item =>
                            item.label.toLowerCase().includes(value.toLowerCase())
                        );
                    });
            } else {
                this.filteredItems = [];
            }
        },

        onInputChange(event) {
            this.inputValue = event.target.value; // Atualiza o valor digitado pelo usuário
            this.fetchData(); // Chama a função fetchData() com o novo valor
        },

        selectItem(item) {
            console.log('Selecionou!');
            this.selectedValue = item;
            this.isDropdownOpen = false;
            this.isAutocompleteDisabled = true;
        },

        onButtonClick() {
            console.log('Deu Refresh!');
            this.selectedValue = { value: '', label: '' };
            this.isAutocompleteDisabled = false;
        }
    };
}
