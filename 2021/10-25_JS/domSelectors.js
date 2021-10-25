let main = document.getElementById("main");

let h1= document.createElement('h1');
   h1.innerText = "Header 1";
main.append(h1);

let p1= document.createElement('p');
    p1.innerText = "Paragraph";
    main.append(p1);

let ul = document.createElement('ul');
    for (let i = 0; i < 5; i++)
    {
        li = document.createElement('li');
        img = document.createElement('img')
        img.src = 'https://via.placeholder.com/100x100';
        li.appendChild(img);
        ul.appendChild(li);
    }
    main.append(ul);

let p2= document.createElement('p');
p2.innerText = "Paragraph 2";
main.append(p2);    
