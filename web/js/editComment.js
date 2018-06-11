let editButton = document.querySelector('#edit-comment');
if (document.body.contains(editButton)) {
    editButton.addEventListener('click', function (e) {
        e.preventDefault();
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
    });
}