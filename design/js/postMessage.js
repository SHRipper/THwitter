function sendNewPost() {
    if (validate_post()) {
        let newPost = document.getElementById('inputText').value;
        let reqObj = {method: "post", m: newPost};
        let req = new XMLHttpRequest();
        req.open("POST", "../script/ajax_newPost.php", true);
        req.onreadystatechange = () => {
            if (req.readyState === 4) {
                if (!(req.status >= 200 && req.status < 300)) {
                    alert("Fehler beim sender der Nachricht!");
                } else {
                    document.getElementById('inputText').value = "";
                    get_posts_async();
                }
            }
        }
        req.send(JSON.stringify(reqObj));
    }
}