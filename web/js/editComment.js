let editButtons = document.querySelectorAll('#edit-button');

for (let i = 0; i < editButtons.length; i++) {
    editButtons[i].addEventListener('click', function (e) {
        e.preventDefault();
        if (document.body.querySelector('#form-update')) {
            document.querySelector('#form-update').remove();
            return false;
        }
        const url = this.getAttribute('href');
        const form = document.createElement('form');
        const input = document.createElement('input');
        const comment = this.parentNode;
        const paragraph = comment.getElementsByTagName('p')[0].innerHTML;
        const button = document.createElement('button');
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', '_commentId');
        hiddenInput.setAttribute('value', this.getAttribute('data-id'));
        input.setAttribute('type', 'text');
        input.classList.add('input');
        input.setAttribute('value', paragraph);
        input.setAttribute('name', '_content');
        button.setAttribute('type', 'submit');
        button.classList.add('btn');
        button.innerHTML = 'Modifier mon commentaire';
        form.action = url;
        form.method = 'POST';
        form.setAttribute('id', 'form-update');
        form.appendChild(input);
        form.appendChild(hiddenInput);
        form.appendChild(button);
        if (!document.body.querySelector('#form-update')) {
            comment.insertAdjacentElement('afterend', form);
        }
        document.querySelector('#form-update').addEventListener('submit', function (e) {
            e.preventDefault();
            const data = new FormData(this);
            const request = new XMLHttpRequest();
            const url = this.getAttribute('action');
            request.onreadystatechange = function () {
                if (request.readyState === 4) {
                    if (request.status === 200) {
                        response = JSON.parse(request.responseText);
                        if ('success' in response) {
                            comment.getElementsByTagName('p')[0].innerHTML = response.success;
                        }
                    }
                }
            };
            request.open('POST', url, true);
            request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            request.send(data);
        });
    });
}