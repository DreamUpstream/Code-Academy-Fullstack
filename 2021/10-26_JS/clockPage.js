//Helpers

function CreateElementList (tagName, amount) {
    let list = [];
    for (let i=0; i < amount; i++) {
        list.push(document.createElement(`${tagName}`));
    }
    return list;
}

function AppendElementsToTag (tagName, elementList) {
    for (let i = 0; i < elementList.length; i++) {
        tagName.append(elementList[i]);
    }
    return tagName;
}

function AddInnerTextToList (elementList, ...texts)
{
    for (let i=0; i < texts.length; i++) {
        elementList[i].innerText = texts[i];
    }
    return elementList;
}
function AppendAttributeToList (elementList, parameter, ...name)
{
    for (var i = 0; i < name.length; ++i) {
        elementList[i].setAttribute(parameter, name[i]);
    }
    return elementList;
}

function setAttributesToElement(el, attrs) {
    for(let key in attrs) {
      el.setAttribute(key, attrs[key]);
    }
}

function slides() {
    let myIndex = 0;
    carousel();
    
    function carousel() {
      let i;
      let x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); 
    }
}

function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
  }
  
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  
    return i;
  }


//Event listeners
document.addEventListener('click',function(e){
    if(e.target && e.target.id== 'lastA'){
        let x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
 });

document.addEventListener('click',function(e){
    if(e.target && e.target.id== 'submitButton'){
        let customerName = document.getElementById("customerName").value;
        let customerMessage = document.getElementById("customerMessage").value;
        console.log(customerName);
        let text;
        if (customerName && customerMessage && customerName !== "" && customerMessage !== "") {
            text = "Message sent";
        } else {
            text = "Input not valid";
        }
        document.getElementById("submitButton").innerText = text;
    }
 });

//Add stylesheets

let html = '<link rel="stylesheet" \
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />';
document.head.innerHTML += html;
html = '<link rel="stylesheet" \
href="clockPage.css" />';
document.head.innerHTML += html;
html = '<link rel="stylesheet" \
href="https://www.w3schools.com/w3css/4/w3.css" />';
document.head.innerHTML += html;

//Body

let body = document.body;

//Header

let header = document.createElement('header');
    let navMenu = document.createElement('div');
        navMenu.id = "myTopnav";
        let navMenuOptions = CreateElementList('a', 5);
        navMenuOptions = AddInnerTextToList(navMenuOptions, 'Home', 'Clock Store', 'Contact', 'Track order');
        navMenuOptions[navMenuOptions.length -1].innerHTML = ('<i></i>');
        navMenuOptions = AppendAttributeToList(navMenuOptions, 'href', '#home', '#merch', '#contact', '#track', 'javascript:void(0);');
        navMenuOptions[navMenuOptions.length -1].id = 'lastA';
    //adding styles
    navMenu.classList = 'topnav';
    navMenuOptions[navMenuOptions.length -1].classList = 'icon'; 
    navMenuOptions[navMenuOptions.length -1].childNodes[0].classList = 'fa fa-bars'; 
    navMenuOptions[0].classList = 'active'; 
    //appending
    navMenu = AppendElementsToTag(navMenu, navMenuOptions);
    header.appendChild(navMenu);
    body.append(header);

//Main

let main = document.createElement('main');
main.classList = 'main';
    //Sections
    let sections = CreateElementList('section', 3);
        //First Section
        let sliderDiv = document.createElement('div');
        let sliderImgList = CreateElementList ('img', 3);
        let images = ['https://images.unsplash.com/photo-1575203091586-611fe505bb0e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80', 'https://images.unsplash.com/photo-1550534791-2677533605ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80', 'https://images.unsplash.com/photo-1499377193864-82682aefed04?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1482&q=80'];
        sliderImgList = AppendAttributeToList(sliderImgList, 'src', images[0], images[1], images[2]);
        sliderImgList = AppendAttributeToList(sliderImgList, 'style', 'width:100%', 'width:100%', 'width:100%');
        sliderImgList = AppendAttributeToList(sliderImgList, 'class', 'mySlides', 'mySlides', 'mySlides');
        sliderDiv.classList = 'w3-content w3-section';
        sliderDiv.style = 'max-width:100%'
        sliderDiv = AppendElementsToTag(sliderDiv, sliderImgList);
        sections[0].classList = 'sliderSection';
        //Second Section
        let ClockP = document.createElement('p');
        ClockP.id = "clock";
        ClockP.classList = "clock";
        //Third Section
        let form = document.createElement('form');

        let customerName = document.createElement('input');
        customerName.placeholder = 'Name';
        customerName.id = 'customerName';

        let customerMessage = document.createElement('input');
        customerMessage.placeholder = 'Message';
        customerMessage.id = 'customerMessage';

        let submitButton = document.createElement('button');
        submitButton.innerText = 'Send';
        submitButton.id = 'submitButton';
        submitButton.setAttribute('type', 'button');

        let formArray = [customerName, customerMessage, submitButton];
        console
        form = AppendElementsToTag(form, formArray);

    //appending
    sections[0].append(sliderDiv);
    sections[1].append(ClockP);
    sections[2].append(form);
    main = AppendElementsToTag(main, sections);
    body.append(main);
    //Script
    startTime()
    slides();