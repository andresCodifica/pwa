if('serviceWorker' in navigator){
    navigator.serviceWorker.register('sw.js')
    .then(reg=>console.log('registro exitoso',reg))
    .catch(err=>console.warn('error al tratar de registrar el sw',err))
}