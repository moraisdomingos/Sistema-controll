const info = document.querySelector('.info')

if(info != null) {
    setTimeout(function() {
        info.classList.add('hide')
        location.reload()
    }, 3000)
}
