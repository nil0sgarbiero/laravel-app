function fetchDataTable() {
    return {
        inputValue: '', // Variável para armazenar o valor digitado pelo usuário
        filteredItems: [],
        items: [],
        async fetchData() {
            try {
                const response = await fetch(`/caditem/item`);
                if (!response.ok) {
                    throw new Error('Erro na resposta da requisição.');
                }
                const data = await response.json();
                console.log('Pesquisou!');
                // Atualiza os dados da tabela com os dados recebidos da requisição
                this.items = data;
            } catch (error) {
                console.error('Erro ao buscar os dados:', error);
            }
        },
        onInputChange(event) {
            this.inputValue = event.target.value; // Atualiza o valor digitado pelo usuário
            this.fetchData(); // Chama a função fetchData() com o novo valor
        },
        onButtonClick() {
            console.log('Deu Refresh!');
            this.selectedValue = { value: '', label: '' };
            this.isAutocompleteDisabled = false;
        }
    };
}
