// script.js
document.addEventListener('DOMContentLoaded', () => {
    const healthData = [
        { date: '2024-01-10', event: 'Vacina', description: 'Vacina contra febre aftosa' },
        { date: '2024-02-15', event: 'Doença', description: 'Tratamento para mastite' },
        { date: '2024-03-20', event: 'Cuidado Especial', description: 'Suplementação mineral' },
        { date: '2024-01-25', event: 'Vacina', description: 'Vacina contra brucelose' },
        { date: '2024-02-18', event: 'Doença', description: 'Tratamento para carrapatos' },
        // Adicione mais dados conforme necessário
    ];

    // Preparar os dados para o gráfico
    const eventTypes = ['Vacina', 'Doença', 'Cuidado Especial'];
    const groupedData = {};

    healthData.forEach(item => {
        const month = new Date(item.date).getMonth();
        if (!groupedData[month]) {
            groupedData[month] = { 'Vacina': 0, 'Doença': 0, 'Cuidado Especial': 0 };
        }
        groupedData[month][item.event]++;
    });

    const labels = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
    const datasets = eventTypes.map(type => ({
        label: type,
        data: labels.map((_, index) => groupedData[index] ? groupedData[index][type] : 0),
        backgroundColor: type === 'Vacina' ? 'rgba(75, 192, 192, 0.2)' :
                          type === 'Doença' ? 'rgba(255, 99, 132, 0.2)' : 'rgba(255, 206, 86, 0.2)',
        borderColor: type === 'Vacina' ? 'rgba(75, 192, 192, 1)' :
                      type === 'Doença' ? 'rgba(255, 99, 132, 1)' : 'rgba(255, 206, 86, 1)',
        borderWidth: 1
    }));

    const ctx = document.getElementById('healthChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels,
            datasets
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                    
                }
            }
        }
    });

    // Preencher a tabela com os dados do histórico
    const tableBody = document.querySelector('#healthTable tbody');
    healthData.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.date}</td>
            <td>${item.event}</td>
            <td>${item.description}</td>
        `;
        tableBody.appendChild(row);
    });
});
