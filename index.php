<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .main_body{
            background-color: #F0F8FF;
        }
        .form_body{
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .form{
            display: flex;
            flex-direction: column;
        }
        .form span{
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <main class="main_body">
        <section class="form_body">
            <form action="#" method="post" enctype="multipart/form-data" class="form">
                <span>
                    <label for="name">Name:</label>
                    <input type="text" name="nameSend" id="name" />
                </span>
                <span>
                    <label for="email">email:</label>
                    <input type="email" name="emailSend" id="email" />
                </span>
            </form>
        </section>        
    </main>
</body>
</html>

<!-- Important links -->
<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input -->
<!-- https://www.w3schools.com/html/html_form_elements.asp -->
<!-- https://www.w3schools.com/html/html_form_input_types.asp -->