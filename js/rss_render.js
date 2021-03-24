loadXMLFeed = () => {
    const url = "rss.xml";
    fetch(url)
        .then(response => response.text())
        .then(data => {
            let parser = new DOMParser()
            let xml = parser.parseFromString(data, "application/xml");
            displayRSS(xml);
        });
}
document.addEventListener("DOMContentLoaded", loadXMLFeed);

function displayRSS(x) {
    console.log(x);
    var list = document.getElementById('item');
    var item = x.getElementsByTagName('video');
    var itemNum = x.getElementsByTagName('video').length;
    console.log(itemNum);

    if (itemNum == 0) {
        list.innerHTML = "<li><h3>NO DATA...</h3></li>"
    } else {
        for (let i = 0; i < itemNum; i++) {
            let li = document.createElement('div');
            li.className = "listItem";
            li.innerHTML = `
            <iframe width="359" height="201" src="${item[i].getElementsByTagName('url')[0].innerHTML}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="video-bottom-section">
                <a href="#"><img class="channel-icon" src="${item[i].getElementsByTagName('img')[0].innerHTML}" /></a>
                <div class="video-details">
                    <a href=# class="video-title" >${item[i].getElementsByTagName('song')[0].innerHTML}</a>
                    <a href=# class="video-channel-name" > ${item[i].getElementsByTagName('channelname')[0].innerHTML} <i class="fas fa-check-circle"></i></a>
                <div class="video-metadata">
                    <span>${item[i].getElementsByTagName('views')[0].innerHTML} views • </span>
                    <span>${item[i].getElementsByTagName('time')[0].innerHTML}</span>
                </div>
                </div>
            </div>
            `;
            list.appendChild(li);
        }
    }
}



/* */