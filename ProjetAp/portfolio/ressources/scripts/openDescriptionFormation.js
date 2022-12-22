let description = document.getElementsByClassName('formation_description')
addEventListener("click", (e)=>{
    e !== null ? switchDisplayTabs(e.target, "formation_") : null;
})


const switchDisplayTabs = (target, sw) => {
    if(target.id.startsWith(sw)) {
        let desc_formation = document.getElementsByClassName('formation_description')
        for (i = 0; i < desc_formation.length; i++) {
            if(desc_formation[i].classList.contains("deploy")) {
                desc_formation[i].classList.add("hide");
                desc_formation[i].classList.remove("deploy");
            }
        }
    }
    if(target.id.startsWith(sw) && document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.contains("hide")){
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.add("deploy");
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.remove("hide");
    }
    else{
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.add("hide");
        document.getElementById(`formation_content_${target.id.slice(-1)}`).classList.remove("deploy");
    }

}
