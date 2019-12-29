let createButton = document.getElementById('create-button');
let createForm = document.getElementById('create-form');
let isCreateFormDisplay = false;

let updateButton = document.getElementById('update-button');
let updateForm = document.getElementById('update-form');
let isUpdateFormDisplay = false;

let deleteButton = document.getElementById('delete-button');
let deleteForm = document.getElementById('delete-form');
let isDisplayFormDisplay = false;

//ToggleForm
createButton.onclick = function() {
    
    if(isCreateFormDisplay==false){
        //Display the Form
        createForm.style.display = 'block';
        isCreateFormDisplay = true;
    }else{
        //Hide the Form
        createForm.style.display = 'none';
        isCreateFormDisplay = false;
    }
}

//Toggle Update Form
updateButton.onclick = function() {
    
    if(isUpdateFormDisplay==false){
        //Display the Form
        updateForm.style.display = 'block';
        isUpdateFormDisplay = true;
    }else{
        //Hide the Form
        updateForm.style.display = 'none';
        isUpdateFormDisplay = false;
    }
}

deleteButton.onclick = function() {
    
    if(isDisplayFormDisplay==false){
        //Display the Form
        deleteForm.style.display = 'block';
        isDisplayFormDisplay = true;
    }else{
        //Hide the Form
        deleteForm.style.display = 'none';
        isDisplayFormDisplay = false;
    }
}