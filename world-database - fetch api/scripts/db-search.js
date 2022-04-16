const searchInput = document.querySelector('#search');

function initEvents() {
    searchInput.addEventListener('keyup', () => {
        const searchInputValue = searchInput.value;
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                const response = xmlhttp.responseText;
                const data = JSON.parse(response);
                printData(data);
            }
        }

        xmlhttp.open('GET', `search.php?s=${searchInputValue}`, true);
        xmlhttp.send();
    });
}

function printData(data) {
    const searchResult = document.querySelector('.search-result');
    const searchResultData = document.querySelector('.search-result-data');
    console.log(data);

    if (!data || !data.length) {
        searchResult.classList.remove('visible');
        searchResultData.innerHTML = '';
        return;
    }

    searchResult.classList.add('visible');
    let htmlContent = '';
    data.forEach(item => {
        htmlContent += `<strong>${item.naziv}</strong><br><p>${item.opis}</p>`;
    });
    searchResultData.innerHTML = htmlContent;
}

initEvents();
printData();