window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-147243672-1');

// 

$('input#search').quicksearch('table#serviceDetails tbody tr', {
    'bind': 'change input keyup keydown',
    'noResults': 'tr#noResults'
});

function myFunction(id){
var  copyText = document.getElementById(id)
copyText.select();
copyText.setSelectionRange(0,99999);
document.execCommand("copy")
alert("Copied the text: "+copyText.value)
}
