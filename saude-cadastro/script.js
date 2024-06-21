document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('healthForm');
    const tableBody = document.querySelector('#healthTable tbody');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const brincoNumber = document.getElementById('brincoNumber').value;
        const date = document.getElementById('date').value;
        const event = document.getElementById('event').value;
        const description = document.getElementById('description').value;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${brincoNumber}</td>
            <td>${date}</td>
            <td>${event}</td>
            <td>${description}</td>
        `;

        tableBody.appendChild(row);

        form.reset();
    });
});
