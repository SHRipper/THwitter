function sendNewPost() {
    if (validate_post()) {
        let newPost = document.getElementById('inputText').value;
        let reqObj = {method: "post", m: newPost};
        let req = new XMLHttpRequest();
        req.open("POST", "../script/asyncReceivePost.php", true);
        req.onreadystatechange = () => {
            if (req.readyState === 4) {
                if (!(req.status >= 200 && req.status < 300)) {
                    alert("Error in request!");
                } else {
                    document.getElementById('inputText').value = "";
                }
            }
        }
        req.send(JSON.stringify(reqObj));
    }
}