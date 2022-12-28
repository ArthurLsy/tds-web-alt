addEventListener("click", (e)=>{
    e !== null ? switchDescTitle(e.target, "date_title_project_") : null;
})
addEventListener("click", (e)=>{
    e !== null ? switchTitleDesc(e.target, "description_project_") : null;
})

const switchDescTitle = (target, sw) => {
    if (target.id.startsWith(sw) && document.getElementById(`description_project_${target.id.slice(-1)}`).classList.contains("hide")) {
        document.getElementById(`description_project_${target.id.slice(-1)}`).classList.add("deployProject")
        document.getElementById(`description_project_${target.id.slice(-1)}`).classList.remove("hide")
    }
    else {
        document.getElementById(`description_project_${target.id.slice(-1)}`).classList.add("hide")
        document.getElementById(`description_project_${target.id.slice(-1)}`).classList.remove("deployProject")
    }
}

const switchTitleDesc = (target, sw) => {
    if (target.id.startsWith(sw) && document.getElementById(`date_title_project_${target.id.slice(-1)}`).classList.contains("hide")) {
        document.getElementById(`date_title_project_${target.id.slice(-1)}`).classList.add("deployProject")
        document.getElementById(`date_title_project_${target.id.slice(-1)}`).classList.remove("hide")
    }
    else {
        document.getElementById(`date_title_project_${target.id.slice(-1)}`).classList.add("hide")
        document.getElementById(`date_title_project_${target.id.slice(-1)}`).classList.remove("deployProject")
    }
}