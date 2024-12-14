function addButton(parentId){

    let cloneEntry = document.querySelector(".entry-model").cloneNode(true)
    cloneEntry.classList.remove('entry-model')

    let targetSection = document.querySelector(`#${parentId}`)
    targetSection.appendChild(cloneEntry)

}

function evt(e){
    let btnParent = e.target.dataset.group
    addButton(btnParent)
}

let btns = document.querySelectorAll('.button')
btns.forEach(btn => {
    btn.addEventListener('mousedown',evt)
})



function apagar(el){

    el.remove();

}