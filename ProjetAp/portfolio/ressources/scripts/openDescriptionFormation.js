const titre_formation = document.getElementsByClassName('titre_formation')
let description = document.getElementsByClassName('formation_description')
addEventListener("click", (e)=>{
    e !== null ? switchDisplayTabs(e.target, "formation_") : null;
})


const switchDisplayTabs = (target, sw) => {

    if(target.id.startsWith(sw) && document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.contains("hide")){
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.add("deploy");
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.remove("hide");
    }
    else{
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.add("hide");
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.remove("deploy");
    }

}
