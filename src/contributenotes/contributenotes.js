const radio_select_btns = document.querySelectorAll('input[name="study"]');

const classes = document.getElementById("classno");
const course = document.getElementById("course_name");
const semester = document.getElementById("semester");

radio_select_btns.forEach(radio_select_btn => {

    radio_select_btn.addEventListener('change',function()  {

        if(this.value === 'school'){
            classes.classList.remove('hidden');
            course.classList.add('hidden');
            semester.classList.add('hidden');
        }
        else{
            classes.classList.add('hidden');
            course.classList.remove('hidden');
            semester.classList.remove('hidden');
        }

    });

});

const upload_btn = document.getElementById("upload_btn");
const camera_btn = document.getElementById("camera_btn");

const upload_link = document.getElementById("upload_link");
const camera_link = document.getElementById("camera_link");

upload_btn.addEventListener("click", () => {

    upload_link.setAttribute("type", "file");
    camera_link.setAttribute("type","hidden");

});

camera_btn.addEventListener("click", () => {

    camera_link.setAttribute("type", "file");
    upload_link.setAttribute("type","hidden");

});

const desc_checkbox = document.getElementById("checkboxfortextarea");
const textareacontainer = document.getElementById("textareacontainer");

desc_checkbox.addEventListener("change", () => {

    if(desc_checkbox.checked) {

        textareacontainer.classList.remove('hidden');

    }

    else{

        textareacontainer.classList.add('hidden');

    }

});