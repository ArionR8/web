
//show coockis info effect
function showText(htmlContent) {
    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = htmlContent;
    resultDiv.style.display = 'block';

    // styling div
    resultDiv.style.fontSize = '12px';
    resultDiv.style.paddingLeft = '20px';
    resultDiv.style.paddingRight = '10px';
  }