const apiKey = 'cur_live_h2BnBjH1QLX2hNYsXiftkCeIgRs5QGchLqQMoNDw'; // Replace with your Fixer.io API key

function convertCurrency() {
    const amount = document.getElementById('amount').value;
    const fromCurrency = document.getElementById('fromCurrency').value;
    const toCurrency = document.getElementById('toCurrency').value;

    fetch(`https://app.currencyapi.com=${fromCurrency}&symbols=${toCurrency}&apikey=${cur_live_h2BnBjH1QLX2hNYsXiftkCeIgRs5QGchLqQMoNDw}`)
        .then(response => response.json())
        .then(data => {
            const exchangeRate = data.rates[toCurrency];
            const result = amount * exchangeRate;
            document.getElementById('result').textContent = `${amount} ${fromCurrency} is equal to ${result.toFixed(2)} ${toCurrency}`;
        })
        .catch(error => {
            console.error(error);
            document.getElementById('result').textContent = 'Error fetching data';
        });
}

// Populate currency select options
fetch('https://app.currencyapi.com apikey=${cur_live_h2BnBjH1QLX2hNYsXiftkCeIgRs5QGchLqQMoNDw}')
    .then(response => response.json())
    .then(data => {
        const selectFrom = document.getElementById('fromCurrency');
        const selectTo = document.getElementById('toCurrency');
        for (const currency in data.symbols) {
            const option = document.createElement('option');
            option.value = currency;
            option.textContent = currency;
            selectFrom.appendChild(option);
            selectTo.appendChild(option.cloneNode(true));
        }
    })
    .catch(error => {
        console.error(error);
    });