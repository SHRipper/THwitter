
window.setInterval(get_posts_async(), 10000);

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
                    let resultMsg = "Request successful! Result: " + result.result + " - Info: " + result.info;
                    alert(resultMsg);
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