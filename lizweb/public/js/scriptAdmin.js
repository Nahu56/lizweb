var suppr = document.querySelectorAll(".suppr");

suppr.forEach((e)=> {
    console.log(e)
    e.addEventListener('click', validate);
})

function validate(){
    
    alert('Etes-vous sûre de vouloir supprimer ?');
}