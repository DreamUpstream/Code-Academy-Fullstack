document.addEventListener('DOMContentLoaded', function() {
    const formBlock = document.getElementById('contact-form');

    const ACTION = formBlock.getAttribute('data-action');
    const METHOD = formBlock.getAttribute('data-method');

    document.querySelector('#submitbutton').addEventListener('click', async function() {
        let elements = document.querySelectorAll('#contact-form [name]');

        const formData = new FormData();
        let checklist = [];
        [...elements].map(element => {
            if (element.name == "check_list[]") {
                if (element.checked) {
                    checklist.push(element.value);
                }
            }
            else if(element.files) {
                if (element.value) {
                    formData.append(element.name, element.files[0]);
                }
                else {
                    formData.append(element.name, "");
                }
            }
            else {
                if (element.value == "Pasirinkite miestą") {
                    formData.append(element.name, "");
                }
                else {							
                    formData.append(element.name, element.value);
                }
            }
            
        });
        if (checklist.length > 0) {
                formData.append("languages", checklist);
            }
        else {
            formData.append("languages", "");
        }

        let response = await fetch(ACTION, {
            method: METHOD,
            body: formData
        });

        response = await response.text();

        let image = document.createElement("img");
        console.log(response);
        image.src = response;
        // image.style = "width: 300px; height: 320px";
        document.querySelector('#printImage ').innerText = "";
        document.querySelector('#printImage').appendChild(image);
        let link = document.createElement("a");
        link.setAttribute('download', "-");
        link.href = response;
        link.setAttribute('id',"download");
        document.body.appendChild(link);
    });
});
document.querySelector('#save').addEventListener('click', function() {
    link = document.querySelector("#download");
    link.click();
    link.remove();
    document.querySelector('#printImage ').innerText = "";
    let image = document.createElement("img");
    image.src = "resources/saved.png";
    image.style = "width: 300px; height: 320px";
    document.querySelector('#printImage').appendChild(image);
});
