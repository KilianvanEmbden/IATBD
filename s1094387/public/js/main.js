const navButton = document.getElementById('js--navButton');
const navDropdown = document.getElementById('js--navDropdown');
const adminPanel = document.getElementById('js--adminPanel');

function goBack() {
    window.history.back();
}

function checkIfAdmin(){
    if(adminPanel.dataset.checkIfAdmin == 'Admin'){
        adminPanel.style.display = "block";
    }else{
        adminPanel.style.display = "none";
    }
}

checkIfAdmin();

