// http://quotes.stormconsultancy.co.uk/random.json  
const Content = document.getElementById("content");  
const Author = document.getElementById("author");  
function getQuote() { 
    fetch("http://api.quotable.io/random")  
    .then((res) => {  
     return res.json();  
    })  
    .then((data) => {  
     Content.innerText = data.content;  
     Author.innerText = `-${data.author}`;  
    });  }
