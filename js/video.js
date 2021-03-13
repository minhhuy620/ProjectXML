loadXMLFeed2 = () => {
    const url = "rss.xml";
    fetch(url)
        .then(response => response.text())
        .then(data => {
            let parser = new DOMParser()
            let xml = parser.parseFromString(data, "application/xml");
            display(xml);
        });
}
document.addEventListener("DOMContentLoaded", loadXMLFeed2);

function display(a) {
    console.log(a);
    var list = document.getElementById('item_sub');
    var item = a.getElementsByTagName('video');
    var itemNum = a.getElementsByTagName('video').length;
    console.log(itemNum);

    if (itemNum == 0) {
        list.innerHTML = "<li><h3>NO DATA...</h3></li>"
    } else {
        for (let i = 0; i < 1; i++) {
            let li = document.createElement('div');
            li.className = "listItem";
            li.innerHTML = `
            <iframe width="1390" height="670" src="${item[i].getElementsByTagName('url')[0].innerHTML}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            `;
            list.appendChild(li);
        }
    }
}