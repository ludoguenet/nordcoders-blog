const commentAddForm = document.querySelector('#add-comment');
if (document.body.contains(commentAddForm)) {
    commentAddForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const data = new FormData(this);
        const request = new XMLHttpRequest();
        const url = this.getAttribute('action');
        request.onreadystatechange = function () {
            if (request.status === 200) {
                if (request.readyState === 4) {
                    const response = JSON.parse(request.responseText);
                    if (!('fail' in response) && !document.querySelector('.success')) {
                        const comments = document.querySelector('.comments');
                        comments.insertAdjacentHTML('beforebegin', '<h5 class="success">Votre commentaire a bien été posté</h5>');
                    } else {
                        if (!document.querySelector('.danger')) {
                            const comments = document.querySelector('.comments');
                            comments.insertAdjacentHTML('beforebegin', '<h5 class="danger">Votre commentaire est trop court !</h5>');
                        }
                    }
                }
            }
        };
        request.open('POST', url, true);
        request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        request.send(data);
    });
}
