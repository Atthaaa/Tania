<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Chat</title>
</head>
<body>
    <div class="chat-container">
        <div id="chat-box"></div>
        <form id="chat-form">
            <input type="hidden" id="id_pengguna" value="USER01">
            <input type="hidden" id="id_konsultan" value="CONS01">
            <input type="text" id="message" placeholder="Type a message" required>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="../public/js/script.js"></script>
</body>
</html>
