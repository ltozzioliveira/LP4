document.getElementById('burger').addEventListener('click', function() {
    var links = document.querySelector('.links')
    if(links.classList.contains('expanded')) {
        console.log("fechou")
        links.classList.remove('expanded')
    } else {
        links.classList.add('expanded')
        console.log('abriu')
    }
})