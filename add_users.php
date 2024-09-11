<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_Users</title>
</head>
<body>
    
    <form action="" id="userForm">
     
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">

            <label for="">Discord Name</label>
            <input type="text" name="ds_name" id="ds_name" required>

        </div>

       <div class="form-group">
            <label for="">Role</label>
            <input type="text" name="role" id="role" required>
       </div>

        <button type="submit">Submit</button>
    </form>

    <div id="result"></div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
        $(document).ready(function() {
            // При отправке формы
            $('#userForm').on('submit', function(event) {
                event.preventDefault(); // Предотвращаем перезагрузку страницы

                // Собираем данные формы
                var formData = {
                    name: $('#name').val(),
                    ds_name: $('#ds_name').val(),
                    role: $('#role').val()
                };

                // Отправляем данные на сервер через jQuery AJAX
                $.ajax({
                    url: 'add_user.php', // Укажите ваш обработчик PHP
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Выводим результат в блоке #result
                        $('#result').html(response);
                        // Очищаем форму
                        $('#userForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        // Обработка ошибок
                        console.error('Ошибка: ' + error);
                        $('#result').html('Error occurred. Please try again.');
                    }
                });
            });
        });
    </script>


</body>
</html>