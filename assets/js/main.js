function sendForm(event){
    event.preventDefault();
    let formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
    };
    console.log(formData);
    $.ajax({
        url: '/ajax/ajax.php',
        type: 'POST',
        dataType:"json",
        data: formData,
        success: function(data) {
            if(data.status=="success"){
                let sq = document.getElementById('answer');
                sq.removeAttribute('style');
                sq.textContent=data.data;
                setInterval(()=>{
                    window.location.reload();
                }, 3000);

            }
    },
    error: function(jqXHR, textStatus, errorThrown) {
            console.error('Ошибка:', textStatus, errorThrown);
            alert('Произошла ошибка при отправке сообщения.');
        }
    });
}

document.addEventListener("DOMContentLoaded",()=>{
    if(document.getElementById('submit-form')!=null){
        let form = document.getElementById('submit-form');
        form.addEventListener('submit', sendForm);
    }
});