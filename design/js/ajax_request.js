/**
 * Created by walterda64090 on 13.06.2017.
 */

window.setInterval(get_posts_async, 10000);

function get_posts_async() {
    let req = new XMLHttpRequest();
    req.open("POST", "../script/ajax_updatePosts.php", true);
    req.onreadystatechange = () =>
    {
        if (req.readyState === 4)
        {
            if (req.status === 200)
            {
                let contentType = req.getResponseHeader("content-type");
                if (contentType && contentType.indexOf("application/json") !== -1)
                {
                    let result = JSON.parse(req.response);
                    insert_new_messages(result);
                }
            }
            else
            {
                alert("Error in request!");
            }
        }
    }
    req.send();
}

function insert_new_messages(messages) {
    if (messages.length === 0) return;

    let article = document.getElementsByTagName("article")[0].cloneNode(true);
    let author = article.childNodes[0].childNodes[1].innerText;
    let time = article.childNodes[0].childNodes[3].innerText;
    let message = article.childNodes[1].innerText;

    for (let i = messages.length - 1; i >= 0; i--) {
        author = messages[i].author;
        time = messages[i].time;
        message = messages[i].message;

        let parent = document.getElementById('articles');
        parent.insertBefore(article, parent.firstChild);
    }
}