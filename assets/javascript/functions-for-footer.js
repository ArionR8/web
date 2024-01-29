
//show coockis info effect
function showText(htmlContent) {
    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = htmlContent;
    resultDiv.style.display = 'block';

    // styling div
    resultDiv.style.fontSize = '14px';
    resultDiv.style.paddingLeft = '25px';
    resultDiv.style.paddingRight = '20px';
}