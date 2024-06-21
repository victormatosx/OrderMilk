document.addEventListener('DOMContentLoaded', () => {
    const healthData = [
        { date: '2024-01-10', event: 'Vacina', description: 'Vacina contra febre aftosa' },
        { date: '2024-02-15', event: 'Doença', description: 'Tratamento para mastite' },
        { date: '2024-03-20', event: 'Cuidado Especial', description: 'Suplementação mineral' },
        { date: '2024-01-25', event: 'Vacina', description: 'Vacina contra brucelose' },
        { date: '2024-02-18', event: 'Doença', description: 'Tratamento para carrapatos' },
        { date: '2024-04-10', event: 'Vacina', description: 'Vacina contra raiva' },
        { date: '2024-05-05', event: 'Vacina', description: 'Vacina contra clostridiose' },
        { date: '2024-06-12', event: 'Vacina', description: 'Vacina contra leptospirose' },
        { date: '2024-07-20', event: 'Vacina', description: 'Vacina contra IBR' },
        { date: '2024-08-25', event: 'Vacina', description: 'Vacina contra BVD' },
        { date: '2024-09-30', event: 'Vacina', description: 'Vacina contra brucelose' },
        { date: '2024-10-10', event: 'Vacina', description: 'Vacina contra febre aftosa' },
        { date: '2024-11-15', event: 'Vacina', description: 'Vacina contra raiva' },
        { date: '2024-12-05', event: 'Vacina', description: 'Vacina contra clostridiose' },
    ];

    const groupedData = {};

    // Filter data to include only "Vacina" events
    const vacinaData = healthData.filter(item => item.event === 'Vacina');

    vacinaData.forEach(item => {
        const month = new Date(item.date).getMonth();
        if (!groupedData[month]) {
            groupedData[month] = { 'Vacina': 0 };
        }
        groupedData[month]['Vacina']++;
    });

    const labels = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
    const datasets = [{
        label: 'Vacina',
        data: labels.map((_, index) => groupedData[index] ? groupedData[index]['Vacina'] : 0),
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }];

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
