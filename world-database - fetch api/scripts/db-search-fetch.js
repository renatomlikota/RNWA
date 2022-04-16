$(document).ready(() => {
    const $searchInput = $('#search');

    $searchInput.keyup(async e => {
        const $element = $(e.currentTarget); 
        const searchInputValue = $element.val();
        
        try {
            const response = await fetch(`search.php?s=${searchInputValue}`);
            if (!response.ok) return;
            const data = await response.json();
            printData(data);
        }  catch (error) {
            console.error(error);
        }
    });
});

function printData(data) {
    const searchResult = $('.search-result').get(0);
    const searchResultData = $('.search-result-data').get(0);

    if (!data || !data.length) {
        searchResult.classList.remove('visible');
        $(searchResultData).html('');
        return;
    }

    searchResult.classList.add('visible');
    let htmlContent = '';
    data.forEach(item => {
        htmlContent += `<strong>${item.naziv}</strong><br><p>${item.opis}</p>`;
    });
    
    $(searchResultData).html(htmlContent);
}